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
        $rules = [
            'title' => 'required',
            'number_of_series' => 'required',
            'intro' => 'required',
            'video_code' => 'nullable',
            'video_source' => 'nullable|in:youtube,drive,file',
            'description' => 'sometimes',
            'content_type' => 'required|in:video,text,quiz',
            'text_content' => 'nullable|string'
        ];

        // Conditional validation for video_code based on video_source
        if ($this->input('content_type') === 'video') {
            $rules['video_source'] = 'required|in:youtube,drive,file';

            $videoSource = $this->input('video_source');
            if ($videoSource === 'file') {
                $rules['video_code'] = 'required|file|mimes:mp4,avi,mov,wmv,flv,mkv|max:102400';
            } elseif ($videoSource === 'youtube' || $videoSource === 'drive') {
                $rules['video_code'] = 'required|string|url';
            }
        }

        return $rules;
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $contentType = $this->input('content_type');
            $videoCode = $this->input('video_code');
            $videoSource = $this->input('video_source');
            $textContent = $this->input('text_content');

            if ($contentType == 'video') {
                if (!$videoSource) {
                    $validator->errors()->add('video_source', 'Video source is required when content type is video.');
                } elseif ($videoSource === 'file' && (!$this->hasFile('video_code') || !$this->file('video_code')->isValid())) {
                    $validator->errors()->add('video_code', 'Video file is required when content type is video.');
                } elseif (($videoSource === 'youtube' || $videoSource === 'drive') && (!isset($videoCode) || empty($videoCode))) {
                    $validator->errors()->add('video_code', 'Video URL is required when content type is video.');
                }
            }
            if ($contentType == 'text' && (!isset($textContent) || empty($textContent))) {
                $validator->errors()->add('text_content', 'Text content is required when content type is text.');
            }
        });
    }
}
