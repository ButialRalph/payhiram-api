<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;
class WalletController extends Controller
{
    
   public function create()
    {
      
    }

    public function insert(Request $request)
    {
    
       $insert = new Wallet;
       $insert->id=$request['id'];
       $insert->name=$request['name'];
       $insert->user_id=$request['user_id'];
       $insert->account=$request['account'];
       $insert->amount=$request['amount'];
       $insert->save();

       return $request->all();


    }
    public function update()
    {

    }

    
}
