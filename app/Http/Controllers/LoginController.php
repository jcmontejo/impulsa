<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests;

use Auth;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) 
        {
           if (Auth::user()->status == 'active') 
           {
               
           if (Auth::user()->role == 'internal') 
           {
               return redirect('/home');
           }
           else if (Auth::user()->role == 'external')
           {
                return redirect('/home');
           }
           else if (Auth::user()->role == 'company')
           {
                return redirect('/homecompany');
           }
           else if (Auth::user()->role == 'admin') {
               return redirect('/admin');
           }

           }
           else
           {
            Auth::logout();
            Session::flash('save', 'Su cuenta esta en proceso de activación, en breve nos comunicamos con usted.');
            return redirect('access/create');
           }
           
        }
        Session::flash('save', 'Usuario o contraseñas son incorrectos.');
        return redirect('/access/create');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
