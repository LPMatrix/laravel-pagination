<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //

    public function index()
    {
    	$users = User::paginate(8);

    	return view('admin.users.index', compact('users'));
    }

    function user(){

        return view('users')->with('item', 'Learn Laravel');
    }
    
}
