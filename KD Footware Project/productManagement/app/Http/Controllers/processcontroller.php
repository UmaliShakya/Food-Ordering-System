<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawMaterial;
use App\machine;
use App\productModel;
use App\Orders;
use DB;
class processcontroller extends Controller
{
    public function processdata($id){
       
        $productModel = productModel::find($id);

    
        return view('process',compact('productModel'));
        
    }

 
}
