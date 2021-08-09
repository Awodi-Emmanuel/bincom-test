<?php

namespace App\Http\Requests;

use App\Models\PollingUnit;
use Illuminate\Foundation\Http\FormRequest;

class StoreResultRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
        ];
    }
}
