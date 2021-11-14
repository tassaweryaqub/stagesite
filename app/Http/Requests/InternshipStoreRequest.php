<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InternshipStoreRequest extends FormRequest
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
            // * let op hier kijken we in de store of de waardes ingevuld zijn 
            'company_id' => 'required|integer',  
            'practicalteacher_id' => 'required|integer', 
            'student_id' => 'required|integer', 


        ];
    }
}
