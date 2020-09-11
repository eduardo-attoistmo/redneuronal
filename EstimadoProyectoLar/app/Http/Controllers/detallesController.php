<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\detalle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class detallesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $detalles = detalle::all();

        // return $detalles;
        return view('backEnd.detalles.index', compact('detalles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // return $detalles;
        return view('backEnd.detalles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        detalle::create($request->all());

        Session::flash('message', 'detalle added!');
        Session::flash('status', 'success');

        return redirect('detalles');
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
        $detalle = detalle::findOrFail($id);

        // return $detalles;
        return view('backEnd.detalles.show', compact('detalle'));
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
        $detalle = detalle::findOrFail($id);

        // return $detalle;
        return view('backEnd.detalles.edit', compact('detalle'));
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
        
        $detalle = detalle::findOrFail($id);
        $detalle->update($request->all());

        Session::flash('message', 'detalle updated!');
        Session::flash('status', 'success');

        // return $detalle;
        return redirect('detalles');
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
        $detalle = detalle::findOrFail($id);

        $detalle->delete();

        Session::flash('message', 'detalle deleted!');
        Session::flash('status', 'success');

        // return $detalle;
        return redirect('detalles');
    }

}
