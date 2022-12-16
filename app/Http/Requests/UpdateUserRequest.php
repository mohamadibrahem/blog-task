<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'username' => [
                'string',
                'required',
                'unique:users,username,' . request()->route('user')->id,
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
