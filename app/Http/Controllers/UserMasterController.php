<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMasterController extends Controller
{
    public function index()
    {
        return view('user_master.view_user_master');
    }
}
