<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\view;
use Illuminate\Support\ServiceProvider;
class UserController extends Controller
{


    public function getDashboard()
    {
        return view ('dashboard');
    }


    public function postSignIn(){

           return view('dashboard');



    }


}


