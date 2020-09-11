<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\detalles1;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class detalles1Controller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $detalles1 = detalles1::all();

        // return $detalles1;
        return view('backEnd.detalles1.index', compact('detalles1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // return $detalles1;
        return view('backEnd.detalles1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        detalles1::create($request->all());

        Session::flash('message', 'detalles1 added!');
        Session::flash('status', 'success');

        return redirect('detalles1');
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
        $detalles1 = detalles1::findOrFail($id);

        // return $detalles1;
        return view('backEnd.detalles1.show', compact('detalles1'));
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
        $detalles1 = detalles1::findOrFail($id);

        // return $detalles1;
        return view('backEnd.detalles1.edit', compact('detalles1'));
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
        
        $detalles1 = detalles1::findOrFail($id);
        $detalles1->update($request->all());

        Session::flash('message', 'detalles1 updated!');
        Session::flash('status', 'success');

        // return $detalles1;
        return redirect('detalles1');
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
        $detalles1 = detalles1::findOrFail($id);

        $detalles1->delete();

        Session::flash('message', 'detalles1 deleted!');
        Session::flash('status', 'success');

        // return $detalles1;
        return redirect('detalles1');
    }

}
