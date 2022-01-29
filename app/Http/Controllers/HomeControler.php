<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Foodchef;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
class HomeControler extends Controller
{

    public function index(){
        if (Auth::id()){
            return redirect('redi');
        }else
        $data=food::all();
        $data2=Foodchef::all();
//        $user_id=Auth::id();
//        $count=Cart::where('user_id',$user_id)->count();
        return view('home',compact("data","data2"
//            ,'count'
        ));
    }
    public function redi(){
        $data=food::all();
        $data2=Foodchef::all();
        $usertype=Auth::user()->usertype;
        if ($usertype=='1'){
            return view('/admin.adminhome');
        }else{
            $user_id=Auth::id();
            $count=Cart::where('user_id',$user_id)->count();
            return view('home',compact('data','data2','count'));
        }
    }

    public function showcart(Request $request,$id){
//        $user_id=Auth::id();
        $count=cart::where('user_id',$id)->count();
        if (Auth::id()==$id){
            $data=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
            $data2=cart::SELECT('*')->where('user_id','=',$id)->get();
            return view('showcart',compact('count','data','data2'));
        }else{
            return redirect()->back();
        }

    }
    public function addcart(Request $request,$id){


        if (Auth::id())
        {
            $user_id=Auth::id();
            $food_id=$id;
            $quantity_id=$request->quantity_id;
            $cart=new cart;
            $cart->user_id=$user_id;
            $cart->food_id=$food_id;
            $cart->quantity_id=$quantity_id;
            $cart->save();
            return redirect()->back();
        }
        else {
            return redirect('/login');
        }
        }
    public function deletecart($id){
        $data=cart::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function ordreconfirm(Request $request){
       foreach ($request->foodname as $key =>$foodname)
       {
           $data=new order;
           $data->foodname=$foodname;
           $data->price=$request->price[$key];
           $data->quantity=$request->quantity[$key];
           $data->name=$request->name;
           $data->address=$request->address;
           $data->phone=$request->phone;
           $data->save();

       }

        return redirect()->back();
    }



}
