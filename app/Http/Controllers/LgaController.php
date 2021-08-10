<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\Wards as WM;

class LgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lga = Lga::all();

        return response()->json($lga);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lga = Lga::where('lga_id', $id);

        return response()->json($lga);
    }

    /**
     * getLgaById
     *
     * @param  mixed $id
     * @return void
     */
    public static function getLgaById($id)
    {
        $lga = Lga::where('lga_id', $id)->get();
        return response()->json($lga);
    }

    /**
     * getWardByLGAId
     *
     * @param  mixed $lga_id
     * @return void
     */
    public static function getWardByLGAId($lga_id)
    {

        $wards = WM::where('lga_id', $lga_id)->get();
        return response()->json($wards);
    }

    /**
     * getLGAByStateId
     *
     * @return void
     */
    public static function getLGAByStateId($state_id)
    {
        $lgas = Lga::where('state_id', $state_id)->get();
        return response()->json($lgas);
    }
}
