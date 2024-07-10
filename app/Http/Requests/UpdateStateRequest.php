<?php

namespace App\Http\Requests;

use App\Models\State;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('state_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:states,name,' . request()->route('state')->id,
            ],
        ];
    }
}
