<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataTablesRequest extends FormRequest
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
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'points' => 'required|integer',
            'notes' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => '3 letters',
            'lastname.required' => '3 letters',
            'points.required' => '3 letters',
            'notes.required' => '3 letters',
        ];
    }
}
