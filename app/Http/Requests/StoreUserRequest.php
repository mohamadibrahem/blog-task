<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
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
            'password' => [
                'required',
            ],
            'username' => [
                'string',
                'required',
                'unique:users',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
