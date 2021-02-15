<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\machine;

class umalicontroller extends Controller
{
   public function store(Request $request){
      //dd($request->all());
      $machine = new machine;
      $this->validate($request, ['name'=>'required|max:100|min:5',]);
      $this->validate($request, ['status'=>'required|max:100|min:4',]);
      $machine->name=$request->name;
      $machine->status=$request->status;
      $machine->save();
      $data=machine::all();
    //dd($data);
    return view('machines')->with('machines', $data);       
     // return redirect()->back();       
     //return redirect()->back();
   }
   public function editdata($id){ 

    $machine = machine::find($id);

    return view('editm', ['machine'=>$machine]);    
     }


     public function update(Request $request,$id){
   
    
      $this->validate($request, ['name'=>'required|max:100|min:5',]);
      $this->validate($request, ['status'=>'required|max:100|min:0',]);
     
      $machine = machine::find($id);
      $machine->name=$request->name;
      $machine->status=$request->status;
     

      $machine->save();

     
      return redirect('machines')->with('successMsg', 'Data Updated!');

      //return view('machine/edit',['machines'=>$data]);
    //
  }

}   