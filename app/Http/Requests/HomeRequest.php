<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'title_en' => 'required',
            'title_am' => 'required',
            'title_ru' => 'required',
            'rectors_word_en' => 'required',
            'rectors_word_am' => 'required',
            'rectors_word_ru' => 'required',
        ];
    }
}
