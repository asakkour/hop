<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContctRequestUpdate extends FormRequest
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
        $id = $this->segment(3);
        
        return [
            "nom"                  => "required|min:2|max:20",
            "prenom"               => "required|min:2|max:20",
            "email"                => "required|email|max:30|unique:contacts,email,".$id.",contact_ids",
        ];
    }
}
