<?php

namespace App\Http\Controllers;

use App\Http\Requests\PromoRequest;
use App\Http\Requests\UpdatePromoRequest;
use App\Models\Coupon;
use App\Models\Promotion;
use App\Models\Company;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    protected $promozioni;
    protected $coupon;

    public function __construct(){
        $this->promozioni = new Promotion;
        $this->coupon = new Coupon;
    }

    public function index(Request $request)
    {
        session()->put('pagina', 'promozioni');
        session()->put('url', url()->full());
        session()->put('eliminata', url()->current());

        $promozioni = $this->promozioni->cercaPromozioni(Promotion::where('eliminata', '=', 0), $request->search)->paginate(16)->withQueryString();

        return view('livello0.catalogo')
                ->with('ricerca', $request->search)
                ->with('promozioni', $promozioni);
    }

    public function create()
    {
        session()->put('pagina', 'promozioni');

        $aziende = company::all();
        $nomeAziende = array();

        foreach($aziende as $azienda) {
            array_push($nomeAziende, $azienda->ragioneSociale);
        }

        array_unshift($nomeAziende,"");
        unset($nomeAziende[0]);

        return view('livello2/creaPromozione')
                ->with('nomeAziende', $nomeAziende);
    }

    public function store(PromoRequest $request)
    {
        $promotion = new Promotion;
        $promotion->fill($request->validated());
        $promotion->save();

        session()->flash('status', 'La promozione è stata creata correttamente');

        return response()->json(['redirect' => route('catalogo')]);
    }

    public function show($idPromozione)
    {
        session()->forget('pagina');

        $promozione = promotion::find($idPromozione);
        $coupon = $this->coupon->getCouponByPromozione($promozione);

        return view('livello0.viewPromo')
                ->with('coupon', $coupon)
                ->with('promozione', $promozione);
    }

    public function showAdmin($idPromozione)
    {
        session()->put('pagina','statistiche');

        $promozione = promotion::find($idPromozione);

        return view('livello3.viewPromoAdmin')
                ->with('coupon', $this->coupon)
                ->with('promozione', $promozione);
    }

    public function edit($idPromozione)
    {
        session()->forget('pagina');

        $aziende = company::all();
        $promozione = promotion::findOrFail($idPromozione);
        $nomeAziende = array();

        foreach($aziende as $azienda) {
            array_push($nomeAziende, $azienda->ragioneSociale);
        }

        array_unshift($nomeAziende,"");
        unset($nomeAziende[0]);

        return view('livello2/modificaPromozione')
                ->with('nomeAziende', $nomeAziende)
                ->with('promozione', $promozione);
    }

    public function update(UpdatePromoRequest $request, $idPromozione)
    {
        $promozione = promotion::find($idPromozione);

        $promozione->update([
            'idAzienda' => $request->azienda,
            'sconto' => $request->sconto,
            'oggetto' => $request->oggetto,
            'modalita' => $request->modalita,
            'tempoFruizione' => $request->tempoFruizione,
            'luogoFruizione' => $request->luogoFruizione,
        ]);

        return redirect()->route('visualizzaPromozione', ['idPromozione' => $idPromozione])->with('status', 'La promozione è stata modificata correttamente');
    }

    public function destroy($idPromozione)
    {
        promotion::findOrFail($idPromozione)->update([
            'eliminata' => true,
        ]);

        return redirect()->to(session()->get('eliminata'))->with('status', 'La promozione è stata eliminata correttamente');
    }

}
