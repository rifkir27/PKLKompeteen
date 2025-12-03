<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Series;

class CourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->isMethod('PUT')) {
            $routeCourse = $this->route('course');
            $courseId = is_object($routeCourse) ? $routeCourse->id : $routeCourse;

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
                'benefits' => 'nullable|array',
                'benefits.*' => 'nullable|exists:benefits,id',
                'link_telegram' => 'sometimes',
                'link_whatsapp' => 'sometimes',
                'is_published' => 'required',
                'certificate_drive_link' => 'nullable|url',
                'tools' => 'nullable|array',
                'tools.*' => 'nullable|exists:tools,id',
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
                'benefits' => 'nullable|array',
                'benefits.*' => 'nullable|exists:benefits,id',
                'link_telegram' => 'sometimes',
                'link_whatsapp' => 'sometimes',
                'is_published' => 'required',
                'certificate_drive_link' => 'nullable|url',
                'tools' => 'nullable|array',
                'tools.*' => 'nullable|exists:tools,id',
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
                        // Set video_source based on video_code if not set
                        if (!isset($item['video_source']) || empty($item['video_source'])) {
                            if (isset($item['video_code']) && !empty($item['video_code'])) {
                                if (str_contains($item['video_code'], 'youtube.com') || str_contains($item['video_code'], 'youtu.be')) {
                                    $item['video_source'] = 'youtube';
                                } elseif (str_contains($item['video_code'], 'drive.google.com')) {
                                    $item['video_source'] = 'drive';
                                } else {
                                    $item['video_source'] = 'drive'; // default
                                }
                            } else {
                                $item['video_source'] = null;
                            }
                        }
                        $videoSource = $item['video_source'];
                        if (!$videoSource) {
                            $validator->errors()->add("series.{$index}.video_source", 'Video source is required when content type is video.');
                        } elseif ($videoSource === 'file') {
                            $hasValidFile = $this->hasFile("series.{$index}.video_file") && $this->file("series.{$index}.video_file")->isValid();
                            // For edit, allow omitting video_file if existing video_path exists
                            if (!$hasValidFile) {
                                if ($this->isMethod('PUT')) {
                                    if (isset($item['id'])) {
                                        $existingSeries = Series::find($item['id']);
                                        if (!$existingSeries || !$existingSeries->video_path) {
                                            $validator->errors()->add("series.{$index}.video_file", 'Video file is required when content type is video.');
                                        }
                                    } else {
                                        // New series, require file
                                        $validator->errors()->add("series.{$index}.video_file", 'Video file is required when content type is video.');
                                    }
                                } else {
                                    // Create, require file
                                    $validator->errors()->add("series.{$index}.video_file", 'Video file is required when content type is video.');
                                }
                            }
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
