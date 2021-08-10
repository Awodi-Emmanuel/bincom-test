<?php

namespace App\Http\Controllers;

use App\Http\Requests\PuResultStoreRequest;
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
        $ward_id = $request->input('ward_id');
        $lga_id = $request->input('lgaId');
        $polling_unit_id = $request->input('polling_unit_id');
        $uniquewardid = $request->input('uniquewardid');
        $polling_unit_number = $request->input('polling_unit_number');
        $polling_unit_name = $request->input('polling_unit_name');
        $polling_unit_description = $request->input('polling_unit_description');
        $lat = $request->input('lat');
        $long = $request->input('long');
        $entered_by_user = $request->input('entered_by_user');
        $user_ip_address = $request->ip();

        $foo = array($ward_id, $lga_id, $uniquewardid, $polling_unit_number, $polling_unit_id, $polling_unit_name, $polling_unit_description, $lat, $long, $entered_by_user, $user_ip_address);

        // dd($foo);

        PollingUnit::create($foo);

        return;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PuResultStoreRequest $request)
    {
        $announcedpuresults = AnnouncedPuResult::create($request->validated());

        return redirect()->route('announcedpuresults.create')->with('message', 'Polling Unit Created Successfully');
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
