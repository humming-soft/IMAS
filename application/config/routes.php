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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['(\w{2})/(.*)'] = '$2';
$route['(\w{2})'] = $route['default_controller'];
$route['forgot-password'] = 'forgotpassword';
$route['reset-password'] = 'resetpassword';
$route['login'] = 'login/auth';
$route['programmes/create'] = 'programmes/create';
$route['programmes/list'] = 'programmes/listView';
$route['programmes/update'] = 'programmes/update';
$route['programmes/delete'] = 'programmes/delete';
$route['programmes/get_sector/(:num)'] = 'programmes/get_sector/$1';
//Projects CRUD
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)'] = 'programmes/find_programme/$1';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/([a-z]{6})'] = 'projects/$2/$1';
//
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)'] = 'projects/find_project/$1/$2';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/icv_calculation'] = 'projects/icv_calculation/$1/$2';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/icv_calculation/add'] = 'projects/add_icv/$1/$2';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/icv_calculation/claim_icv'] = 'projects/claim_icv/$1/$2';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/benefits'] = 'projects/project_benefits/$1/$2';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/benefits/add'] = 'projects/add_benefits/$1/$2';

$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/milestones'] = 'projects/milestones/$1/$2';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/delivarables'] = 'projects/delivarables/$1/$2';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/activities'] = 'projects/activities/$1/$2';
$route['programmes/([tda]{3}\-[prog]{4}\-[a-z]+\-[0-9]+\-[0-9]+\-[0-9]{4}+)/(:any)/collaboration'] = 'projects/collaboration/$1/$2';

