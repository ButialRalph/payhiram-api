<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
class StoreController extends Controller
{
    public function create()
    {
      
    }

    public function insert(Request $request)
    {
    
       $insert = new Store;
       $insert->id=$request['id'];
       $insert->store_name=$request['store_name'];
       $insert->longtitude=$request['longtitude'];
       $insert->latitude=$request['latitude'];
       $insert->save();

       return $request->all();


    }
    public function update()
    {

    }
}
