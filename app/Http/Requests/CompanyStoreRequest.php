<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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
            // * Request regels toevoegen die je gebruikt in de formulier 
             'name'  => 'required|string|unique:companies|min:5|max:50', 
             'stagestatus'  => 'required|string|min:5|max:30' ,
             'details'  => 'required|string|unique:companies|min:5|max:30' 
        ];
    }
}
