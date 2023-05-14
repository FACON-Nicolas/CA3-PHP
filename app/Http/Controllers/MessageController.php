<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index() {
        $user = Auth::user();
        $recipients = $user->sent()->with('receiver')->get()->pluck('receiver');
        $senders = $user->received()->with('sender')->get()->pluck('sender');

        $users = $recipients->concat($senders)->unique();

        return view('messages.index', ['title' => 'messages', 'users' => $users]);
    }

    public function show($user_id) {
        return view('messages.show', ['title' => 'messages', 'user' => User::findOrFail($user_id)]);
    }
    public function showName(Request $r) {
        $this->validate($r,[
            'name' => 'required'
        ]);
        return redirect()->route('messages.show', User::all()->where('name', '=', $r->name)->first()->id);
    }

    public function store(Request $r, $user_id) {
        $this->validate(
            $r,[
                'message' => 'required',
            ]
        );
        $user = Auth::user();
        $message = new Message();
        $message->message = $r->message;
        $message->receiver()->associate($user_id);
        $message->sender()->associate(Auth::user()->id);
        $message->save();
        return redirect()->back();
    }
}
