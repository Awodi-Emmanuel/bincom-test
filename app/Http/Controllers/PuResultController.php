<?php

namespace App\Http\Controllers;

use App\Models\AnnouncedPuResult;
use Illuminate\Http\Request;

class PuResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pollingunitresults = AnnouncedPuResult::all();

        // return view('pollingunitresults.index', compact('pollingunitresults'));
        return true;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pollingunits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AnnouncedPuResult::create([
            'result_id' => $request->result_id,
            'polling_unit_uniqueid' => $request->polling_unit_uniqueid,
            'party_abbreviation' => $request->party_abbreviation,
            'party_score' => $request->party_score,
            'entered_by_user' => $request->entered_by_user,
            'polling_unit_name' => $request->polling_unit_name,
            'polling_unit_description' => $request->description,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uniqueId)
    {
        $announcedPuResult = AnnouncedPuResult::Where('polling_unit_uniqueid', $uniqueId)->get();
        return response()->json($announcedPuResult);
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
        //
    }
}
