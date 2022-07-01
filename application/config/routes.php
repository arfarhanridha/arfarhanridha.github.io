<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['halaman_klient'] = 'Klient/index';
$route['daftar_klient'] = 'Klient/daftar';
$route['edit_klient'] = 'Klient/edit_data';
$route['detail_login_klient'] = 'Klient/detail_login_klient';
$route['profil_klient'] = 'Klient/data_diri';
$route['list_konsultan'] = 'Klient/data_konsultan';
$route['data_konsultan/(:any)'] = 'Klient/detail_data_konsultan/$1';







$route['login'] = 'Auth/index';
$route['regis'] = 'Auth/regis';
$route['daftar'] = 'Auth/daftar';


$route['halaman_konsultan'] = 'Konsultan/index';
$route['daftar_konsultan'] = 'Konsultan/daftar';
$route['edit_konsultan'] = 'Konsultan/edit_profil';
$route['detail_login_konsultan'] = 'Konsultan/detail_login';
$route['profil_konsultan'] = 'Konsultan/data_diri';
$route['jadwal_konsultan'] = 'Konsultan/j_konsul';



$route['halaman_adm'] = 'Adm/index';

$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
