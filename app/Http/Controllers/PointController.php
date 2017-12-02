<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;

class PointController extends Controller
{
    
     public function create()
    {
      
    }

    public function insert(Request $request)
    {
    
       $insert = new Point;
       $insert->id=$request['id'];
       $insert->user_id=$request['user_id'];
       $insert->contributed=$request['contributed'];
       $insert->save();

       return $request->all();


    }
    public function update()
    {

    }


}
