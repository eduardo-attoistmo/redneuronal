<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\configuraEntrada;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class configuraEntradaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $configuraentrada = configuraEntrada::all();
        $configuraentrada = configuraEntrada::select('audio','video','documento','lengFront','lengBack','empleado')->get();

        return $configuraentrada;
        // return view('backEnd.configuraentrada.index', compact('configuraentrada'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $configuraentrada;
        // return view('backEnd.configuraentrada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        configuraEntrada::create($request->all());

        Session::flash('message', 'configuraEntrada added!');
        Session::flash('status', 'success');

        return $configuraentrada;
        // return redirect('configuraentrada');
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
        $configuraentrada = configuraEntrada::findOrFail($id);

        return $configuraentrada;
        // return view('backEnd.configuraentrada.show', compact('configuraentrada'));
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
        $configuraentrada = configuraEntrada::findOrFail($id);

        return $configuraentrada;
        // return view('backEnd.configuraentrada.edit', compact('configuraentrada'));
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
        
        $configuraentrada = configuraEntrada::findOrFail($id);
        $configuraentrada->update($request->all());

        Session::flash('message', 'configuraEntrada updated!');
        Session::flash('status', 'success');

        return $configuraentrada;
        // return redirect('configuraentrada');
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
        $configuraentrada = configuraEntrada::findOrFail($id);

        $configuraentrada->delete();

        Session::flash('message', 'configuraEntrada deleted!');
        Session::flash('status', 'success');

        return $configuraentrada;
        // return redirect('configuraentrada');
    }

}
