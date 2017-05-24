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

$route['default_controller'] = 'welcome'; // default is not working 
$route['dashboard/(:any)'] = 'dashboard/dashboard/$1';

$route['debtors/view'] = 'debtors/debtors/view';
$route['debtors/adddebtor'] = 'debtors/debtors/adddebtor';
$route['debtors/editdebtor/(:any)'] = 'debtors/debtors/editdebtor/$1';
$roue['debtors/deletedebtor/(:any)'] = 'debtors/debtors/deletedebtor/$1';

$route['creditors/view'] = 'creditors/creditors/view';
$roue['creditors/addcreditor'] = 'creditors/creditors/addcreditor';
$route['creditors/editcreditor/(:any)'] = 'creditors/creditors/editcreditor/$1';
$route['creditors/deletecreditor/(:any)'] = 'creditors/creditors/deletecreditor/$1';

$roue['sbills/addsbills'] = ['sbills/sbills/addsbills'];



$route['items/view'] = 'items/items/view';
$route['items/additem'] = 'items/items/additem';
$route['items/edititem/(:any)'] = 'items/items/edititem/$1';
$route['items/deleteitem/(:any)'] = 'items/items/deleteitem/$1';

$route['pbills/view'] = 'pbills/pbills/view';
$route['pbills/addpbills'] = 'pbills/pbills/addpbills';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
