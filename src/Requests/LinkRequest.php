<?php

namespace Mindyourteam\Links\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LinkRequest extends FormRequest
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
            'shortcode' => 'required',
            'url' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'shortcode.required' => 'Shortcode ist erforderlich',
            'url.required' => 'URL ist erforderlich',
        ];
    }
}
