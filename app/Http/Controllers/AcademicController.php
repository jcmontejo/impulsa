<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AcademicRequest;

use App\Academic;
use Session;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $academic = Academic::where('user_id', $request->user()->id)->get();
        return view('academic.index',[
            'academic' => $academic
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academic.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademicRequest $request)
    {
        $request->user()->academic()->create([
                'name_posgrado' => $request->name_posgrado, 
                'school_posgrado' => $request->school_posgrado,
                'period_posgrado' => $request->period_posgrado,
                'name_university' => $request->name_university,
                'school_university' => $request->school_university, 
                'period_university' => $request->period_university, 
                'name_preparotory' => $request->name_preparatory, 
                'school_preparatory' => $request->school_preparatory, 
                'period_preparatory' => $request->period_preparatory,
                 
            ]);
        Session::flash('save', 'Datos guardados exitosamente');
        return redirect('/academic');        
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
    public function edit(Academic $academic)
    {
        return view('academic.edit',[
            'academic' => $academic
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcademicRequest $request, Academic $academic)
    {
        /*$this->authorize('ownerAcademic', $academic);*/
        $academic->update($request->all());
        Session::flash('save', 'Datos actualizados exitosamente');
        return redirect('/academic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
