<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactForm extends FormRequest
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
          'name' => 'required|max:100|min:3',
          'number' => 'required|integer|min:4',
          'website' => 'required|max:50|min:4',
          'email' => 'required|max:100|min:5',
          'letter' => 'required|min:5|max:250'
        ];
    }
}
