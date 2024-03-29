<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conferences;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //es lo mismo que SELECT * FROM Conferences
        //$conferences = Conferences::all();
        $conferences = Conferences::all();
        
        //where('id', 1)-> get() //;

            //->select('id', 'conference_name', 'conc')
            //->get();

        dd($conferences);

        return view('conferences.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
