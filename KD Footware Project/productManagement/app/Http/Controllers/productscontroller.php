<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productModel;

class productscontroller extends Controller
{
    public function store(Request $request){
        //dd($request->all());
  
        $ProductModel = new productModel;
  
        $this->validate($request, ['Material1'=>'required',]);
        $this->validate($request, ['Mate1Qty'=>'required']);
        $this->validate($request, ['Material2'=>'required']);
        $this->validate($request, ['Mate2Qty'=>'required']);
        $this->validate($request, ['Material3'=>'required']);
        $this->validate($request, ['Mate3Qty'=>'required']);
        $this->validate($request, ['Material4'=>'required']);
        $this->validate($request, ['Mate4Qty'=>'required']);
        $this->validate($request, ['Machine1'=>'required']);
        $this->validate($request, ['Machi1Time'=>'required']);
        $this->validate($request, ['Machine2'=>'required']);
        $this->validate($request, ['Machi2Time'=>'required']);
        $this->validate($request, ['Machine3'=>'required']);
        $this->validate($request, ['Machi3Time'=>'required']);
        $this->validate($request, ['Machine4'=>'required']);
        $this->validate($request, ['Machi4Time'=>'required']);
        //$Model->name=$request->name;
        $ProductModel->Material1=$request->Material1;
        $ProductModel->Mate1Qty=$request->Mate1Qty;
        $ProductModel->Material2=$request->Material2;
        $ProductModel->Mate2Qty=$request->Mate2Qty;
        $ProductModel->Material3=$request->Material3;
        $ProductModel->Mate3Qty=$request->Mate3Qty;
        $ProductModel->Material4=$request->Material4;
        $ProductModel->Mate4Qty=$request->Mate4Qty;
        $ProductModel->Machine1=$request->Machine1;
        $ProductModel->Machi1Time=$request->Machi1Time;
        $ProductModel->Machine2=$request->Machine2;
        $ProductModel->Machi2Time=$request->Machi2Time;
        $ProductModel->Machine3=$request->Machine3;
        $ProductModel->Machi3Time=$request->Machi3Time;
        $ProductModel->Machine4=$request->Machine4;
        $ProductModel->Machi4Time=$request->Machi4Time;
        
       
        $ProductModel->save();
  
        $data=productModel::all();
      //dd($data);
  
      return view('prmodels')->with('prmodels', $data);
    }

    public function editdata($id){
     
        $ProductModel = productModel::find($id);
    
        return view('editpr', ['ProductModel'=>$ProductModel]);
        
         }


         public function update(Request $request,$id){
   
    
        $this->validate($request, ['Material1'=>'required',]);
        $this->validate($request, ['Mate1Qty'=>'required']);
        $this->validate($request, ['Material2'=>'required']);
        $this->validate($request, ['Mate2Qty'=>'required']);
        $this->validate($request, ['Material3'=>'required']);
        $this->validate($request, ['Mate3Qty'=>'required']);
        $this->validate($request, ['Material4'=>'required']);
        $this->validate($request, ['Mate4Qty'=>'required']);
        $this->validate($request, ['Machine1'=>'required']);
        $this->validate($request, ['Machi1Time'=>'required']);
        $this->validate($request, ['Machine2'=>'required']);
        $this->validate($request, ['Machi2Time'=>'required']);
        $this->validate($request, ['Machine3'=>'required']);
        $this->validate($request, ['Machi3Time'=>'required']);
        $this->validate($request, ['Machine4'=>'required']);
        $this->validate($request, ['Machi4Time'=>'required']);
      
            $ProductModel = productModel::find($id);
            $ProductModel->Material1=$request->Material1;
            $ProductModel->Mate1Qty=$request->Mate1Qty;
            $ProductModel->Material2=$request->Material2;
            $ProductModel->Mate2Qty=$request->Mate2Qty;
            $ProductModel->Material3=$request->Material3;
            $ProductModel->Mate3Qty=$request->Mate3Qty;
            $ProductModel->Material4=$request->Material4;
            $ProductModel->Mate4Qty=$request->Mate4Qty;
            $ProductModel->Machine1=$request->Machine1;
            $ProductModel->Machi1Time=$request->Machi1Time;
            $ProductModel->Machine2=$request->Machine2;
            $ProductModel->Machi2Time=$request->Machi2Time;
            $ProductModel->Machine3=$request->Machine3;
            $ProductModel->Machi3Time=$request->Machi3Time;
            $ProductModel->Machine4=$request->Machine4;
            $ProductModel->Machi4Time=$request->Machi4Time;
            $ProductModel->save();
            return redirect('prmodels')->with('successMsg', 'Data Updated!');
      
            //return view('machine/edit',['machines'=>$data]);
          //}
           }
}
