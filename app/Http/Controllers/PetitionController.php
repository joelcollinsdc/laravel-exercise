<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;

use App\Mail\PetitionSigned;
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

    //TODO move to a queue
    Mail::to($request->email)->send(new PetitionSigned($petition));

    return view('petition.thankyou', ['petition' => $petition]);
  }

}
