<?php

namespace App\Http\Requests\DistanceLearning;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name_en' => 'max:255',
            'name_am' => 'required|max:255',
            'name_ru' => 'max:255',
            'syllabus_am' => 'required',
            'img' => 'required',
            'syllabus_pdf' => 'required',
            'syllabus_pdf_name_en' => 'max:255',
            'syllabus_pdf_name_am' => 'required|max:255',
            'syllabus_pdf_name_ru' => 'required|max:255',
        ];
    }
}
