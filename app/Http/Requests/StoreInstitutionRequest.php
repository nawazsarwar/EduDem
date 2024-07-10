<?php

namespace App\Http\Requests;

use App\Models\Institution;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInstitutionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('institution_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'district_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
