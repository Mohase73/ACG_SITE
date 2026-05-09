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
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\AdminCommandeController;

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
Route::get('/actualite/{year?}/{month?}', [App\Http\Controllers\ActualiteController::class, 'index'])->name('actualite');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/actualites', [App\Http\Controllers\ActualiteController::class, 'adminIndex'])->name('admin.actualites.index');
    Route::get('/actualites/create', [App\Http\Controllers\ActualiteController::class, 'create'])->name('admin.actualites.create');
    Route::post('/actualites', [App\Http\Controllers\ActualiteController::class, 'store'])->name('admin.actualites.store');
    Route::get('/actualites/{actualite}/edit', [App\Http\Controllers\ActualiteController::class, 'edit'])->name('admin.actualites.edit');
    Route::put('/actualites/{actualite}', [App\Http\Controllers\ActualiteController::class, 'update'])->name('admin.actualites.update');
    Route::delete('/actualites/{actualite}', [App\Http\Controllers\ActualiteController::class, 'destroy'])->name('admin.actualites.destroy');
});

// ===== BOUTIQUE =====
Route::get('/boutique', [ProduitController::class, 'index'])->name('boutique.index');
Route::get('/boutique/{produit}', [ProduitController::class, 'show'])->name('boutique.show');

// ===== PANIER =====
Route::get('/panier', [PanierController::class, 'index'])->name('panier.index');
Route::post('/panier/{produit}', [PanierController::class, 'ajouter'])->name('panier.ajouter');
Route::delete('/panier/{item}', [PanierController::class, 'supprimer'])->name('panier.supprimer');
Route::delete('/panier', [PanierController::class, 'vider'])->name('panier.vider');

// ===== COMMANDES =====
Route::get('/commande/checkout', [CommandeController::class, 'checkout'])->name('commande.checkout');
Route::post('/commande', [CommandeController::class, 'store'])->name('commande.store');
Route::get('/commande/confirmation/{reference}', [CommandeController::class, 'confirmation'])->name('commande.confirmation');

// ===== ADMIN COMMANDES =====
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/commandes', [AdminCommandeController::class, 'index'])->name('admin.commandes.index');
    Route::get('/commandes/{commande}', [AdminCommandeController::class, 'show'])->name('admin.commandes.show');
    Route::patch('/commandes/{commande}/statut', [AdminCommandeController::class, 'updateStatut'])->name('admin.commandes.statut');
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
