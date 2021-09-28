<?php

namespace App\Http\Controllers;

use App\Models\AnnouncedPuResult as APR;
use App\Models\PollingUnit;

class PollingunitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pollingunits = PollingUnit::all();

        return view('pollingunits.display', compact('pollingunits'));
        // return response()->json('pollingunits');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pollingUnits = PollingUnit::where('lga_id', $id)->sum('uniqueid');

        return response()->json($pollingUnits);
    }

    /**
     * getPUByLGAId
     *
     * @param  mixed $lga_id
     * @return void
     */
    public static function getPUByLGAId($lga_id)
    {
        $pollingunits = PollingUnit::where('lga_id', $lga_id)->get();
        return response()->json($pollingunits);
    }

    /**
     * getPUResultByPUUniqueID
     *
     * @param  mixed $puUniqueId
     * @return void
     */
    public static function getPUResultByPUUniqueID($puUniqueId)
    {
        $puResult = APR::where('polling_unit_uniqueid', $puUniqueId)->pluck('party_score');
        $sum = 0;

        foreach ($puResult as $result) {
            $sum += $result;
        }

        return $sum;
    }

    /**
     * AllPUResultsByLGAID
     *
     * @param  mixed $lga_id
     * @return void
     */
    public static function AllPUResultsByLGAID($lga_id)
    {
        $lgaPUSums = 0;
        $pollingunits = PollingunitController::getPUByLGAId($lga_id);
        $pollingunits = $pollingunits->original;

        foreach ($pollingunits as $pollingunit) {
            $pollingunitSum = PollingunitController::getPUResultByPUUniqueID($pollingUnit->uniqueid);
            // declear a new veriabl
            $lgaPUSums += $pollingunitSum;
        }
        return response()->json($lgaPUSums);
        // return view('pollingunits.display', compact('pollingunits'));

    }
}
