<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\entrada;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class entradaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $entrada = entrada::all();
        $entrada = entrada::select('audio','video','documento','lengFront','lengBack','empleado')->get();

        return response()->json($entrada);
        // return view('backEnd.entrada.index', compact('entrada'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $entrada;
        // return view('backEnd.entrada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        entrada::create($request->all());

        Session::flash('message', 'entrada added!');
        Session::flash('status', 'success');

        return $entrada;
        // return redirect('entrada');
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
        $entrada = entrada::findOrFail($id);

        return $entrada;
        // return view('backEnd.entrada.show', compact('entrada'));
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
        $entrada = entrada::findOrFail($id);

        return $entrada;
        // return view('backEnd.entrada.edit', compact('entrada'));
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
        
        $entrada = entrada::findOrFail($id);
        $entrada->update($request->all());

        Session::flash('message', 'entrada updated!');
        Session::flash('status', 'success');

        return $entrada;
        // return redirect('entrada');
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
        $entrada = entrada::findOrFail($id);

        $entrada->delete();

        Session::flash('message', 'entrada deleted!');
        Session::flash('status', 'success');

        return $entrada;
        // return redirect('entrada');
    }

}
