<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Petition;

class PetitionController extends Controller
{
  
  public function show($id)
  {
    return view('petition.show', 
      ['petition' => Petition::where('published', 1)->findOrFail($id) ]);
  }
}
