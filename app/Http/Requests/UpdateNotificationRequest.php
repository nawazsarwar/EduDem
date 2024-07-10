<?php

namespace App\Http\Requests;

use App\Models\Notification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNotificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('notification_edit');
    }

    public function rules()
    {
        return [
            'mode' => [
                'required',
            ],
            'type' => [
                'string',
                'required',
            ],
            'status' => [
                'string',
                'nullable',
            ],
            'data' => [
                'required',
            ],
            'try_count' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'done' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
