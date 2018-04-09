<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'FrontendController';
$route['404_override'] = 'ErrorController/error_404';
$route['500_override'] = 'ErrorController/error_500';
$route['translate_uri_dashes'] = FALSE;

// FRONTEND
$route['json/(:any)'] = 'JsonController/$1';
$route['json/(:any)/(:any)'] = 'JsonController/$1/$2';

$route['auth'] = 'AuthController';
$route['auth/(:any)'] = 'AuthController/$1';

$route['register'] = 'RegisterController';
$route['register/(:any)'] = 'RegisterController/$1';

$route['profile'] = 'ProfileController';
$route['profile/(:any)'] = 'ProfileController/$1';

// BACKEND
$route['admin'] = 'DashboardController';
$route['admin/dashboard'] = 'DashboardController';

$route['admin/kelompok-rt'] = 'KelompokRtController';
$route['admin/kelompok-rt/(:any)'] = 'KelompokRtController/$1';
$route['admin/kelompok-rt/(:any)/(:any)'] = 'KelompokRtController/$1/$2';

$route['admin/warga'] = 'WargaController';
$route['admin/warga/(:any)'] = 'WargaController/$1';
$route['admin/warga/(:any)/(:any)'] = 'WargaController/$1/$2';

$route['admin/agenda'] = 'AgendaController';
$route['admin/agenda/(:any)'] = 'AgendaController/$1';
$route['admin/agenda/(:any)/(:any)'] = 'AgendaController/$1/$2';

$route['admin/info'] = 'InfoController';
$route['admin/info/(:any)'] = 'InfoController/$1';
$route['admin/info/(:any)/(:any)'] = 'InfoController/$1/$2';

$route['admin/arisan'] = 'ArisanController';
$route['admin/arisan/(:any)'] = 'ArisanController/$1';
$route['admin/arisan/(:any)/(:any)'] = 'ArisanController/$1/$2';

$route['admin/produk'] = 'ProdukController';
$route['admin/produk/(:any)'] = 'ProdukController/$1';
$route['admin/produk/(:any)/(:any)'] = 'ProdukController/$1/$2';


