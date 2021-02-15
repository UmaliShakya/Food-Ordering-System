<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class studentcontroller extends Controller
{
    public function storeStudent(Request $request){
        $student= new student;
        $student->Stu_Name=$request->Stu_Name;
        $student->stu_Age=$request->stu_Age;
        $student->University=$request->University;
        $student->Faculty=$request->Faculty;
        $student->Stu_Address=$request->Stu_Address;
        $student->Stu_MobileNo=$request->Stu_MobileNo;
        $student->Stu_Emali=$request->Stu_Emali;
        $student->GardianName=$request->GardianName;
        $student->Gardi_contactNo=$request->Gardi_contactNo;
        $student->save();

        $data=student::all();
        return view('studentM')->with('students', $data);
    }

    public function viewstudent($id){
       
        $student = student::find($id);
      
        return view('studentD', ['student'=>$student]);
        
    }

    public function editstudent($id){
       
        $student = student::find($id);
      
        

        return view('editS', ['student'=>$student]);
        
    }

    public function updatestudent(Request $request,$id){
   
    

        $student = student::find($id);
        $student->Stu_Name=$request->Stu_Name;
        $student->stu_Age=$request->stu_Age;
        $student->University=$request->University;
        $student->Faculty=$request->Faculty;
        $student->Stu_Address=$request->Stu_Address;
        $student->Stu_MobileNo=$request->Stu_MobileNo;
        $student->Stu_Emali=$request->Stu_Emali;
        $student->GardianName=$request->GardianName;
        $student->Gardi_contactNo=$request->Gardi_contactNo;
       
  
        $student->save();
  

       
        return redirect('studentM')->with('successMsg', 'Data Updated!');
  
        
    }
}
