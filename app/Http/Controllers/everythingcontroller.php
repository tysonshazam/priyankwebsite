<?php

namespace App\Http\Controllers;

use App\Models\Userdetail;
use Illuminate\Http\Request;

class everythingcontroller extends Controller
{
   public function showcontact()
   {
      return view('fortpage.contact');
   }
   public function showcontactsave(Request $request)
   {
      $data = [
         'name' =>$request->name,
         'email' => $request->email,
         'phone' => $request->phone,
      ];
      $createdetai = Userdetail::create($data);
      if ($createdetai) {
         return response()->json(['status' => true, 'msg' => 'registration complete']);
     } else {
         return response()->json(['status' => false, 'msg' => 'Some thing went wrong']);
     }
   }
   public function home(){
      return view('fortpage.home');
   }
   public function job(){
      return view('fortpage.job');
   }
   public function event(){
      return view('fortpage.events');
   }
   public function service(){
      return view('fortpage.services');
   }
}
