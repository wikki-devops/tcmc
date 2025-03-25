<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'Admin/index'; // Dashboard loads in index.php
$route['admin/(:any)'] = 'Admin/$1'; // All other admin pages load in their respective files

$route['default_controller'] = 'welcome';
$route['(:any)'] = 'welcome/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
