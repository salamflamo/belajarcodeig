<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news'] = 'news';
$route['news/create'] = 'news/create';
$route['news/update/(:any)'] = 'news/update/$1';
$route['news/(:any)'] = 'news/view/$1';
$route['default_controller'] = 'halaman/view';
$route['(:any)'] = 'halaman/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
