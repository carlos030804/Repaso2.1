<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
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
            //
            'txtISBN'=>'required|numeric|digits:13',
            'txtTitulo'=>'required|string|max:150',
            'txtAutor'=>'required|string|max:100',
            'txtPaginas'=>'required|numeric|min:1',
            'txtAno'=>'required|integer|digits:4|min:1000|max:' . date('Y'),
            'txtEditorial'=>'required|string|max:100',
            'txtEmailEditorial'=> 'required|email'

        ];
    }
}
