<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
                'name' => 'required','unique:courses,name'.$this->id,
                'photo' => 'mimes:png,jpg,jpeg|max:2048',
              ];
        } else {
            $data = [
                'name' => 'required|unique:courses',
                'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
            ];
        }
    
        return $data;
    }
}
