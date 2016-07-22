<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PublicationRequest;
use App\Publication;

class PublicationController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_company');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $publications = Publication::where('user_id',$request->user()->id)->get();
        return view('company.indexpublication', [
            'publications' => $publications
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.publication');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationRequest $request)
    {
        /*$request->user()->publication()->create([
            'job' => $request->job,
            'vacancies' => $request->vacancies,
            'studies' => $request->studies,
            'sex'=> $request->sex,
            'job_type'=> $request->job_type,
            'days'=> $request->days,
            'age'=> $request->age,
            'requirements'=> $request->requirements,
            'company'=> $request->company,
            'status_civil'=> $request->status_civil,
            'travel'=> $request->travel,
            'relocation'=> $request->relocation,
            'experience'=> $request->experience,
            'job_position'=> $request->job_position,
            'skills'=> $request->skills,
            'functions'=> $request->functions,
            'state'=> $request->state,
            'city'=> $request->city,
            'salary'=> $request->salary,
            'curricular'=> $request->curricular,
        ]);*/
        $request->user()->publication()->create($request->all());
        return redirect('/publication')->with('success','Encuesta creada exitosamente, gracias.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        return view('company.editpublication', [
            'publication' => $publication
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        $this->authorize('owner',$publication);
        $publication->update($request->all());
        return redirect('/publication')->with('success','Publicación actualizada correctamente, espere confirmación de Administrador.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
         $this->authorize('owner',$publication);
         $publication->delete();
          return redirect('/publication')->with('success','Publicación eliminada correctamente');
    }
}
