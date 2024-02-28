<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowcaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        if(request()->isMethod('PUT')){
            $data = [
                'course_id' => 'required',
                'title' => 'required',
                'cover' => 'mimes:png,jpg,jpeg|max:2048',
                'description' => 'required',
            ];
        } else {
            $data = [
                'course_id' => 'required',
                'title' => 'required',
                'cover' => 'required|mimes:png,jpg,jpeg|max:2048',
                'description' => 'required',

            ];
        }

        return $data;
    }
}
