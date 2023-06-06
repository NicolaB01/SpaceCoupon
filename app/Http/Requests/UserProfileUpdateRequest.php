<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class UserProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'genere' => ['required', 'string'],
            'eta' => ['required', 'integer', 'between:6,120'],
            'telefono' => ['required', 'integer', 'digits:10', Rule::unique(User::class)->ignore($this->user()->idUtente, 'idUtente')],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->idUtente, 'idUtente')],
            'username' => ['required', 'string', 'min:6', Rule::unique(User::class)->ignore($this->user()->idUtente, 'idUtente')],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

}