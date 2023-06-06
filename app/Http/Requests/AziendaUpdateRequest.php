<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AziendaUpdateRequest extends FormRequest
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
            'ragioneSociale' => ['required', 'max:25', Rule::unique(Company::class)->ignore($this->idAzienda, 'idAzienda')],
            'logo' => ['file', 'mimes:jpeg,png','max:1000000'],
            'tipologia' => ['required', 'string', 'max:50'],
            'localizzazione' => ['required', 'string', 'max:50'],
            'descrizione' => ['required', 'string', 'max:2500'],
        ];
    }
}
