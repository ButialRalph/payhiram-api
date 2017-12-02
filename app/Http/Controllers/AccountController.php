<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
class AccountController extends Controller
{
      public function create()
    {
      
    }

    public function insert(Request $request)
    {
    
       $insert = new Account;
       $insert->id=$request['id'];
       $insert->account_id=$request['account_id'];
       $insert->save();

       return $request->all();

    }
    public function update()
    {
       //$account=Account::all();
        return $request->all();   
    }
}
