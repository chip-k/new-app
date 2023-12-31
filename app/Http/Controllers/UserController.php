<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $my_posts = $user->posts;

        return view('user.show', compact('user', 'my_posts'));
    }
}
