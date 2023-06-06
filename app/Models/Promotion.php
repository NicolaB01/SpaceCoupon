<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $table = 'promotions';
    protected $primaryKey = 'idPromozione';
    public $timestamps = false;
    protected $fillable = [
        'idAzienda',
        'sconto',
        'oggetto',
        'modalita',
        'eliminata',
        'tempoFruizione',
        'luogoFruizione',
        'numeroCoupon'
    ];

    public function getWindowPromotions() {
        $promotions = Promotion::where('eliminata', '=', 0)
                                ->orderBy('numeroCoupon', 'desc')
                                ->take(8)
                                ->get();

        return $promotions;
    }

    public function cercaPromozioni($promozioni, $frase) {
        $parole = $this->dividiFrase($frase);
        $aziende = Company::whereIn('ragioneSociale', $parole)->get();
        $aziendaRicerca = $this->getFirstAziendaSearch($aziende, $parole);
        
        foreach($aziende as $company) {
            if (($key = array_search(strtolower($company->ragioneSociale), $parole)) !== false) {
                unset($parole[$key]);
            }
        }

        if(!is_null($aziendaRicerca)) {
            $promozioni = $promozioni->where('idAzienda', '=', $aziendaRicerca->idAzienda);
        }
        
        if(!is_null($parole)) {
            foreach($parole as $parola) {
                $promozioni->where('oggetto', 'LIKE', '%'.$parola.'%');
            }
        }

        return $promozioni;
    }

    private function dividiFrase($frase) {
        $frase = strtolower(trim($frase));
        if(strlen($frase)) {
            return array_unique(explode(' ', $frase));
        }
        return [];
    }

    private function getFirstAziendaSearch($companies, $parole) {
        foreach($parole as $parola) {
            foreach($companies as $company) {
                if (str_contains($parola, strtolower($company->ragioneSociale))) {
                   return $company;
                }
            }
        }
    }

    public function Coupons() {
        return $this->hasMany(Coupon::class, 'idPromozione', 'idPromozione');
    }

    public function Azienda() {
        return $this->belongsTo(Company::class, 'idAzienda', 'idAzienda');
    }
}
