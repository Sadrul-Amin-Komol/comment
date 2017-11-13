<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\commentbx;
use Illuminate\Support\Facades\input;


class cmboxController extends Controller
{
    public function index()
    {
    return view("Commentbox");
    }
   
   

    public function store(Request $request)
    {
    $user=new commentbx;
    $user->name=input::get('name');
    $user->comments=input::get('comment');
    $user->save();
    echo "you have succsfully commented";
   return view("Commentbox");
    }
    
}
