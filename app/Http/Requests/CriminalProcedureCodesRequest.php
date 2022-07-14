<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriminalProcedureCodesRequest extends FormRequest
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
            'text_en' => 'max:255',
            'text_am' => 'required|max:255',
            'text_ru' => 'max:255',
            'year' => 'required|numeric|digits:4',
            'full_date' => 'required|max:255',
            'syllabus_pdf_name_en' => 'string',
            'syllabus_pdf_name_am' => 'required|string',
            'syllabus_pdf_name_ru' => 'string',
            'type' => 'required|integer',
        ];
    }
}
