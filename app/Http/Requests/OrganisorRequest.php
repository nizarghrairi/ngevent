<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganisorRequest extends FormRequest
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
            'logo' => 'required_without:id|mimes:jpg,jpeg,png',
            'name' => 'required|string|max:100',
            'mobile' =>'required|max:100|unique:organizers,mobile,'.$this->id,
            'email'  => 'sometimes|nullable|unique:organizers,email,'.$this->id,
            'category_id'  => 'required|exists:main_categories,id',
            'address'   => 'required|string|max:500',
            'password'=>'required_without:id'
        ];
    }

    public function messages()
    {
        return [
            'required' =>'This field is required',
            'max' =>'this field is long',
            'category_id.exists'=>'this field does not exist',
            'email.email'=>'email format is incorrect',
            'address.string'=>'address must contain numbers and letters',
            'name.string'=>'name must contain numbers and letters',
            'logo.required_without'=>'logo is required',
            'email.unique'=>'the email is already parched',
            'mobile.unique'=>'the phone number is already used'
        ];
    }
}
