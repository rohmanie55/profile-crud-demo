<?php

namespace App\Http\Requests;

class UserRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'  => 'required|string|max:50|unique:users,username'.($this->profile?','.$this->profile: ''),
            'password' => [$this->profile ?'nullable':'required','string', function($attribute, $value, $fail){
                if(!(preg_match('/[A-Z]/', $value) && preg_match('/[a-z]/', $value) && preg_match('/[^a-zA-Z0-9]/', $value) && strlen($value) > 8)){
                    $fail("The $attribute must contain at least one uppercase letter, one lowercase letter, one special character, and be at least 8 characters long.");
                }
            }],
            'first_name'=>'required|max:100',
            'last_name' =>'required|max:100',
            'city'=>'nullable|max:100',
            'state'=>'nullable|max:100',
            'zip_code'=>'nullable|max:10',
            'address' =>'nullable'
        ];
    }
}
