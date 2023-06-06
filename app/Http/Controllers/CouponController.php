<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Promotion;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    protected $coupon;
    protected $promozioni;

    public function __construct() {
        $this->coupon = new Coupon;
        $this->promozioni = new Promotion;
     }

    public function index(Request $request)
    {
        session()->put('pagina', 'coupon');

        $ricerca = $request->search;
        $coupons = coupon::where('idUtente', '=', auth()->user()->idUtente)->get();
        $promozioni = $this->promozioni->cercaPromozioni($this->coupon->getPromozioniFromCoupon($coupons), $ricerca)->paginate(16)->withQueryString();

        session()->put('url', url()->full());

        return view('livello1.profile.listaCoupon')
                ->with('promozioni', $promozioni)
                ->with('ricerca', $request->search);
    }

    public function store($idPromozione)
    {
        $this->coupon->create([
            'idPromozione' => (int)$idPromozione,
            'idUtente' => auth()->user()->idUtente,
            'codiceAttivazione' => $this->coupon->generateActivationCode(),
        ]);

        $promozione = promotion::findOrFail($idPromozione);
        
        $promozione->update([
            'numeroCoupon' => $promozione->numeroCoupon + 1,
        ]);

        return redirect()->back()->with('status', 'Coupon generato correttamente');
    }

    public function show($idCoupon)
    {
        session()->forget('pagina');
        
        $coupon = coupon::where('idUtente', '=', auth()->user()->idUtente)
                            ->findOrFail($idCoupon);
       
        $promozione = $coupon->Promozione;

        return view('livello1.stampa')
                ->with('promozione', $promozione)
                ->with('codiceAttivazione', $coupon->codiceAttivazione);
    }

    public function stats(Request $request) 
    {
        session()->put('pagina','statistiche');

        $numeroCoupon = promotion::sum('numeroCoupon');
        $promozioni = $this->promozioni->cercaPromozioni(promotion::where('eliminata', '=', 0), $request->search)->orderBy('numeroCoupon', 'desc')->paginate(16)->withQueryString();
		
        return view('livello3/statistiche')
                ->with('ricerca', $request->search)
                ->with('numeroCoupon', $numeroCoupon)
                ->with('promozioni', $promozioni);
    }
}
