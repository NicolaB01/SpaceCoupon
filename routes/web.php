<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\profile\UserProfileController;
use App\Http\Controllers\profile\StaffProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'showHome'])
    ->name('home');

Route::get('/about', [PublicController::class, 'showChiSiamo'])
    ->name('about');

Route::get('/FAQ', [FaqController::class, 'index'])
    ->name('faq');

Route::get('/catalogo', [PromotionController::class, 'index'])
    ->name('catalogo');

Route::get('/aziende', [CompanyController::class, 'index'])
    ->name('aziende');

Route::get('/aziende/{idAzienda}', [CompanyController::class, 'show'])
    ->name('azienda');

Route::get('/promozione/{idPromozione}', [PromotionController::class, 'show'])
    ->name('visualizzaPromozione');


Route::middleware(['can:isUser'])->prefix('User')->group(function () {
    Route::get('/profilo', [UserProfileController::class, 'show'])
        ->name('profilo');

    Route::get('/modificaProfilo', [UserProfileController::class, 'edit'])
        ->name('profilo.edit');

    Route::post('/modificaProfilo', [UserProfileController::class, 'update'])
        ->name('profilo.update');

    Route::get('/listaCoupon', [CouponController::class, 'index'])
        ->name('profilo.coupons');

    Route::get('/stampa/{idCoupon}', [CouponController::class, 'show'])
        ->name('stampa.coupon');

    Route::post('/creaCoupon/{idPromozione}', [CouponController::class, 'store'])
        ->name('crea.coupon');
});

Route::middleware(['can:isStaff'])->prefix('Staff')->group(function () {
    Route::get('/profiloStaff', [StaffProfileController::class, 'show'])
        ->name('profilo.staff');

    Route::get('/modificaProfiloStaff', [StaffProfileController::class, 'edit'])
        ->name('profilo.staff.edit');

    Route::post('/modificaProfiloStaff', [StaffProfileController::class, 'update'])
        ->name('profilo.staff.update');
    
    Route::get('/creaPromozione', [PromotionController::class, 'create'])
        ->name('crea.promozione');
    
    Route::post('/creaPromozione', [PromotionController::class, 'store'])
        ->name('store.promozione');
    
    Route::get('/modificaPromozione/{idPromozione}', [PromotionController::class, 'edit'])
        ->name('edit.promozione');

    Route::post('/modificaPromozione/{idPromozione}', [PromotionController::class, 'update'])
        ->name('update.promozione');
    
    Route::post('/eliminaPromozione/{idPromozione}', [PromotionController::class, 'destroy'])
        ->name('delete.promozione');
});

Route::middleware(['can:isAdmin'])->prefix('Admin')->group(function () {
    Route::get('/listaAziende', [CompanyController::class, 'indexAdmin'])
        ->name('admin.aziende');
    
    Route::get('/creaAziende', [CompanyController::class, 'create'])
        ->name('admin.create.azienda');
    
    Route::post('/creaAziende', [CompanyController::class, 'store'])
        ->name('admin.store.azienda');

    Route::get('/modificaAziende/{idAzienda}', [CompanyController::class, 'edit'])
        ->name('admin.edit.azienda');
    
    Route::post('/modificaAziende/{idAzienda}', [CompanyController::class, 'update'])
        ->name('admin.update.azienda');

    Route::post('/eliminaAziende/{idAzienda}', [CompanyController::class, 'destroy'])
        ->name('admin.delete.azienda');

    Route::get('/listaStaff', [UserController::class, 'indexStaff'])
        ->name('admin.staff');
    
    Route::get('/modificaStaff/{idStaff}', [UserController::class, 'editStaff'])
        ->name('admin.edit.staff');

    Route::post('/modificaStaff/{idStaff}', [UserController::class, 'updateStaff'])
        ->name('admin.update.staff');

    Route::post('/eliminaStaff/{idStaff}', [UserController::class, 'destroyStaff'])
        ->name('admin.delete.staff');
    
    Route::get('/creaStaff', [UserController::class, 'createStaff'])
        ->name('admin.create.staff');
    
    Route::post('/storeStaff', [UserController::class, 'storeStaff'])
        ->name('admin.store.staff');
    
    Route::get('/listaUtenti', [UserController::class, 'indexUtenti'])
        ->name('admin.utenti');

    Route::post('/eliminaUtente/{idUtente}', [UserController::class, 'destroyUtente'])
        ->name('admin.delete.user');
    
    Route::get('/listafaq', [FaqController::class, 'indexAdmin'])
        ->name('admin.faq');

    Route::get('/creaFaq', [FaqController::class, 'create'])
        ->name('admin.create.faq');

    Route::post('/creaFaq', [FaqController::class, 'store'])
        ->name('admin.store.faq');

    Route::get('/modificaFaq/{idFaq}', [FaqController::class, 'edit'])
        ->name('admin.edit.faq');

    Route::post('/modificaFaq/{idFaq}', [FaqController::class, 'update'])
        ->name('admin.update.faq');
    
    Route::post('/eliminaFaq/{idFaq}', [FaqController::class, 'destroy'])
        ->name('admin.delete.faq');
    
    Route::get('/statistiche', [CouponController::class, 'stats'])
        ->name('admin.stats');

    Route::get('/statsPromozione/{idPromozione}', [PromotionController::class, 'showAdmin'])
        ->name('admin.visualizzaPromozione');    
});

require __DIR__.'/auth.php';
