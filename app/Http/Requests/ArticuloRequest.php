<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'codigo' => ['required', 'unique:articulos,codigo'],
            'nombre' => ['required'],
            'precio' => ['required'],
            'descripcion' => ['required']
        ];
    }
}
