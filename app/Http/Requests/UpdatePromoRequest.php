<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePromoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'azienda' => ['required', 'integer'],
            'sconto' => ['required', 'integer', 'between:1,100'],
            'oggetto' => ['required', 'string', 'max:255'],
            'modalita' => ['required', 'string', 'max:255'],
            'tempoFruizione' => ['required', 'date'],
            'luogoFruizione' => ['required', 'string', 'max:255'],
        ];
    }
}
