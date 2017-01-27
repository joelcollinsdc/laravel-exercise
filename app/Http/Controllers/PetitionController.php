<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Petition;
use App\Signature;

class PetitionController extends Controller
{
  
  public function show($id)
  {
    return view('petition.show', 
      ['petition' => Petition::where('published', 1)->findOrFail($id) ]);
  }

  public function sign(Request $request, Petition $petition)
  {
    $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            
        ]);

    $signature = new Signature;
    $signature->name = $request->name;
    $signature->email = $request->email;
    $signature->phone = $request->phone;
    $signature->petition_id = $petition->id;
    $signature->save();

    return view('petition.thankyou', ['petition' => $petition]);
  }

}
