<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'idUtente';

    protected $fillable = [
        'nome',
        'cognome',
        'username',
        'password',
        'eta',
        'genere',
        'residenza',
        'telefono',
        'email',
        'livello',
    ];

    protected $hidden = [
        'username',
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

    public function getAllUsers() {
        $users = User::where('livello', '=', 'user');

        return $users;
    }

    public function getAllStaff() {
        $staff = User::where('livello', '=', 'staff');

        return $staff;
    }

    public function Coupons() {
        return $this->hasMany(Coupon::class, 'idUtente', 'idUtente');
    }

    public function hasRole($role) {
        $role = (array)$role;
        return in_array($this->livello, $role);
    }
}
