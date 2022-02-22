<?php

namespace App\Http\Requests\Partners;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'logo' => 'required',
            'category' => [
                'required',
                Rule::in(['international', 'foreign', 'arm&artsakh']),
            ],
        ];
    }
}
