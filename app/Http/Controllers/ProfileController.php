<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

use App\Http\Requests;

use App\Profile;
use Session;

use Auth;

use Illuminate\Support\Facades\Input;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$thumbnails = Thumbnail::all();
        return view('thumbnails', compact('thumbnails'));*/

        $profiles = Profile::where('user_id', $request->user()->id)->get();
        return view('profile.index',[
            'profiles' => $profiles
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
           $file = Input::file('image');
           //Creamos una instancia de la libreria instalada   
           $image = \Image::make(\Input::file('image'));
           //Ruta donde queremos guardar las imagenes
           $path = public_path().'/profiles/';

           // Guardar Original
           $image->save($path.$file->getClientOriginalName());
           // Cambiar de tamaño
           $image->resize(240,200);
           // Guardar
           $image->save($path.'thumb_'.$file->getClientOriginalName());
           
           //Guardamos nombre y nombreOriginal en la BD
           $thumbnail = new Profile();
           $thumbnail->user_id = Auth::user()->id;
           $thumbnail->name = Input::get('name');
           $thumbnail->image = $file->getClientOriginalName();
           $thumbnail->save();
           if (Auth::user()->role == 'admin') {
             return redirect('/admin');
           }
           if (Auth::user()->role == 'company') {
             # code...
           }
           return redirect('/home');
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
    public function edit(Profile $profile)
    {
        return view('profile.edit',[
            'profiles' => $profile
            ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Profile $profile)
    {
        /*
          $file = Input::file('image');
           //Creamos una instancia de la libreria instalada   
           $image = \Image::make(\Input::file('image'));
           //Ruta donde queremos guardar las imagenes
           $path = public_path().'/profiles/';

           // Guardar Original
           $image->save($path.$file->getClientOriginalName());
           // Cambiar de tamaño
           $image->resize(240,200);
           // Guardar
           $image->save($path.'thumb_'.$file->getClientOriginalName());
           
           //Guardamos nombre y nombreOriginal en la BD
           $thumbnail = new Profile();
           $thumbnail->user_id = Auth::user()->id;
           $thumbnail->name = Input::get('name');
           $thumbnail->image = $file->getClientOriginalName();
           $thumbnail->save();
        */
          $file = Input::file('image');
           //Creamos una instancia de la libreria instalada   
          $image = \Image::make(\Input::file('image'));
           //Ruta donde queremos guardar las imagenes
          $path = public_path().'/profiles/';

           // Guardar Original
          $image->save($path.$file->getClientOriginalName());
           // Cambiar de tamaño
          $image->resize(240,200);
           // Guardar
          $image->save($path.'thumb_'.$file->getClientOriginalName());
          //Guardamos nombre y nombreOriginal en la BD
          

        /*$profile->update([

             $profile->name = Input::get('name');
             $profile->image = $file->getClientOriginalName();
          ]);*/
        //Session::flash('save', 'Datos actualizados exitosamente');
        return redirect('/profile');
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
