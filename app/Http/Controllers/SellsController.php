<?php

namespace App\Http\Controllers;

use App\Models\SellModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//use MongoDB\Driver\Session;

class SellsController extends Controller
{
//    public function index() //visitorSells
//    {
////        $categories = Category::all();
////        return view('categories.index', compact('categories'));
//        return view('visitorSells');
//    }


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

        $q1 = SellModel::where('userID' , $id)->orderBy('created_at', 'desc')->paginate(10);
        $q2 = SellModel::where('userID' , $id)->get();
        $sell10 =$q1->sum('fee');
        $all = $q2->sum('fee');
        $allBargain = $q2->sum('bargain');

        return view('addSells', compact('q1', 'sell10' , 'all','allBargain'));
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
        return view('userLogin');
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
