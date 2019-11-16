<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainSectorRequest extends FormRequest
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
            'arabic_name' => 'required',
            'english_name' => 'required',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'arabic_name.required' => 'مطلوب إسم القطاع بالعربية !',
            'english_name.required' => 'مطلوب إسم القطاع بالإنجليزية  !',
        ];
    }
}
