<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class roomcontroller extends Controller
{
    
    public function storeRoom(Request $request){
        $room= new Room;
        $room->R_No=$request->R_No;
        $room->R_Category=$request->R_Category;
        $room->R_Rental=$request->R_Rental;
        $room->save();

        $data=Room::all();
        return view('roomM')->with('rooms', $data);
    }

    public function editroom($id){
       
        $room = Room::find($id);
      
        

        return view('editR', ['room'=>$room]);
        
    }

    public function updateroom(Request $request,$id){
   
    

        $room = Room::find($id);
        $room->R_NO=$request->R_No;
        $room->R_Category=$request->R_Category;
        $room->R_Rental=$request->R_Rental;
        $room->save();
        
        return redirect('roomM')->with('successMsg', 'Data Updated!');
  
        
    }
}
