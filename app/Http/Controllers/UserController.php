<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\view;
use Illuminate\Support\ServiceProvider;
class UserController extends Controller
{

    function Register(Request $request){
          $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'error'=>TRUE,
                'errors'=>$validator->errors()
            ], 401);
        }
        else {

            //if any user does not existed with email then create new user
            //admin creates normal users
            //or he invites to users via email
            echo $request;
            $user = User::create([

                'fullname' => $request['fullname'],
                'email' => $request['email'],
                'address' => $request['address'],
                'mobileno' => $request['mobileno'],
                'password' => bcrypt($request['password']),
                'Lplace' => $request['Lplace'],

            ]);


            /*if user is created then $user can not be NULL
            *
            *
            */

            if ($user) {
                return response()->json([
                    'error' => FALSE,
                    'user' => $user
                ]);
            } else {
                return response()->json([
                    'error' => TRUE,
                    'message' => "Unknown error occured"
                ]);
            }
            //}
        }
    }




    public function getDashboard()
    {
        return view ('dashboard');
    }


    public function postSignIn(){

           return view('dashboard');



    }


}


