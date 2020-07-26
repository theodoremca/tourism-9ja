<?php

namespace App\Http\Controllers;

use App\TourismPlaces;
use Illuminate\Http\Request;

class TourismPlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourismPlacess = TourismPlaces::all();
        return view('tourismPlaces.index', compact('tourismPlacess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourismPlaces = new TourismPlaces();
        return view('tourismPlaces.create', compact('tourismPlaces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tourismPlaces = new TourismPlaces();
        $validator = $tourismPlaces->TourismPlacesValidator($request);
        if ($validator->fails()) {
            return back()->with('status','Created successfully.');
        }
        else{
            $tourismPlaces = TourismPlaces::create($request->all());
        }

        return view('tourismPlaces.index', compact('tourismPlaces'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TourismPlaces  $tourismPlaces
     * @return \Illuminate\Http\Response
     */
    public function show(TourismPlaces $tourismPlaces)
    {
        return view('tourismPlaces.show', compact('tourismPlaces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TourismPlaces  $tourismPlaces
     * @return \Illuminate\Http\Response
     */
    public function edit(TourismPlaces $tourismPlaces)
    {
        return view('tourismPlaces.edit', compact('tourismPlaces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TourismPlaces  $tourismPlaces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TourismPlaces $tourismPlaces)
    {
        $validator = new TourismPlaces();
        $validator->TourismPlacesValidator($request);

        $tourismPlaces->update($request->all());

        return back()->with('status','Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TourismPlaces  $tourismPlaces
     * @return \Illuminate\Http\Response
     */
    public function destroy(TourismPlaces $tourismPlaces)
    {
        $tourismPlaces->delete();

        return back()->with('status','Deleted successfully.');
    }
}
