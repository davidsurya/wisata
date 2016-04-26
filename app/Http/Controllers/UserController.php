<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',['except' => 'store']);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function store(UserRequest $request)
    {
    	$user = new User;
    	$user->create([
    		'username' => $request['username'],
    		'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
    	]);
    	return redirect('/');
    }
}
