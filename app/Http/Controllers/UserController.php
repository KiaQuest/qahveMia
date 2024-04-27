<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function check(Request $request)
    {
//        $credentials = $request->validate([
//            'name' => ['required'],
//            'password' => ['required'],
//        ]);

        Validator::make($request->all(), [
            'name' => ['required'],
            'password' => ['required'],
        ])->validate();


        if (Auth::attempt(['name' => $request->name, 'password' => $request->password, 'rol' => 'admin'])) {
//            dd('olde');
            $request->session()->regenerate();

            return redirect()->route('users');
//            return redirect()->intended('dashboard');

        }
//        return redirect()->back()->with('fail', 'User or Pass is Incorrect');
        return back()->withErrors(['fail' => ['Username or Password is Incorrect']]);
//        dd('olmade');
    }

    public function checkUser(Request $request)
    {
        Validator::make($request->all(), [
            'tel' => ['required'],
            'password' => ['required'],
        ])->validate();

        if (Auth::attempt(['tel' => $request->tel, 'password' => $request->password])) {
//            dd('olde');
//            $request->session()->regenerate();

            return redirect()->route('visitSells');
//            return redirect()->intended('dashboard');

        }
        return back()->withErrors(['fail' => ['Username or Password is Incorrect']]);

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


        if ($request->search){
//            dd('search var');

            $users = User::where('tel','like',"%$request->search%")->take(10)->paginate(10);
            return view('users', compact('users'));
        }

//        dd('yoxde');
        $users = User::orderBy('created_at', 'DESC')->paginate(20);
//        session()->flush();
//        return view('categories.index', compact('categories'));

//        dd(Session::get('userID'));

        return view('users', compact('users'));
    }

}
