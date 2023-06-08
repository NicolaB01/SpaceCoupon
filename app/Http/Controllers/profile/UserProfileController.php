<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileUpdateRequest;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function show()
    {
        session()->put('pagina', 'profilo');

        return view('livello1.profile.profile')
                ->with('user', auth()->user());
    }

    public function edit()
    {
        session()->put('pagina', 'profilo');

        return view('livello1.profile.editProfile')
            ->with('user', auth()->user());
    }

    public function update(UserProfileUpdateRequest $request) 
    {
        $user = auth()->user();

        $user->update([
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'genere' => $request->genere,
            'eta' => $request->eta,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profilo')->with('status', 'Il profilo è stato modificato correttamente');
    }
}
