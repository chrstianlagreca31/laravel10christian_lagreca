<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function posts(User $user)
    {
      
        $posts = $user->posts()->latest()->get();

        return view('users.posts', compact('user', 'posts'));
    }
}
