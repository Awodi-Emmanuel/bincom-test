<?php

namespace App\Http\Controllers;

use App\Models\PollingUnit;
use App\Http\Requests\StoreResultRequest;
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
        $Allpollinguints = PollingUnit::all();

        return response()->json($Allpollinguints);
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
    public function store(StoreResultRequest $request)
    {
        $pollingunits = PollingUnit::cretae($request->validated());

            return view('pollingunits.create', compact('pollingunits'));
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
