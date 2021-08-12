<?php

namespace App\Http\Controllers;

use App\Models\AnnouncedPuResult;
use App\Models\PollingUnit;
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
        $announcedpuresults = AnnouncedPuResult::all();

        return view('announcedpuresults.index', compact('announcedpuresults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $newpollingunits = PollingUnit::all();
        return view('newpollingunits.create', compact('newpollingunits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newpollingunits = PollingUnit::create([
            'ward_id' => $request->ward_id,
            'lga_id' => $request->lga_id,
            'polling_unit_id' => $request->polling_unit_id,
            'uniquewardid' => $request->uniquewardid,
            'polling_unit_number' => $request->polling_unit_number,
            'polling_unit_name' => $request->polling_unit_name,
            'polling_unit_description' => $request->polling_unit_description,
            'lat' => $request->lat,
            'long' => $request->long,
            'entered_by_user' => $request->entered_by_user,
            'user_ip_address' => $request->ip,

        ]);
        return redirect()->route('newpollingunits.create')->with('message', 'Polling unit Created Successfully');

        //return view('announcedpuresults.index', compact('announcedpuresults'));
        //return view('newpollingunits.create', compact('newpollingunits'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uniqueId)
    {
        $announcedpuresults = AnnouncedPuResult::Where('polling_unit_uniqueid', $uniqueId)->get();
        return view('announcedpuresults.index', compact('announcedpuresults'));
    }
}
