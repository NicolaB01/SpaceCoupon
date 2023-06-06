<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = 'idAzienda';
    protected $fillable = [
        'ragioneSociale', 
        'localizzazione', 
        'logo', 
        'tipologia', 
        'descrizione', 
        'eliminata',
        'numeroPromozioni', 
        'idUtente',
    ];
    public $timestamps = false;

    public function getWindowCompanies() {
        $companies = Company::where('eliminata', '=', 0)
                            ->has('Promozioni')
                            ->withCount('Promozioni')
                            ->orderBy('promozioni_count', 'desc')
                            ->take(8)
                            ->get();

        return $companies;
    }

    public function Promozioni() {
        return $this->hasMany(Promotion::class, 'idAzienda', 'idAzienda')->where('eliminata', '=', 0);
    }
}
