<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function storeEmployee(Request $request){
        $employee= new employee;
        $employee->Emp_Name=$request->Emp_Name;
        $employee->Emp_Age=$request->Emp_Age;
        $employee->Emp_NIC=$request->Emp_NIC;
        $employee->Emp_AccNo=$request->Emp_AccNo;
        $employee->Emp_Address=$request->Emp_Address;
        $employee->Emp_MobileNo=$request->Emp_MobileNo;
        $employee->Emp_Category=$request->Emp_Category;
        $employee->save();

        $data=employee::all();
        return view('employeeM')->with('employees', $data);
    }

    public function viewemployee($id){
       
        $employee = employee::find($id);
      
        return view('employeeD', ['employee'=>$employee]);
        
    }

    public function editemployee($id){
       
        $employee = employee::find($id);
      
        

        return view('editE', ['employee'=>$employee]);
        
    }

    public function updateemployee(Request $request,$id){
   
    

        $employee = employee::find($id);
        $employee->Emp_Name=$request->Emp_Name;
        $employee->Emp_Age=$request->Emp_Age;
        $employee->Emp_NIC=$request->Emp_NIC;
        $employee->Emp_AccNo=$request->Emp_AccNo;
        $employee->Emp_Address=$request->Emp_Address;
        $employee->Emp_MobileNo=$request->Emp_MobileNo;
        $employee->Emp_Category=$request->Emp_Category;
    
        $employee->save();
        return redirect('employeeM')->with('successMsg', 'Data Updated!');
  
        
    }
}


