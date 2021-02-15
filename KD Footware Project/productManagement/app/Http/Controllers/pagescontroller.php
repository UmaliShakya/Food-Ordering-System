<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function ProductManagement(){
        $data = array(
            'title' => 'Product Management',
            'ProductManagement' => ['Orders', 'RawMaterials', 'Machines', 'prModel'] 
        );
     return view('pManagement') -> with( $data);
    }

   

  
}
