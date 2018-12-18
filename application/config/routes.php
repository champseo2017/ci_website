<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['/product/insert/(:any)'] = 'product/add';
$route['/product/edit/(:any)'] = 'product/update';
$route['/product/delete/(:any)'] = 'product/delete';