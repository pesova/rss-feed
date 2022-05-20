<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'short_desc' => 'required|min:5',
            'long_desc' => 'required|min:10',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ];
    }
}
