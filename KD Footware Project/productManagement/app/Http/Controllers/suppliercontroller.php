<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplierOrder;

class suppliercontroller extends Controller
{
    public function addOrder(Request $request){
        //dd($request->all());
  
        $sOrder = new supplierOrder;
  
        $this->validate($request, ['OrderId'=>'required|max:100|min:0',]);
        $this->validate($request, ['SupplierId'=>'required|max:100|min:4',]);
        $this->validate($request, ['MaterialId'=>'required|max:100|min:0',]);
        $this->validate($request, ['MaterialName'=>'required|max:100|min:0',]);
        $this->validate($request, ['Required_Quantity'=>'required|max:100|min:0',]);

        $sOrder->OrderId=$request->OrderId;
        $sOrder->SupplierId=$request->SupplierId;
        $sOrder->MaterialId=$request->MaterialId;
        $sOrder->MaterialNamety=$request->MaterialName;
        $sOrder->Required_Quantity=$request->Required_Quantity;
        
        $sOrder->save();
  
        
      //dd($data);
  
      return redirect('process')->with('successMsg', 'Order Successful!');
    }
}
