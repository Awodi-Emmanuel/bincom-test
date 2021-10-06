<?php

namespace App\Http\Controllers;

use App\Models\AnnouncedLgaResult;
use Illuminate\Http\Request;

class LgaResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lgaresult = AnnouncedLgaResult::all();

        return response()->json($lgaresult);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeResult(Request $request)
    {
        $announcedlgaresults = AnnouncedLgaResult::create([
            // 'result_id' => $request->result_id,
            'lga_name' => $request->lga_name,
            // 'polling_unit_uniqueid' => $request->polling_unit_uniqueid,
            'party_abbreviation' => $request->party_abbreviation,
            'party_score' => $request->party_score,
            'entered_by_user' => $request->entered_by_user,
            'date_entered' => $request->date_entered,
            'user_ip_address' => $request->user_ip_address

        ]);
        return redirect()->route('announcedlgaresults.create')->with('message', 'Polling unit Created Successfully');
        // return response()->json($announcedLgaResults);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result_count = AnnouncedLgaResult::where('result_id', $id)->sum('lga_score');

        var_dump($result_count);
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
