<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title_en' => 'required|max:255',
            'title_am' => 'required|max:255',
            'title_ru' => 'required|max:255',
            'description_en' => 'required',
            'description_am' => 'required',
            'description_ru' => 'required',
            'date' => 'required|max:255',
        ];
    }
}
