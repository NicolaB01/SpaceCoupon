<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Http\Requests\StaffUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;

    public function __construct() {
        $this->user = new User;
    }

    public function indexStaff()
    {
        session()->put('pagina','staff');
        session()->put('url', url()->full());
        
        $staffs = $this->user->getAllStaff()->paginate(10);

        return view('livello3/staff')
                ->with('staffs', $staffs);
    }

    public function indexUtenti()
    {
        session()->put('pagina','utenti');
        session()->put('url', url()->full());

        $users = $this->user->getAllUsers()->paginate(10);

        return view('livello3/utenti')
                ->with('users', $users);
    }

    public function createStaff()
    {
        session()->put('pagina','staff');

        return view('livello3/staffAdd');
    }

    public function storeStaff(StaffRequest $request)
    {
        $this->user->create([
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'genere' => $request->genere,
            'eta' => $request->eta,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'livello' => 'staff',
        ]);

        return redirect()->route('admin.staff')->with('status', 'Nuovo membro dello staff inserito correttamente');
    }

    public function editStaff($idStaff)
    {
        session()->put('pagina','staff');
        
        $staff = user::findOrFail($idStaff);

        return view('livello3/staffEdit')
                ->with('staff', $staff);
    }

    public function updateStaff(StaffUpdateRequest $request, $idStaff)
    {
        user::findOrFail($idStaff)->update([
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'genere' => $request->genere,
            'eta' => $request->eta,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->to(session()->get('url'))->with('status', 'Membro dello sta modificato correttamente');
    }

    public function destroyUtente($idUtente)
    {
        user::findOrFail($idUtente)->delete();

        return redirect()->to(session()->get('url'))->with('status', 'L\'utente è stato eliminato correttamente');
    }
    public function destroyStaff($idStaff)
    {
        user::findOrFail($idStaff)->delete();

        return redirect()->to(session()->get('url'))->with('status', 'Il membro dello staff è stato eliminato correttamente');
    }
}
