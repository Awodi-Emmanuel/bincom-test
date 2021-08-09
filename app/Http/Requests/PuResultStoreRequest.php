<?php

namespace App\Http\Requests;

use App\Models\AnnouncedPuResult;
use Illuminate\Foundation\Http\FormRequest;

class PuResultStoreRequest extends FormRequest
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
            'result_id' => $request->result_id,
            'polling_unit_uniqueid' => $request->polling_unit_uniqueid,
            'party_abbreviation' => $request->party_abbreviation,
            'party_score' => $request->party_score,
            'entered_by_user' => $request->entered_by_user,
            'polling_unit_name' => $request->polling_unit_name,
            'polling_unit_description' => $request->description,
        ];
    }
}
