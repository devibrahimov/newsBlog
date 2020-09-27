<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Site';
$route['404_override'] = 'site/error404';

$route['haqqimizda'] = 'site/about';
$route['elaqe'] = 'site/contact';
$route['chipabunelik'] = 'site/chipabune';
$route['abuneol'] = 'Site_request/subscribeChip';
$route['404.php'] = 'site/error404';


$route['qeydiyyat'] = 'Site_request/signup';
$route['girish'] = 'Site_request/login';
$route['cixis'] = 'Site_request/logout';



$route['sitemap.xml'] = 'Sitemap';

$route['robots.txt'] = 'Sitemap/robots';

$route['chipxeber/(:any)'] = 'site/newsdetail/$1';
$route['category/(:any)'] = 'site/newscategory/$1';
//$route['news/(:any)/(:any)'] = 'site/newsdetail/$2';
$route['translate_uri_dashes'] = FALSE;
