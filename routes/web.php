<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailchimpController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CentreAppelController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransformationDigitalController;
use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ConnexionController;

// ===== ROUTES ADMIN =====
Route::prefix('admin')->group(function () {
    Route::resource('utilisateurs', UtilisateursController::class);
    Route::resource('roles', RoleController::class);
    Route::get('utilisateurs/gerer/{utilisateur}', [UtilisateursController::class, 'gerer'])->name('gerer-utilisateur');
    Route::get('/user/profil', [UtilisateursController::class, 'profil'])->name('profil');
    Route::get('/user/password/edit', [UtilisateursController::class, 'edit_password'])->name('edit_password');
    Route::patch('/user/password/edit', [UtilisateursController::class, 'change_password'])->name('change_password');
});
    
// ===== AUTHENTIFICATION =====
Auth::routes();

// ===== ROUTE SECRETE ADMIN =====
Route::get('/acg-admin-secret-2024', [App\Http\Controllers\Auth\AdminRegisterController::class, 'showForm'])->name('admin.register');
Route::post('/acg-admin-secret-2024', [App\Http\Controllers\Auth\AdminRegisterController::class, 'store'])->name('admin.register.store');

// ===== ROUTES PRINCIPALES =====
Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/welcome', function () {
    return view('accueil');
});

Route::get('/choix', function () {
    return view('auth.choix');
})->middleware('guest')->name('choix');

Route::get('/profil', function () {
    return view('pages.profil');
})->middleware('auth')->name('profil.client');

// ===== NEWSLETTER =====
Route::post('subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
Route::get('/send-mail-using-mailchimp', [MailchimpController::class, 'index'])->name('send.mail.using.mailchimp.index');

// ===== CONTACT =====
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/nous_contactez', [ContactController::class, 'index'])->name('nous_contactez');

// ===== A PROPOS =====
Route::get('/a_propos_de_nous', function () {
    return view('pages.a-propos.about');
});
Route::get('/nos_partenaire', function () {
    return view('pages.a-propos.partners');
});

// ===== SERVICES =====
Route::get('/nos-service', function () {
    return view('pages.service.service');
});
Route::get('/centre-appel', [CentreAppelController::class, 'index'])->name('service.centre_appel');
Route::get('/service_a_valeur_ajouter', function () {
    return view('pages.service.kiosque');
});
Route::get('/developpement_web', function () {
    return view('pages.service.dev');
});
Route::get('/campagne_sms', function () {
    return view('pages.service.sms');
});
Route::resource('transformation_digital', TransformationDigitalController::class);

// ===== SOLUTIONS =====
Route::get('/alerte-job', function () {
    return view('pages.solutions.alerte-job');
})->name('alerte_job');
Route::get('/alerte-immobilier', function () {
    return view('pages.solutions.alerte-immobilier');
})->name('alerte_immobilier');
Route::get('/lovelink', function () {
    return view('pages.solutions.lovelink');
})->name('lovelink');
Route::get('/astrologie', function () {
    return view('pages.solutions.astrologie');
})->name('astrologie');
Route::get('/pingfoot', function () {
    return view('pages.solutions.pingfoot');
})->name('pingfoot');
Route::get('/royalturf', function () {
    return view('pages.solutions.royalturf');
})->name('royalturf');

// ===== ACTUALITES =====
Route::get('/actualite', function () {
    return view('pages.actualite.actualite');
});

// ===== BOUTIQUE =====
Route::get('/boutique', function () {
    return view('pages.boutique.boutique');
});

// ===== AUTRES PAGES =====
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/devis', function () {
    return view('devis');
});

// ===== CACHE (admin seulement) =====
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    return "Cache cleared";
})->middleware('auth');

Route::get('/fill-cache', function () {
    Artisan::call('view:cache');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    return "Cache filled";
})->middleware('auth');
