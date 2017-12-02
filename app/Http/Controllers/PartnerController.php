<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
class PartnerController extends Controller
{
   

       public function create()
    {
      
    }

    public function insert(Request $request)
    {
    
       $insert = new Partner;
       $insert->id=$request['id'];
       $insert->partners_name=$request['partners_name'];
       $insert->save();

       return $request->all();


    }
    public function update()
    {

    }
}
