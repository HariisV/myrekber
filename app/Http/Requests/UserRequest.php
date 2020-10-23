<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nama_depan' => 'Required',
            'nama_belakang' => 'Required',
            'no_telfon' => 'Required|numeric',
            'email' => 'Required|unique:user,email',
            'password' => 'required|min:10'
        ];
    }
    public function messages()
    {
        return [
            'nama_depan.required' => 'Tidak Boleh Kosong !',
            'nama_belakang.required' => 'Tidak Boleh Kosong !',
            'no_telfon.required' => 'Tidak Boleh Kosong !',
            'email.required' => 'Tidak Boleh Kosong !',
            'password.required' => 'Tidak Boleh Kosong !',
            'no_telfon.numeric' => 'Hanya Boleh Angka',
            'email.unique' => 'Email Telah Digunakan',
            'password.min' =>'Password Terlalu Singkat nih !'
        ];
    }
}
