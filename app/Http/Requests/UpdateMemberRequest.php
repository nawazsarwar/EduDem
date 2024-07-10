<?php

namespace App\Http\Requests;

use App\Models\Member;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMemberRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('member_edit');
    }

    public function rules()
    {
        return [
            'booth_name' => [
                'string',
                'nullable',
            ],
            'booth_no' => [
                'string',
                'nullable',
            ],
            'assembly_constituency' => [
                'string',
                'nullable',
            ],
            'name' => [
                'string',
                'required',
            ],
            'first_name' => [
                'string',
                'required',
            ],
            'middle_name' => [
                'string',
                'nullable',
            ],
            'last_name' => [
                'string',
                'nullable',
            ],
            'dob' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'mobile' => [
                'string',
                'nullable',
            ],
            'department' => [
                'string',
                'nullable',
            ],
            'subject' => [
                'string',
                'nullable',
            ],
            'designation' => [
                'string',
                'nullable',
            ],
            'institution_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
