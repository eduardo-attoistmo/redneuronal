<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\salida;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class salidaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $salida = salida::all();
        $salida = salida::select('w','p','como','mapa','reglas','prototipo','requerimiento','historia','mapeo')->get();

        return $salida;
        // return view('backEnd.salida.index', compact('salida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $salida;
        // return view('backEnd.salida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        salida::create($request->all());

        Session::flash('message', 'salida added!');
        Session::flash('status', 'success');

        return $salida;
        // return redirect('salida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $salida = salida::findOrFail($id);

        return $salida;
        // return view('backEnd.salida.show', compact('salida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $salida = salida::findOrFail($id);

        return $salida;
        // return view('backEnd.salida.edit', compact('salida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $salida = salida::findOrFail($id);
        $salida->update($request->all());

        Session::flash('message', 'salida updated!');
        Session::flash('status', 'success');

        return $salida;
        // return redirect('salida');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $salida = salida::findOrFail($id);

        $salida->delete();

        Session::flash('message', 'salida deleted!');
        Session::flash('status', 'success');

        return $salida;
        // return redirect('salida');
    }

}
