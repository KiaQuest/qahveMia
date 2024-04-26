<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login()
    {
        return view('loginH');
    }
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
        return redirect()->route('users');
//        return view('users');
    }
    public function users(Request $request) //users in admin see page 1
    {
//        dd($request->all());
//        $tel =$request->search;
//        dd(User::where('tel', 'like', "%'2'%"));
//        Auth::login('parsa');
//        $credentials = $request->validate([
//            'name' => ['required', 'email'],
//            'password' => ['required'],
//        ]);

//        $credentials = $request->only('admin', 'admin');
//
//        if (Auth::onceBasic('name')) {
//            // Authentication passed...
//            die('d');
//            return redirect()->intended('dashboard');
//        }
//        die('s');
//        Auth::attempt(['name' => 'kia' , 'password' => '123']);
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            dd('olde');
            $request->session()->regenerate();

            return redirect()->intended('dashboard');

        }
        dd('olmade');

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
