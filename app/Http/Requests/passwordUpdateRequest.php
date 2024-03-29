<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class passwordUpdateRequest extends FormRequest
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
            'name' => 'required',
            'username' => 'required',
            'current_password' => 'required|sometimes|different:new_password',
            'new_password' => 'required|min:8|different:current_password',        
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Field Nama Pengurus harus diisi.',
            'username.required' => 'Field username harus diisi.',
            'username.username' => 'Format username tidak valid.',
            'username.unique' => 'username sudah digunakan.',
            'current_password.required' => 'Field Password harus diisi.',
            'current_password.min' => 'Panjang Password minimal 8 karakter.',
            'new_password.required' => 'Field Password harus diisi.',
            'new_password.min' => 'Panjang Password minimal 8 karakter.',
            'new_password.different' => 'Password Baru harus berbeda dengan Password Lama',
            'current_password.different' => 'Password Lama harus berbeda dengan password Baru',


        ];
    }
}
