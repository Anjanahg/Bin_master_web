<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\orderRequest;
Use App\user;
Use DB;
class OrderController extends Controller
{
    function save(User $user,$cat){
        $order=new orderRequest();
        $order->user($user);
        $order->category=$cat;
        $user->orderRequest()->save($order);
        echo $user." ".$cat;


    }
    function show(User $user){

        $order=$user->orderRequest()->get();
        echo $order."<br> ";
        echo $user;


    }




}
