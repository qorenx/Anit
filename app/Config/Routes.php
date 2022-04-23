<?php 

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Auth Routes
 * --------------------------------------------------------------------
 */

$routes->match(['get', 'post'], 'login', 'Auth::login'); // LOGIN PAGE
$routes->match(['get', 'post'], 'register', 'Auth::register'); // REGISTER PAGE
$routes->match(['get', 'post'], 'forgotpassword', 'Auth::forgotPassword'); // FORGOT PASSWORD
$routes->match(['get', 'post'], 'activate/(:num)/(:any)', 'Auth::activateUser/$1/$2'); // INCOMING ACTIVATION TOKEN FROM EMAIL
$routes->match(['get', 'post'], 'resetpassword/(:num)/(:any)', 'Auth::resetPassword/$1/$2'); // INCOMING RESET TOKEN FROM EMAIL
$routes->match(['get', 'post'], 'updatepassword/(:num)', 'Auth::updatepassword/$1'); // UPDATE PASSWORD
$routes->match(['get', 'post'], 'lockscreen', 'Auth::lockscreen'); // LOCK SCREEN
$routes->get('logout', 'Auth::logout'); // LOGOUT
$routes->get('test', 'test::index'); //test/test page kısmıdır.


/**
 * --------------------------------------------------------------------
 * Home Routes
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Home::index');

/**
 * --------------------------------------------------------------------
 * Home Bitiş
 * --------------------------------------------------------------------
 */


 /**
 * --------------------------------------------------------------------
 * Herkesin kullanacağı anime izleme sayfasının olduğu bölgenin routerleri
 * --------------------------------------------------------------------
 */

$routes->match(['get', 'post'], 'tv_anime', 'UserAnimeCP::index');   // AnimeAC içindeki adnime_listings çağırıyor. Burada listeme fuction ve echo ile birleştirme gösteriyor.



$routes->match(['get', 'post'], 'tv_anime/(:num)/(:any)', 'UserAnimeCP::anime_main/$1/$2');   // AnimeAC içindeki adnime_listings çağırıyor. Burada listeme fuction ve echo ile birleştirme gösteriyor.



 /**
 * --------------------------------------------------------------------
 * Herkes kullandığı router bitişi
 * --------------------------------------------------------------------
 */












/**
 * --------------------------------------------------------------------
 * SUPER ADMIN ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '1'
 * --------------------------------------------------------------------
 */

$routes->group('admin', ['filter' => 'auth:Role,1'], function ($routes) {

	$routes->get('', 'AdminCP::index'); // Admin backend admin_home.php bulunuyor.
	$routes->match(['get', 'post'], 'profile', 'Auth::profile');   // view içindeki profil çağırıyor.


	$routes->group('anime', ['filter' => 'auth:Role,1'], function ($routes) {  /// admin/anime içeriğidir.
	///Anime Ekleme Kısmının Başlangıcıdır. Controller olarak AnimeAC kullanıyor.  Model olarak AniACModel kullanmaktadır.
	$routes->match(['get', 'post'], 'anime_add', 'AnimeAC::anime_add');   // admincp controller ile view/admin/anime/anime_add çağırıyor.
	$routes->post('anime_add/add', 'AnimeAC::anime__add');   // admincp içindeki anime__add fuction çağırıyor.
	$routes->get('anime_update/(:num)', 'AnimeAC::anime_update/$1');  ///AnimeAC içindeki anime_update ve page yönetiyor.
	$routes->post('anime_update', 'AnimeAC::anime__update'); /// AnimeAC içindeki anime__update komutunu çalıştırıyor. SQL günceller.

	$routes->get('anime_genre/(:num)', 'AnimeAC::anime_genre/$1');  ///Anime AC içindeki anime_genre creator yeridir.
	$routes->post('anime_genre', 'AnimeAC::anime__genre'); /// AnimeAC içindeki anime__genre sql yazma yeridir.


	$routes->get('anime_delete/(:num)', 'AnimeAC::anime_delete/$1');
	$routes->match(['get', 'post'], 'anime_listing', 'AnimeAC::anime_listing');   // AnimeAC içindeki adnime_listings çağırıyor. Burada listeme fuction ve echo ile birleştirme gösteriyor.
	/// Anime Ekleme/Düzenleme/Silme kısmının bitişidir.
	}); /// admin/anime içeriği bitişidir.



	/// "admin/fansub" kısmın oluşturan yer  /// Geçici olarak askıda.
	$routes->group('fansub', ['filter' => 'auth:Role,1'], function ($routes) {
	/// Fansub Page Kontrol Etmektedir.  Controllers olarak FansubCP kullanıyor. Model olarak FansubACModel kullanmaktadır.
	$routes->match(['get', 'post'], 'index', 'FansubCP::fansub_main');
	$routes->match(['get', 'post'], 'fansub_add', 'FansubCP::fansub_add');   
	$routes->post('fansub_/add', 'FansubCP::fansub__add'); 
	$routes->get('update/(:num)', 'FansubCP::fansub_update/$1'); 
	$routes->post('update', 'FansubCP::fansub__update');
	$routes->get('delete/(:num)', 'FansubCP::fansub_delete/$1');
	/// Fansub Ekle/Düzenle/Sil Bitişidir.
	}); /// "admin/fansub" kısmı bitişidir.

});


/**
 * --------------------------------------------------------------------
 * User Admin Role
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,2'], function ($routes){

	$routes->get('user', 'UserCP::index'); // Üye dasboard yapılacaktır.
	$routes->match(['get', 'post'], 'user/profile', 'Auth::profile'); // view içindeki profil çağırıyor.
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
