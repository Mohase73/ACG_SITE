<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailChimpController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CentreAppelController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransformationDigitalController;
// Route::get('/',                                      'AdminNavigationController@accueil')->name('bienvenue');
Route::prefix('admin')->group(function () {
    //Route::get('/',                                      'AdminNavigationController@accueil')->name('accueil');
    Route::resource('utilisateurs',                             'UtilisateursController');
    Route::resource('roles',                                    'RoleController');
    Route::get('utilisateurs/gerer/{utilisateur}',              'UtilisateursController@gerer')->name('gerer-utilisateur');
    Route::get('/user/profil', 'UtilisateursController@profil')->name('profil');
    Route::get('/user/password/edit', 'UtilisateursController@edit_password')->name('edit_password');
    Route::patch('/user/password/edit', 'UtilisateursController@change_password')->name('change_password');
});

Route::get('/',function(){
    return redirect('/admin');
});
Auth::routes();

//Route pour les newsletter
Route::get('newsletter', 'NewsletterController@manageMailChimp');
Route::post('subscribe',['as'=>'subscribe','uses'=>'NewsletterController@subscribe']);
Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'NewsletterController@sendCompaign']);
Route::get('/send-mail-using-mailchimp', [MailChimpController::class, 'index'])->name('send.mail.using.mailchimp.index');


//Formulaire de contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/nous_contactez', [ContactController::class, 'index'])->name('nous_contactez');





//Route pour les page d'accueil

//Route::get('/', 'WelcomeController@accueil')->name('bienvenue');
Route::get('/',function(){
    return redirect('/welcome');
});
Route::get('/connexion', 'ConnexionController@index')->name('connexion');
Route::get('/welcome', function(){
    return view('accueil');
});
Route::get('/contacts', function(){
    return view('contact');
});
Route::get('/a_propos_de_nous', function(){
    return view('pages.a-propos.about');
});
Route::get('/nos_partenaire', function(){
    return view('pages.a-propos.partners');
});
//route service
Route::get('centre-appel',[CentreAppelController::class , 'index'])->name('service.centre_appel');
Route::get('/nos-service', function(){
    return view('pages.service.service');
});
Route::get('service_a_valeur_ajouter', function(){
    return view('pages.service.kiosque');
});
Route::get('developpement_web', function(){
    return view('pages.service.dev');
});
Route::get('campagne_sms', function(){
    return view('pages.service.sms');
});
Route::resource('transformation_digital','TransformationDigitalController');
// Route::post('transformation', [TransformationDigitalController::class, 'store']);

//fullcalandar actualite
// Route::get('/actualite', ActualiteController::class)->name('actualite');

// réservations des formations - REMOVED

//route actualités
Route::get('/actualite', function(){
    return view('pages.actualite.actualite');
});






//route des formations - REMOVED


//Route de la boutique
Route::get('/boutique', function(){
    return view('pages.boutique.boutique');
});
Route::get('/portfolio', function(){
    return view('portfolio');
});
Route::get('/blog', function(){
    return view('blog');
});
Route::get('/gallery', function(){
    return view('gallery');
});

Route::get('/devis', function(){
    return view('devis');
});
//Routes ds articles

//Route::get('/articles', 'ArticleController@index')->name('articles.index');
//Route::get('/articles/{categorie}', 'ArticleController@parCategorie')->name('categorie');
//Route::get('/articles/{categorie}/{article}','ArticleController@show')->name('articles.show');


//Routes de la page particuliers
//Route::get('/particuliers','ParticulierController@index')->name('particulier');
//Route::get('/particuliers/{particulier}','ParticulierController@show')->name('particulier.show');


//Routes de la page professionnels
//Route::get('/professionnels','ProfessionnelController@index')->name('professionnel');
//Route::get('/professionnels/{professionnel}','ProfessionnelController@show')->name('professionnel.show');


//Routes comparateurs
//Route::get('/comparateurs','ComparateurController@index')->name('comparateur');
//Route::get('/comparateurs/{comparateur}','ComparateurController@show')->name('comparateurs.show');

//Routes de la page d'à-propos
//Route::get('/a-propos','AboutController@index')->name('a-propos');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('optimize');
    Artisan::call('optimize:clear');
    return "Cache is cleared";
});

Route::get('/controller', function() {
    Artisan::call('make:livewire RobotMode');
    Artisan::call('make:livewire RobotPower');

    return "Created successfully";

});


Route::get('/fill-cache', function() {
    Artisan::call('view:cache');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    return "Cache filled successfully";
});
Route::get('/auto-load', function() {

    return  "<pre>". shell_exec ('composer dump-autoload')."</pre>";

});
Auth::routes();


















Route::get('/clear-cache', function() {

Artisan::call('cache:clear');

Artisan::call('optimize');

Artisan::call('optimize:clear');

return "Cache is cleared";

});

Route::get('/controller', function() {

Artisan::call('make:livewire RobotMode');
Artisan::call('make:livewire RobotPower');

return "Created successfully";

});


Route::get('/fill-cache', function() {

Artisan::call('view:cache');

Artisan::call('route:cache');

Artisan::call('config:cache');

return "Cache filled successfully";

});



Route::get('/auto-load', function() {

return "<pre>". shell_exec ('composer dump-autoload')."</pre>";

});




