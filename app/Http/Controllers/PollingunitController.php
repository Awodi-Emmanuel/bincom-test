<?php

namespace App\Http\Controllers;

use App\Models\PollingUnit;
use Illuminate\Http\Request;

class PollingunitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pollingunitresults = PollingUnit::all();
        var_dump($pollingunitresults);
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
        PollingUnit::cretae([
            'uniqueid' => $request->uniqueid,
            'polling_unit_id' => $request->polling_unit_id,
            'ward_id' => $request->ward_id,
            'lga_id' => $request->lga_id,
            'uniquewardid' => $request->uniquewardid,
            'polling_unit_number' => $request->polling_unit_number,
            'polling_unit_name' => $request->polling_unit_name,
            'polling_unit_description' => $request->description,
            'lat' => $request->lat,
            'long' => $request->long,
            'entered_by_user' => $request->entered_by_user,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pollingUnits = PollingUnit::where('lga_id', $id)->get();

        foreach ($pollingUnits as $i) {
            var_dump($i['uniqueid']);
        }

        // PuResultController::

        return response()->json($pollingUnits);
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
