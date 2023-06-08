<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';
    protected $primaryKey = 'idCoupon';
    public $timestamps = false;
    protected $fillable = [
        'idPromozione',
        'codiceAttivazione',
        'idUtente',
    ];

    public function generateActivationCode() {
        //ultima cifra è il numero di caratteri
        return strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10));
    }

    public function getPromozioniFromCoupon($coupons) {
        $idPromozioni = $coupons->pluck('idPromozione')->all();

        return promotion::whereIn('idPromozione', $idPromozioni);
    }

    public function getCouponByPromozione($promozione) {
        if(!is_null(auth()->user())) {
            $idUtente = auth()->user()->idUtente;
            $coupons = $promozione->Coupons()
                                ->where('idUtente', $idUtente)
                                ->first();
            return $coupons;
        };
        
        return null;
    }

    public function Promozione() {
        return $this->belongsTo(Promotion::class, 'idPromozione', 'idPromozione');
    }
}
