<?php

namespace App\Http\Controllers;

use App\Models\SellModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//use MongoDB\Driver\Session;

class SellsController extends Controller
{
    public function index() //visitorSells
    {
//        $categories = Category::all();
//        return view('categories.index', compact('categories'));
        return view('visitorSells');
    }
    public function users() //users in admin see page 1
    {
        $users = User::all();
//        session()->flush();
//        return view('categories.index', compact('categories'));

//        dd(Session::get('userID'));

        return view('users', compact('users'));
    }

    public function create(Request $request) //create page for sells
    {
//        dd($request->all());
//        Session::put('userID', $request->id);

//        session(['userID' => $request->id]);
//        if (Session::get('userID') == null){
        if ($request->id != null){
            session(['userID' => $request->id]);
        }

        $id = Session::get('userID');
        $sells = SellModel::where('userID' , $id)->orderBy('created_at', 'desc')->paginate(2);
        return view('addSells', compact('sells'));
    }
    public function addSellAction(Request $request) //create sells
    {
//        dd($request->all());
        SellModel::create($request->all());
//        $sells = SellModel::where('userID' , $request->id)->get();
//        return view('addSells', compact('sells'));
        return redirect()->back();
    }

    public function search() //visitor search
    {
        return view('visitorSearch');
    }
    public function main() //visitor search
    {
        return view('main');
    }

//    public function store(Request $request)
//    {
//        $category = new Category();
//        $category->name = $request->input('name');
//        $category->save();
//
//        return redirect()->route('categories.index');
//    }

//    public function show($id)
//    {
////        $category = Category::find($id);
////        return view('categories.show', compact('category'));
//
//    }

//    public function edit($id)
//    {
//        $category = Category::find($id);
//        return view('categories.edit', compact('category'));
//    }

//    public function update(Request $request, $id)
//    {
//        $category = Category::find($id);
//        $category->name = $request->input('name');
//        $category->save();
//
//        return redirect()->route('categories.index');
//    }

//    public function destroy($id)
//    {
//        $category = Category::find($id);
//        $category->delete();
//
//        return redirect()->route('categories.index');
//    }
}
