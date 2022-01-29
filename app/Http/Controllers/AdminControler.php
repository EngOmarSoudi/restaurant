<?php

namespace App\Http\Controllers;

use App\Mail\send;
use App\Models\Foodchef;
use App\Models\Order;
use App\Mail\TestMail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminControler extends Controller
{
    public function user(){
        $data=user::all();
        return view('admin.users',compact("data"));
    }
    public function usere(){
        $data=user::all();
        return view('home',compact("data"));
    }
    public function foodmenu(){

        $data=food::all();
        return view('admin.foodmenu',compact('data'));
    }
    public function deleteusers($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deletefood($id){
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deletechef($id){
        $data=Foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateview($id){

        $data=food::find($id);
       return view('admin.updateview',compact('data'));
    }
    public function updatechef($id,Request $request){
        $data=Foodchef::find($id);
//        $image= $request->image ;
//        if ($image){
//
//            $imagename= time().'.'.$image->getClientOriginalExtension();
//            $request->image->move('chefimage',$imagename);
//            $data->image= $imagename;
//        }
//
//        $data->name=$request->name;
//        $data->speciality=$request->speciality;
//        $data->facebook=$request->facebook;
//        $data->twitter=$request->twitter;
//        $data->social=$request->social;
//        $data->save();

//        return redirect()->back();

       return view('admin.updatechef',compact('data'));
    }
    public function updatefoodchef($id,Request $request){
        $data=Foodchef::find($id);
        $image= $request->image ;
        if ($image){

            $imagename= time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage',$imagename);
            $data->image= $imagename;
        }

        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->social=$request->social;
        $data->save();

        return redirect()->back();


    }
    public function viewreservation(){
        if (Auth::id()){
            $data=reservation::all();
            return view('admin.adminreservation',compact('data'));
        }else{
            return redirect('login');
        }

    }
    public function vieworder(){

        $data=order::all();
       return view('admin.adminorder',compact('data'));
    }
    public function searchorder(Request $request){
        $search=$request->search;
        $data=order::where('name','like','%'.$search.'%')->
        orwhere('foodname','like','%'.$search.'%')
            ->get();
       return view('admin.adminorder',compact('data'));
    }
    public function searchuser(Request $request){
        $search=$request->search;
        $data=user::where('name','like','%'.$search.'%')->get();
        return view('admin.users',compact("data"));
    }
    public function searchchef(Request $request){
        $search=$request->search;
        $data=foodchef::where('name','like','%'.$search.'%')->get();
       return view('admin.adminchef',compact('data'));
    }
    public function searchreservation(Request $request){
        $search=$request->search;
        $data=reservation::where('name','like','%'.$search.'%')->get();
       return view('admin.adminreservation',compact('data'));
    }public function searchhome(Request $request){
        $search=$request->search;
       return view('admin.adminhome',compact('data'));
    }
    public function searchfood(Request $request){
        $search=$request->search;
        $data=food::where('title','like','%'.$search.'%')->get();
       return view('admin.foodmenu',compact('data'));
    }
    public function viewchef(){

        $data=Foodchef::all();
       return view("admin.adminchef",compact("data"));
    }

    public function upload(Request $request){
        $data= new food;
        $validateData=$request->validate([
            'description'=>'required|min:40|max:50',
            'title'=>'required|min:3|max:15',
//            'password'=>'required|email:filter',
            'image'=>'image'
        ]);

        $image= $request->image ;
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image= $imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
    }
    public function uploadchef(Request $request){
        $data= new Foodchef;
//        $validateData=$request->validate([
//            'description'=>'required|min:40|max:50',
//            'title'=>'required|min:3|max:15',
////            'password'=>'required|email:filter',
//            'image'=>'image'
//        ]);

        $image= $request->image ;
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image= $imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->social=$request->social;
        $data->save();

        return redirect()->back();
    }
    public function update($id,Request $request){

        $data= new food ;
        $data=food::find($id);
        $validateData=$request->validate([
            'description'=>'required|min:40|max:50',
            'title'=>'required|min:3|max:15',
//            'password'=>'required|email:filter',
            'image'=>'image'
        ]);

        $image= $request->image ;
        $imagename= time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image= $imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
    }
    public function reservation(Request $request){

        $data= new reservation;

//        $validateData=$request->validate([
//            'description'=>'required|min:40|max:50',
//            'title'=>'required|min:3|max:15',
////            'password'=>'required|email:filter',
//            'image'=>'image'
//        ]);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();

        return redirect()->back();
    }
    public function Approved($id){
        $data= new reservation;
        $data=reservation::find($id);
        $d=[
            'title'=>'mail from our restaurant ',
            'body'=>'your reservation is Approved '
        ];
        mail::to($data->email)->send(new send($d));
        return "redirect()->back()";
    }

}
