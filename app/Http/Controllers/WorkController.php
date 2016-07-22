<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;

use App\Http\Requests;

use App\Work;
use Session;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $works = Work::where('user_id', $request->user()->id)->get();
        return view('work.index',[
            'works' => $works
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
        $request->user()->work()->create([
                'company' => $request->company,
                'address' => $request->address,
                'phone' => $request->phone,
                'city' => $request->city,
                'turn' => $request->turn,
                'position' => $request->position,
                'name_boss' => $request->name_boss, 
                'area' => $request->area, 
                'period' => $request->period,
                'description' => $request->description,
                
            ]);
        Session::flash('save', 'Datos guardados exitosamente');
        return redirect('/work');
        
        
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
    public function edit(Work $work)
    {
        return view('work.edit',[
            'work' => $work
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkRequest $request, Work $work)
    {
        $work->update($request->all());
        Session::flash('save', 'Datos actualizados exitosamente');
        return redirect('/work');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        $work->delete();
        Session::flash('save', 'Datos eliminados exitosamente');
        return redirect('/work');
    }
}
