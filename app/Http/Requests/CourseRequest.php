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
        if ($this->isMethod('PUT')) {
            // Ambil ID course dari route model binding
            $courseId = $this->route('course');

            $data = [
                'name' => 'required|unique:courses,name,' . $courseId,
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
                'series.*.video_code' => 'nullable',
                'series.*.video_source' => 'nullable|in:youtube,drive,file',
                'series.*.text_content' => 'nullable|string',
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
                'series.*.video_code' => 'nullable',
                'series.*.video_source' => 'nullable|in:youtube,drive,file',
                'series.*.text_content' => 'nullable|string',
                'series.*.description' => 'nullable|string',
            ];
        }

        return $data;
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $series = $this->input('series', []);
            foreach ($series as $index => $item) {
                if (isset($item['content_type'])) {
                    if ($item['content_type'] == 'video') {
                        $videoSource = $item['video_source'] ?? null;
                        if (!$videoSource) {
                            $validator->errors()->add("series.{$index}.video_source", 'Video source is required when content type is video.');
                        } elseif ($videoSource === 'file' && (!$this->hasFile("series.{$index}.video_code") || !$this->file("series.{$index}.video_code")->isValid())) {
                            $validator->errors()->add("series.{$index}.video_code", 'Video file is required when content type is video.');
                        } elseif (($videoSource === 'youtube' || $videoSource === 'drive') && (!isset($item['video_code']) || empty($item['video_code']))) {
                            $validator->errors()->add("series.{$index}.video_code", 'Video URL is required when content type is video.');
                        }
                    }
                    if ($item['content_type'] == 'text' && (!isset($item['text_content']) || empty($item['text_content']))) {
                        $validator->errors()->add("series.{$index}.text_content", 'Text content is required when content type is text.');
                    }
                }
            }
        });
    }
}
