<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class RectorsDecreeRequest extends FormRequest
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
            'text_en' => 'required',
            'text_am' => 'required',
            'text_ru' => 'required',
            'pdf_name' => 'required',
            'pdf' => 'required',
        ];
    }
}
