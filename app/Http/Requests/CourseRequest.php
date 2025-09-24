<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
                'name' => 'required|unique:courses,name,'.$this->id,
                'image' => 'mimes:png,jpg,jpeg|max:2048',
                'category_id' => 'required',
                'mentor_id' => 'nullable|exists:mentors,id',
                'demo' => 'nullable',
                'discount' => 'nullable',
                'sort_description' => 'required',
                'description' => 'required',
                'price_before_discount' => 'required',
                'price_after_discount' => 'required',
                'benefits' => 'required',
                'meta_description' => 'required',
                'meta_keywords' => 'required',
                'link_telegram' => 'sometimes',
                'link_whatsapp' => 'sometimes',
                'is_published' => 'required',
                // Series validation rules
                'series' => 'nullable|array',
                'series.*.title' => 'required|string|max:255',
                'series.*.number_of_series' => 'required|integer|min:1',
                'series.*.intro' => 'required|in:0,1',
                'series.*.content_type' => 'required|in:video,text,quiz',
                'series.*.video_code' => 'required_if:series.*.content_type,video|nullable|string',
                'series.*.text_content' => 'required_if:series.*.content_type,text|nullable|string',
                'series.*.description' => 'nullable|string',
              ];
        } else {
            $data = [
                'name' => 'required|unique:courses',
                'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                'category_id' => 'required',
                'mentor_id' => 'nullable|exists:mentors,id',
                'demo' => 'nullable',
                'discount' => 'nullable',
                'description' => 'required',
                'sort_description' => 'required',
                'price_before_discount' => 'required',
                'price_after_discount' => 'required',
                'benefits' => 'required',
                'meta_keywords' => 'required',
                'meta_description' => 'required',
                'link_telegram' => 'sometimes',
                'link_whatsapp' => 'sometimes',
                'is_published' => 'required',
                // Series validation rules
                'series' => 'nullable|array',
                'series.*.title' => 'required|string|max:255',
                'series.*.number_of_series' => 'required|integer|min:1',
                'series.*.intro' => 'required|in:0,1',
                'series.*.content_type' => 'required|in:video,text,quiz',
                'series.*.video_code' => 'required_if:series.*.content_type,video|nullable|string',
                'series.*.text_content' => 'required_if:series.*.content_type,text|nullable|string',
                'series.*.description' => 'nullable|string',
            ];
        }

        return $data;
    }
}
