<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Rezervare;
use App\Http\Resources\Rezervare as RezervareResource;

class RezervareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get rezervari (maxim x - paginate(x) un rand mai jos)
        $rezervari = Rezervare::paginate(10);

        // Return collection of rezervari as a resource
        return RezervareResource::collection($rezervari);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rezervare = $request->isMethod('put') ? 
            Rezervare::findOrFail($request->rezervare_id) : new Rezervare;

        $rezervare->id = $request->input('rezervare_id');
        $rezervare->date = $request->input('date');
        $rezervare->time_slot = $request->input('time_slot');
        $rezervare->sport = $request->input('sport');

        if($rezervare->save()) {
            return new RezervareResource($rezervare);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get rezervare
        $rezervare = Rezervare::findOrFail($id);

        // Return single rezervare as a resource
        return new RezervareResource($rezervare);
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
        // Get rezervare
        $rezervare = Rezervare::findOrFail($id);

        if($rezervare->delete()) {
            return new RezervareResource($rezervare);
        }
    }
}
