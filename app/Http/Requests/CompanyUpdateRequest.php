<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyUpdateRequest extends FormRequest
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
        $company = $this->route('company'); 
        return [
            //* we halen vanuit de route van company de ID op en kijken of de naam overeenkomt tijdens de EDIT / Update methode
            'name'  => 'required|string|unique:companies,name|min:5|max:50,'.$company->id , 
            'stagestatus'  => 'required|string|min:5|max:30',
            'details'  => 'required|string|unique:companies|min:5|max:30' 

        ];
    }
}
