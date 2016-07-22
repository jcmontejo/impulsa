<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StudentRequest;

use App\Student;

use Session;


class StudentController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $student = Student::where('user_id', $request->user()->id)->get();
        return view('student.index',[
            'student' => $student
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $request->user()->student()->create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'birthdate' => $request->birthdate, 
                'place' => $request->place,
                'sex' => $request->sex,
                'email' => $request->email,
                'civil_status' => $request->civil_status, 
                'phone' => $request->phone,
                'address' => $request->address,
                'post_code' => $request->post_code, 
                'country' => $request->country, 
                'state' => $request->state,  
                'city' => $request->city,
                'travel' => $request->travel, 
                'relocation' => $request->relocation, 
                'licence' => $request->licence, 
                'car' => $request->car,  
                'title' => $request->title,
                'description' => $request->description,
            ]);
        Session::flash('save', 'Datos guardados exitosamente');
        return redirect('/student');
        
        
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
    public function edit(Student $student)
    {
        return view('student.edit',[
            'student' => $student
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        $this->authorize('owner', $student);
        $student->update($request->all());
        Session::flash('save', 'Datos actualizados exitosamente');
        return redirect('/student');
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
