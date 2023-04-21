<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SearchController extends Controller
{

    /**
     * @throws ValidationException
     */
    public function index(Request $request): RedirectResponse {
        $this->validate($request, [
            'search' => 'required'
        ]);

        $search = $request->search;
        return redirect()->route('search.search', $search);
    }

    public function search(string $search): Factory|View|Application {

        return view('search.index', [
            'title' => 'Search Menu',
            'users' => User::query()->where('name', 'LIKE',"%{$search}%")->get()
        ]);
    }

}
