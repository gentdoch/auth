<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function user()
    {
        return view('content.user.list');
    }
}
