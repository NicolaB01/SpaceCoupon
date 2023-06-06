<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class StaffRequest extends FormRequest
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
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'genere' => ['required', 'string'],
            'eta' => ['required', 'integer', 'between:6,120'],
            'telefono' => ['required', 'integer', 'digits:10', Rule::unique(User::class)->ignore($this->user()->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'username' => ['required', 'string', 'min:6', Rule::unique(User::class)->ignore($this->user()->id)],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }
}
