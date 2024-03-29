<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return [
            'nama' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama.required' => 'Field Nama Pengurus harus diisi.',
            'username.required' => 'Field Email harus diisi.',
            'username.unique' => 'Email sudah digunakan.',
            'password.required' => 'Field Password Sementara harus diisi.',
            'password.min' => 'Panjang Password Sementara minimal 8 karakter.',
            'role.required' => 'Field Kepengurusan harus diisi.',
        ];
    }
}
