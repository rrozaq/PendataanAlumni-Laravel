<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'npm' => 'required|unique:students|max:10',
            'nama_0152' => 'required',
            'id_prodi' => 'required',
            'agama' => 'required',
            'jk' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat_asal' => 'required',
            'id_provinsi' => 'required',
            'id_kab' => 'required',
            'slta_asal' => 'required',
            'thn' => 'required',
        ];
    }
}
