<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\detalleimpli;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class detalleimpliController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $detalleimpli = detalleimpli::all();

        // return $detalleimpli;
        return view('backEnd.detalleimpli.index', compact('detalleimpli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // return $detalleimpli;
        return view('backEnd.detalleimpli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        detalleimpli::create($request->all());

        Session::flash('message', 'detalleimpli added!');
        Session::flash('status', 'success');

        return redirect('detalleimpli');
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
        $detalleimpli = detalleimpli::findOrFail($id);

        // return $detalleimpli;
        return view('backEnd.detalleimpli.show', compact('detalleimpli'));
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
        $detalleimpli = detalleimpli::findOrFail($id);

        // return $detalleimpli;
        return view('backEnd.detalleimpli.edit', compact('detalleimpli'));
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
        
        $detalleimpli = detalleimpli::findOrFail($id);
        $detalleimpli->update($request->all());

        Session::flash('message', 'detalleimpli updated!');
        Session::flash('status', 'success');

        // return $detalleimpli;
        return redirect('detalleimpli');
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
        $detalleimpli = detalleimpli::findOrFail($id);

        $detalleimpli->delete();

        Session::flash('message', 'detalleimpli deleted!');
        Session::flash('status', 'success');

        // return $detalleimpli;
        return redirect('detalleimpli');
    }

}
