<?php

namespace App\Http\Controllers;

use App\Models\fonctionaire;
use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function create_user(){
        return view('proto.create_user');
    }

    public function store_userx(Request $request){
        if(empty($request->namex) || empty($request->emailx )|| empty($request->password1) || empty($request->password2) || empty($request->cpfx)){
            return response()->json(['status'=>400,'message'=>'Make sure to fill in all the input fields!!']);
        }elseif($request->password1 != $request->password2){
            return response()->json(['status'=>300,'message'=>'Incompatible password!!']);
         }else{
            $add_user = new User();
            $add_user->name = $request->namex; 
            $add_user->email = $request->emailx; 
            $add_user->password = $request->password1; 
            $add_user->cpf = $request->cpfx; 
            $add_user->cpf = $request->cpfx; 
            $add_user->id_fonctionaire = $request->fonctionaire; 
              if($request->hasFile('profile')){
                 $file = $request->file('profile');
                    $name = time().'.'.$file->getClientOriginalExtension();
                      $file->move('User',$name);
                          $add_user->profile = $name;
                   }
            $add_user->save();
               if(User::where(['email'=>$request->emailx,'password'=>$request->password1])->count()>0){
                  $info_user = User::where(['email'=>$request->emailx,'password'=>$request->password1])->get();
                   session(['info_user'=>$info_user]);
               }
               return response()->json(['status'=>200,'message'=>'success']);
               

        }
    }


     public function create_for_login(){
        return view('proto.create_login');
     }


     public function store_login(Request $request){
        if(User::where(['email'=>$request->emailx,'password'=>$request->password1])->count()>0){
            $info_user = User::where(['email'=>$request->emailx,'password'=>$request->password1])->get();
             session(['info_user'=>$info_user]);
             return response()->json(['status'=>200,'message'=>'success']);
   
         }
         return response()->json(['status'=>300,'message'=>'Incorrect Password or Email!!']);
         
     }

     public function deconnect(){
        session()->forget('info_user');
        return response()->json();
     }

    
}
