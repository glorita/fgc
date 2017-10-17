<?php

namespace App\Http\Controllers;

use App\Cursos;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('curso/new');
            // get all the nerds
        $cursos = Curso::all();

        // load the view and pass the nerds
        return View::make('cursos.index')
            ->with('cursos', $cursos);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('curso/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $rules = array(
            'pais'       => 'required',
            'fechai'      => 'required|date',
            'fechaf' => 'required|date'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('curso/new')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = new Curso;
            $nerd->pais       = Input::get('pais');
            $nerd->fechai      = Input::get('fechai');
            $nerd->fechaf = Input::get('fechaf');
            $nerd->save();

            // redirect
            Session::flash('message', 'Curso registrado Satisfactoriamente!');
            return Redirect::to('cursos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show(cursos $cursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function edit(cursos $cursos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cursos $cursos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(cursos $cursos)
    {
        //
    }
}
