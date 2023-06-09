<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function follower(){
        return $this->belongsToMany(User::class,'follows','followed_id','follower_id');
    }

    public function followed(){
        return $this->belongsToMany(User::class,'follows','follower_id','followed_id');
    }

    public function likes(){
        return $this->belongsToMany(Post::class, 'likes');
    }

    public function sent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function received()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
}
