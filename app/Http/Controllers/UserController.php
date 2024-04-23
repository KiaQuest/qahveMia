<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser()
    {
        return view('addUser');
    }
    public function addUserAction(Request $request)
    {
//        dd($request->all());
        $checkUnic = User::where('tel', $request->tel)->first();
        if ($checkUnic){
            dd('ERROR , user TELEFON exist');
        }else{
            User::create($request->all());
        }

//        User::create($request->all() + ['kim' => auth()->user()->id , 'yapan' => auth()->user()->username]);
        return view('users');
    }
}
