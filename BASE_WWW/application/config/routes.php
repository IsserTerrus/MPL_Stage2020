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
$route['default_controller'] = 'visiteur/view';

$route['about'] = 'visiteur/about';

$route['visiteur'] = 'visiteur/view'; //http://localhost/base_www/index.php/visiteur
$route['visiteur/(:any)'] = 'visiteur/view/$1';//http://localhost/base_www/index.php/public/nom_de_la_vue
$route['connection'] = 'Login/index';
$route['deconnection'] = 'Logout/disconnect';

$route['member'] = 'membre/view';//http://localhost/base_www/index.php/member
$route['member/login'] = 'Login/connect';
$route['member/(:any)'] = 'membre/view/$1';
$route['album_creation'] = 'membre/set_Album';





$route['admin'] = 'admin/view';//http://localhost/base_www/index.php/admin

//GESTION DES PROFILS
$route['admin/admin_get_photographe/(:any)'] = 'admin/get_photographe/$1';
$route['admin/admin_edit_photographe'] = 'admin/update_photographe';
$route['admin/admin_edit_photographe/(:any)'] = 'admin/update_photographe';
$route['admin/admin_delete_photographe/(:any)'] = 'admin/delete_photographe/$1';
$route['creation_photographe'] = 'admin/create_photographe';

//GESTION DES ALBUMS
$route['admin/admin_gestion_album'] = 'admin/get_album';
// $route['admin/admin_gestion_album'] = 'admn/delete_album';





$route['admin/(:any)'] = 'admin/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;