<?php namespace Config;

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


/**
 * --------------------------------------------------------------------
 * Home Routes
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Home::index');


/**
 * --------------------------------------------------------------------
 * SUPER ADMIN ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '1'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,1'], function ($routes) {

	$routes->get('admin', 'admin::index'); // ADMIN DASHBOARD
	$routes->match(['get', 'post'], 'admin/profile', 'Auth::profile'); 
	$routes->match(['get', 'post'], 'admin/panel', 'Anime::panel');
	$routes->match(['get', 'post'], 'admin/panel/anime-list', 'Anime::animelist'); 
	$routes->match(['get', 'post'], 'admin/panel/anime-add', 'Anime::animeadd');
	$routes->post('admin/panel/anime-add/add', 'Anime::add');
	$routes->match(['get', 'post'], 'admin/panel/anime-edit', 'Anime::animeedit');
	$routes->match(['get', 'post'], 'admin/panel/anime-delete', 'Anime::animedelete');
	$routes->match(['get', 'post'], 'admin/panel/movie', 'Anime::movieadd');
	$routes->match(['get', 'post'], 'admin/panel/anime/episode', 'Anime::aepisodeadd');
	$routes->match(['get', 'post'], 'admin/panel/movie/episode', 'Anime::mepisodeadd');
	$routes->match(['get', 'post'], 'admin/panel/fansub', 'Anime::fansub');

});


/**
 * --------------------------------------------------------------------
 * USER. MUST BE LOGGED IN AND HAVE ROLE OF '2'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,2'], function ($routes){

	$routes->get('user', 'user::index'); // User Dashboard
	$routes->match(['get', 'post'], 'user/profile', 'Auth::profile');
});


/**
 * --------------------------------------------------------------------
 * Panel ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '3' 
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,3'], function ($routes) {

	$routes->get('mod', 'mod::index'); // ADMIN DASHBOARD
	$routes->match(['get', 'post'], 'mod/profile', 'Auth::profile'); 
	$routes->match(['get', 'post'], 'mod/panel', 'Anime::panel'); 
	$routes->match(['get', 'post'], 'mod/panel/anime-list', 'Anime::animelist'); 
	$routes->match(['get', 'post'], 'mod/panel/anime-add', 'Anime::animeadd');
	$routes->match(['get', 'post'], 'mod/panel/anime-edit', 'Anime::animeedit');
	$routes->match(['get', 'post'], 'mod/panel/anime-delete', 'Anime::animedelete');
	$routes->match(['get', 'post'], 'mod/panel/movie', 'Anime::movieadd');
	$routes->match(['get', 'post'], 'mod/panel/anime/episode', 'Anime::aepisodeadd');
	$routes->match(['get', 'post'], 'mod/panel/movie/episode', 'Anime::mepisodeadd');
	$routes->match(['get', 'post'], 'mod/panel/fansub', 'Anime::fansub');

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
