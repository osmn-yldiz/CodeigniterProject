<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'Error404';
$route['news/(:any)'] = 'news';
$route['translate_uri_dashes'] = FALSE;
$route['kurumsal/(:any)'] = 'about_us/detail/$1';