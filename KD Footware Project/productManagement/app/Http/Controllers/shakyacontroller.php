<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawMaterial;

class shakyacontroller extends Controller
{
   public function storeRawMaterials(Request $request){
      //dd($request->all());

      $raw_material = new RawMaterial;

      $this->validate($request, ['name'=>'required|max:100|min:0',]);
      $this->validate($request, ['code'=>'required|max:100|min:4',]);
      $this->validate($request, ['unit'=>'required|max:100|min:0',]);
      $this->validate($request, ['qty'=>'required|max:100|min:0',]);

      $raw_material->name=$request->name;
      $raw_material->code=$request->code;
      $raw_material->unit=$request->unit;
      $raw_material->qty=$request->qty;

      $raw_material->save();

      $data=RawMaterial::all();
    //dd($data);

    return view('raw_materials')->with('raw_materials', $data);

       
      //return redirect()->back();
    }
    public function editdata($id){
     
      $raw_material = RawMaterial::find($id);
  
      return view('editr', ['raw_material'=>$raw_material]);
      
       }
  
      
       public function update(Request $request,$id){
   
    
        $this->validate($request, ['name'=>'required|max:100|min:5',]);
        $this->validate($request, ['code'=>'required|max:100|min:4',]);
        $this->validate($request, ['unit'=>'required|max:100|min:0',]);
        $this->validate($request, ['qty'=>'required|max:100|min:0',]);
  
        $raw_material = RawMaterial::find($id);
        $raw_material->name=$request->name;
        $raw_material->code=$request->code;
        $raw_material->unit=$request->unit;
        $raw_material->qty=$request->qty;

        $raw_material->save();

       
        return redirect('raw_materials')->with('successMsg', 'Data Updated!');
  
        //return view('machine/edit',['machines'=>$data]);
      //
    }
       



}  