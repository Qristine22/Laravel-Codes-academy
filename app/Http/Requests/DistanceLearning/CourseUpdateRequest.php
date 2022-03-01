<?php

namespace App\Http\Requests\DistanceLearning;

use Illuminate\Foundation\Http\FormRequest;

class CourseUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name_en' => 'required|max:255',
            'name_am' => 'required|max:255',
            'name_ru' => 'required|max:255',
            'syllabus_en' => 'required',
            'syllabus_am' => 'required',
            'syllabus_ru' => 'required',
            'syllabus_pdf_name_en' => 'required|max:255',
            'syllabus_pdf_name_am' => 'required|max:255',
            'syllabus_pdf_name_ru' => 'required|max:255',
        ];
    }
}
