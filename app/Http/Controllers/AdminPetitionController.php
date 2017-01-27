<?php

namespace App\Http\Controllers;

use App\Petition;
use Illuminate\Http\Request;

class AdminPetitionController extends Controller
{
    //TODO best way?
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     * TODO: pagination
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $petitions = Petition::all();
        
        return view('admin.petition.index',
            [ 'petitions' => $petitions ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.petition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'thankyou' => 'required',
            'emailsubject' => 'required',
            'emailbody' => 'required'
        ]);

        //TODO refactor this
        $petition = new Petition;
        $petition->title = $request->title;
        $petition->summary = $request->summary;
        $petition->body = $request->body;
        $petition->thankyou = $request->thankyou;
        $petition->emailsubject = $request->emailsubject;
        $petition->emailbody = $request->emailbody;

        $petition->save();
        return redirect()->route('petition.show', $petition->id)
                        ->with('success','Petition created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function show(Petition $petition)
    {
        return view('admin.petition.show', ['petition' => $petition]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function edit(Petition $petition)
    {
        return view('admin.petition.edit', [ 'petition' => $petition ]);
    }

    /**
     * Publish Petition
     *
     * @param  \App\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function publish(Petition $petition)
    {
        $petition->published = true;
        $petition->save();

        return redirect()->route('petition.show', $petition->id)
                        ->with('success','Petition published');
    }

    /**
     * Unpublish Petition
     *
     * @param  \App\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function unpublish(Petition $petition)
    {
        $petition->published = false;
        $petition->save();

        return redirect()->route('petition.show', $petition->id)
                        ->with('success','Petition unpublished');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petition $petition)
    {
        $this->validate($request, [
            'title' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'thankyou' => 'required',
            'emailsubject' => 'required',
            'emailbody' => 'required'
        ]);

        //TODO refactor this
        $petition->title = $request->title;
        $petition->summary = $request->summary;
        $petition->body = $request->body;
        $petition->thankyou = $request->thankyou;
        $petition->emailsubject = $request->emailsubject;
        $petition->emailbody = $request->emailbody;

        $petition->save();
        return redirect()
            ->route('petition.show', $petition->id)
            ->with('success','Petition created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petition $petition)
    {
        $petition->delete();
        return redirect()
            ->route('petition.index')
            ->with('success','Petition deleted successfully');
    }
}
