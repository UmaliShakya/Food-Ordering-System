<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class ordercontroller extends Controller
{
    public function store(Request $request){
        //dd($request->all());
  
        $Orders = new Orders;
  
      
        //$Model->name=$request->name;
        $Orders->ODate=$request->ODate;
        $Orders->CustomerId=$request->CustomerId;
        $Orders->Qty=$request->Qty;
        $Orders->ModelID=$request->ModelID;
        $Orders->Amount=$request->Amount;
        $Orders->Total=$request->Total;
        $Orders->Status=$request->Status;
        $Orders->Action=$request->Action;
      
        
       
        $Orders->save();
       
        $data=Orders::all();
      //dd($data);
  
      return view('orders')->with('orders', $data);
    }

    
    public function updateAsCompleted($id){

        $Orders = Orders::find($id);
        $Orders->Status=1; 
        $Orders->save();
        return redirect()->back();
        
    }

    public function updateAsNotCompleted($id){

        $Orders = Orders::find($id);
        $Orders->Status=0; 
        $Orders->save();
        return redirect()->back();
        
    }

 
}
