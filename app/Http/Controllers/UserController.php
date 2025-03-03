<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class userController extends Controller
{
    public function index()
    {
        return view('user', [
            'title' => 'User List',
            'allUser' => User::all()
        ]);
    }
}
