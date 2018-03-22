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


// BACKEND


$route['auth'] = 'AuthController';
$route['auth/(:any)'] = 'AuthController/$1';

$route['dashboard'] = 'DashboardController';

$route['customs-invoice'] = 'CustomsInvoiceController';
$route['customs-invoice/(:any)'] = 'CustomsInvoiceController/$1';
$route['customs-invoice/(:any)/(:any)'] = 'CustomsInvoiceController/$1/$2';

$route['bc16'] = 'Bc16Controller';
$route['bc16/(:any)'] = 'Bc16Controller/$1';
$route['bc16/(:any)/(:any)'] = 'Bc16Controller/$1/$2';

$route['wms'] = 'WmsController';
$route['wms/(:any)'] = 'WmsController/$1';

$route['report/inventory'] = 'ReportInventoryController';
$route['report/inventory/(:any)'] = 'ReportInventoryController/$1';

$route['reference/courier'] = 'ReferenceCourierController';
$route['reference/courier/(:any)'] = 'ReferenceCourierController/$1';
$route['reference/courier/(:any)/(:any)'] = 'ReferenceCourierController/$1/$2';

$route['reference/warehouse'] = 'ReferenceWarehouseController';
$route['reference/warehouse/(:any)'] = 'ReferenceWarehouseController/$1';
$route['reference/warehouse/(:any)/(:any)'] = 'ReferenceWarehouseController/$1/$2';

$route['reference/classification'] = 'ReferenceClassificationController';
$route['reference/classification/(:any)'] = 'ReferenceClassificationController/$1';
$route['reference/classification/(:any)/(:any)'] = 'ReferenceClassificationController/$1/$2';

$route['reference/creator'] = 'ReferenceCreatorController';
$route['reference/creator/(:any)'] = 'ReferenceCreatorController/$1';
$route['reference/creator/(:any)/(:any)'] = 'ReferenceCreatorController/$1/$2';

$route['reference/origin'] = 'ReferenceOriginController';
$route['reference/origin/(:any)'] = 'ReferenceOriginController/$1';
$route['reference/origin/(:any)/(:any)'] = 'ReferenceOriginController/$1/$2';

$route['reference/part'] = 'ReferencePartController';
$route['reference/part/(:any)'] = 'ReferencePartController/$1';
$route['reference/part/(:any)/(:any)'] = 'ReferencePartController/$1/$2';

$route['reference/project'] = 'ReferenceProjectController';
$route['reference/project/(:any)'] = 'ReferenceProjectController/$1';
$route['reference/project/(:any)/(:any)'] = 'ReferenceProjectController/$1/$2';

$route['reference/rem'] = 'ReferenceRemController';
$route['reference/rem/(:any)'] = 'ReferenceRemController/$1';
$route['reference/rem/(:any)/(:any)'] = 'ReferenceRemController/$1/$2';

$route['report/inventory'] = 'ReportInventoryController';