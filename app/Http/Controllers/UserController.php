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
    public function users(Request $request) //users in admin see page 1
    {
//        dd($request->search);
//        $tel =$request->search;
//        dd(User::where('tel', 'like', "%'2'%"));


        if ($request->search){
//            dd('search var');

            $users = User::where('tel','like',"%$request->search%")->take(10)->paginate(10);
            return view('users', compact('users'));
        }
//        dd('yoxde');
        $users = User::paginate(2);
//        session()->flush();
//        return view('categories.index', compact('categories'));

//        dd(Session::get('userID'));

        return view('users', compact('users'));
    }

}
