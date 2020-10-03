<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use App\Page;

class AdminController extends Controller
{

	public function admin_page()
	{	
		return view('admin/admin-panel');
	}

	public function authenticate(Request $request)
	{
		$name = Request::input('name');
		$password = Request::input('password');

		$credentials = Request::only('name', 'password');
		var_dump($credentials);


        if (Auth::login($credentials)) {
            // Аутентификация успешна...
            return redirect()->intended('category');
            echo "yes";
        }
        else{
        	echo "no";
        }

		
	}
    
}
