<?php

namespace App\Http\Requests;

use App\Models\Blog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBlogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => [
                'required',
            ],
            'title' => [
                'string',
                'required',
            ],
            'content' => [
                'required',
            ],
            'status' => [
                'required',
            ],
            'publish_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}
