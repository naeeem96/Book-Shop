<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function cusview(){
       if(!Auth::check()) return redirect()->route('home');
       $customers = customer::all();
       return view('cusView')->with('customers', $customers);
    }
    public function cuscreate(){
       if(!Auth::check()) return redirect()->route('home');
       return view('cusCreate');
    }
    public function cusstore(Request $request){
       if(!Auth::check()) return redirect()->route('home');
       $cus = new customer;
       $cus->name = $request->name;
       $cus->phone = $request->phone;
       $cus->address = $request->address;
       $cus->bookName = $request->bookName;
       $cus->save();
       return redirect()->route('cusview');
    }
    public function cusedit($id){
       if(!Auth::check()) return redirect()->route('home');
       $cus = customer::find($id);
       return view('cusEdit')->with('cus', $cus);
    }
    public function cusupdate(Request $request, $id){
       if(!Auth::check()) return redirect()->route('home');
       $cus = customer::find($id);
       $cus->name = $request->name;
       $cus->phone = $request->phone;
       $cus->address = $request->address;
       $cus->bookName = $request->bookName;
       $cus->save();
       return redirect()->route('cusview');
    }
    public function cusdelete($id){
       if(!Auth::check()) return redirect()->route('home');
       $cus = customer::find($id);
       $cus->delete();
       return redirect()->route('cusview');
    }
}
