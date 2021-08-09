<?php

namespace App\Http\Controllers;

use App\Models\AnnouncedPuResult;
use App\Http\Requests\PuResultStoreRequest;
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
