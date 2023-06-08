<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Promotion;

class PublicController extends Controller
{
    protected $aziende;
    protected $promozioni;

    public function __construct(){
        $this->promozioni = new Promotion;
        $this->aziende = new Company;
     }

     public function showHome() {

        session()->put('pagina', 'home');
        session()->put('back', url()->current());
        session()->put('url', url()->full());
        session()->put('eliminata', url()->current());

        $aziende = $this->aziende->getWindowCompanies();
        $promozioni = $this->promozioni->getWindowPromotions();

        return view('livello0.home') 
            ->with('aziende', $aziende)
            ->with('promozioni', $promozioni);
    }

    public function showChiSiamo() {

        session()->put('pagina', 'who');

        return view('livello0.chi_siamo');
    }
}
