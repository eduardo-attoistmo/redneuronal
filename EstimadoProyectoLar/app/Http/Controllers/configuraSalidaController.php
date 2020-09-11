<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\configuraSalida;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class configuraSalidaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $configurasalida = configuraSalida::all();
        $configurasalida = configuraSalida::select('w','p','como','mapa','reglas','prototipo','requerimiento','historia','mapeo')->get();

        return $configurasalida;
        // return view('backEnd.configurasalida.index', compact('configurasalida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $configurasalida;
        // return view('backEnd.configurasalida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        configuraSalida::create($request->all());

        Session::flash('message', 'configuraSalida added!');
        Session::flash('status', 'success');

        return $configurasalida;
        // return redirect('configurasalida');
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
        $configurasalida = configuraSalida::findOrFail($id);

        return $configurasalida;
        // return view('backEnd.configurasalida.show', compact('configurasalida'));
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
        $configurasalida = configuraSalida::findOrFail($id);

        return $configurasalida;
        // return view('backEnd.configurasalida.edit', compact('configurasalida'));
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
        
        $configurasalida = configuraSalida::findOrFail($id);
        $configurasalida->update($request->all());

        Session::flash('message', 'configuraSalida updated!');
        Session::flash('status', 'success');

        return $configurasalida;
        // return redirect('configurasalida');
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
        $configurasalida = configuraSalida::findOrFail($id);

        $configurasalida->delete();

        Session::flash('message', 'configuraSalida deleted!');
        Session::flash('status', 'success');

        return $configurasalida;
        // return redirect('configurasalida');
    }

}
