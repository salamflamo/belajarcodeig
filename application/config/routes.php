<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//this is Commer's route, everything is here
$route['commer'] = 'commer';
$route['commer/(:any)'] = 'commer/view/$1';
$route['commer/mendaftar'] = 'commer/mendaftar';

//this is try for ci routes
$route['news'] = 'news';
$route['news/create'] = 'news/create';
$route['news/update/(:any)'] = 'news/update/$1';
$route['news/delete/(:any)'] = 'news/delete/$1';
$route['news/(:any)'] = 'news/view/$1';
$route['default_controller'] = 'halaman/view';
$route['(:any)'] = 'halaman/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
