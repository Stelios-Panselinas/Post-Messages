<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['home/(:any)'] = 'home/view/$1';
//$route['home'] = 'home/view';
$route['posts/create'] = 'posts/create';
$route['posts/(:any)'] = 'posts/index/$1';
$route['posts'] = 'posts/index';
$route['admin/(:any)'] = 'admin/view/$1';
$route['admin'] = 'admin/view/';
$route['pages/(:any)'] = 'pages/view/$1';
$route['pages'] = 'pages/view';
$route['default_controller'] = 'home/view';
$route['(:any)'] = 'home/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;