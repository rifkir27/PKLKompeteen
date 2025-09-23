<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesRequest extends FormRequest
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
        return [
            'title' => 'required',
            'number_of_series' => 'required',
            'intro' => 'required',
            'video_code' => 'sometimes',
            'description' => 'sometimes',
            'content_type' => 'required|in:video,text,quiz',
            'text_content' => 'required_if:content_type,text'
        ];
    }
}
