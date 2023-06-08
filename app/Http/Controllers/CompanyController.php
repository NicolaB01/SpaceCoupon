<?php

namespace App\Http\Controllers;

use App\Http\Requests\AziendaUpdateRequest;
use App\Http\Requests\AziendaRequest;
use App\Models\Company;
use App\Models\Promotion;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $promozioni;

    protected $azienda;

    public function __construct(){
        $this->promozioni = new Promotion;
        $this->azienda = new Company;
     }

    public function index(Request $request)
    {
        session()->put('pagina', 'aziende');
        session()->put('back', url()->full());

        $parolaRicercare = $request->search;

        $aziende = Company::where('ragioneSociale', 'LIKE', '%'.$parolaRicercare.'%')
                            ->where('eliminata', '=', 0)
                            ->paginate(4)->withQueryString();

        return view('livello0.aziende')
                ->with('aziende', $aziende)
                ->with('ricerca', $request->search);
    }

    public function indexAdmin(Request $request)
    {
        session()->put('pagina','aziende');
        session()->put('url', url()->full());

        $parolaRicercare = $request->search;

        $aziende = Company::where('ragioneSociale', 'LIKE', '%'.$parolaRicercare.'%')
                            ->where('eliminata', '=', 0)
                            ->paginate(6)->withQueryString();

        return view('livello3.aziende')
                ->with('aziende', $aziende)
                ->with('ricerca', $request->search);
    }

    public function show($idAzienda)
    {
        session()->forget('pagina');
        session()->put('url', url()->full());
        session()->put('eliminata', url()->current());

        $azienda = company::findOrFail($idAzienda);

        $promozioni = $this->promozioni->cercaPromozioni(Promotion::where('eliminata', '=', 0), $azienda->ragioneSociale)->paginate(16)->withQueryString();

        return view('livello0.azienda')
                ->with('azienda', $azienda)
                ->with('promozioni', $promozioni);
    }

    public function create()
    {
        session()->put('pagina', 'aziende');

        return view('livello3/aziendaAdd');
    }

    public function store(AziendaRequest $request)
    {
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $azienda = new Company;
        $azienda->fill($request->validated());
        $azienda->logo = $imageName;
        $azienda->save();
        
        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/loghiAziende';
            $image->move($destinationPath, $imageName);
        };
        
	    session()->flash('status', 'Azienda creata correttamente');
        
        return response()->json(['redirect' => route('admin.aziende')]);
    }

    public function edit($idAzienda)
    {
        session()->put('pagina', 'aziende');
        
        $azienda = Company::findOrFail($idAzienda);
        
        return view('livello3/aziendaEdit')
                ->with('azienda', $azienda);
    }

    public function update(AziendaUpdateRequest $request, $idAzienda)
    {
        $azienda = company::findOrFail($idAzienda);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = $image->getClientOriginalName();
            $destinationPath = public_path() . '/images/loghiAziende';
            $image->move($destinationPath, $imageName);
        } else {
            $imageName = $azienda->logo;
        }
        
        $azienda->update([
            'ragioneSociale' => $request->ragioneSociale,
            'logo' => $imageName,
            'tipologia' => $request->tipologia,
            'descrizione' => $request->descrizione,
            'localizzazione' => $request->localizzazione,
        ]);

        return redirect()->to(session()->get('url'))->with('status', 'L\'azienda è stata modificata correttamente');
    }

    public function destroy($idAzienda)
    {
        $azienda = company::findOrFail($idAzienda);

        $azienda->Promozioni()->update([
            'eliminata' => true,
        ]);

        $azienda->update([
            'eliminata' => true,
        ]);

        return redirect()->route('admin.aziende')->with('status', 'Azienda rimossa correttamente');
    }
}
