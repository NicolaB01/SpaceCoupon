<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffProfileUpdateRequest;
use Illuminate\Support\Facades\Hash;

class StaffProfileController extends Controller
{
    public function show()
    {
        session()->put('pagina', 'profilo');

        return view('livello2.profile.profile')
                ->with('user', auth()->user());
    }

    public function edit()
    {
        session()->forget('pagina');

        return view('livello2.profile.editProfile')
            ->with('user', auth()->user());
    }

    public function update(StaffProfileUpdateRequest $request)
    {
        $user = auth()->user();
        
        $user->update([
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profilo.staff')->with('status', 'Il profilo è stato modificato correttamente');
    }
}
