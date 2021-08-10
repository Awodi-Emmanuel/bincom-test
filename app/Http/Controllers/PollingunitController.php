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
        $Allpollinguints = PollingUnit::all();

        return response()->json($Allpollinguints);
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
        $pollingUnits = PollingUnit::where('lga_id', $lga_id)->get();
        return response()->json($pollingUnits);
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
        $lgaPUSum = 0;
        $pollingUnits = PollingunitController::getPUByLGAId($lga_id);
        $pollingUnits = $pollingUnits->original;

        foreach ($pollingUnits as $pollingUnit) {
            $pollingUnitSum = PollingunitController::getPUResultByPUUniqueID($pollingUnit->uniqueid);
            $lgaPUSum += $pollingUnitSum;
        }

        return $lgaPUSum;
    }
}
