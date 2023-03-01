<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        return view('users.edit_user', compact('user'));
//        return view('users.edit_user', ['user'=>$user]);
    }
}
