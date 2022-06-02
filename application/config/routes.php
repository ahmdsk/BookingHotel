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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// home page
$route['rooms'] = 'home/rooms';
$route['room/detail/(:any)'] = 'home/room_detail/$1';
$route['about'] = 'home/about';
$route['contact'] = 'home/contact';

$route['room'] = 'home/room';
$route['room/booking/(:any)'] = 'home/room_booking/$1';
$route['room/booking_success/(:any)'] = 'home/booking_success/$1';
$route['room/booking_rate/(:any)'] = 'home/booking_rate/$1';

// bukti pemesanan
$route['room/bukti_pesanan/(:any)'] = 'home/bukti/$1';

// role admin
$route['admin'] = 'Admin/Dashboard';

// kelola user
$route['admin/kelola_user'] = 'Admin/Kelola_User';
$route['admin/kelola_user/add'] = 'Admin/Kelola_User/add';
$route['admin/kelola_user/(:any)'] = 'Admin/Kelola_User/$1';
$route['admin/kelola_user/edit/(:any)'] = 'Admin/Kelola_User/edit/$1';
$route['admin/kelola_user/update/(:any)'] = 'Admin/Kelola_User/update/$1';
$route['admin/kelola_user/delete/(:any)'] = 'Admin/Kelola_User/delete/$1';

// kelola hotel
$route['admin/kelola_kamar'] = 'Admin/Kelola_Kamar';
$route['admin/kelola_kamar/add'] = 'Admin/Kelola_Kamar/add';
$route['admin/kelola_kamar/(:any)'] = 'Admin/Kelola_Kamar/$1';
$route['admin/kelola_kamar/edit/(:any)'] = 'Admin/Kelola_Kamar/edit/$1';
$route['admin/kelola_kamar/update/(:any)'] = 'Admin/Kelola_Kamar/update/$1';
$route['admin/kelola_kamar/delete/(:any)'] = 'Admin/Kelola_Kamar/delete/$1';

// Tipe kamar
$route['admin/tipe_kamar'] = 'Admin/Tipe_Kamar';
$route['admin/tipe_kamar/add'] = 'Admin/Tipe_Kamar/add';
// $route['admin/tipe_kamar/fasilitas/(:any)'] = 'Admin/Tipe_Kamar/fasilitas/$1';
$route['admin/tipe_kamar/edit/(:any)'] = 'Admin/Tipe_Kamar/edit/$1';
$route['admin/tipe_kamar/delete/(:any)'] = 'Admin/Tipe_Kamar/delete/$1';

// Fasilitas Kamar
$route['admin/fasilitas'] = 'Admin/Fasilitas_Kamar';
$route['admin/fasilitas/add'] = 'Admin/Fasilitas_Kamar/add';
$route['admin/fasilitas/edit/(:any)'] = 'Admin/Fasilitas_Kamar/edit/$1';
$route['admin/fasilitas/delete/(:any)'] = 'Admin/Fasilitas_Kamar/delete/$1';

// instansi hotel
$route['admin/instansi'] = 'Admin/Instansi';
$route['admin/instansi/edit/(:any)'] = 'Admin/Instansi/edit/$1';

// Fasilitas Kamar
$route['admin/gallery'] = 'Admin/Gallery';
$route['admin/gallery/add'] = 'Admin/Gallery/add';
$route['admin/gallery/edit/(:any)'] = 'Admin/Gallery/edit/$1';
$route['admin/gallery/delete/(:any)'] = 'Admin/Gallery/delete/$1';

// masukan pengguna
$route['admin/masukan'] = 'Admin/Masukan';
$route['admin/masukan/add'] = 'Admin/Masukan/add';
$route['admin/masukan/delete/(:any)'] = 'Admin/Masukan/delete/$1';

// =================================================================================

//  Role Resepsionis
$route['resepsionis'] = 'Resepsionis/Dashboard';

// Management tamu
$route['resepsionis/tamu'] = 'Resepsionis/Tamu';
$route['resepsionis/tamu/delete/(:any)'] = 'Resepsionis/Tamu/delete/$1';

// kelola hotel
$route['resepsionis/kelola_kamar'] = 'Admin/Kelola_Kamar';
$route['resepsionis/kelola_kamar/add'] = 'Admin/Kelola_Kamar/add';
$route['resepsionis/kelola_kamar/(:any)'] = 'Admin/Kelola_Kamar/$1';
$route['resepsionis/kelola_kamar/edit/(:any)'] = 'Admin/Kelola_Kamar/edit/$1';
$route['resepsionis/kelola_kamar/update/(:any)'] = 'Admin/Kelola_Kamar/update/$1';
$route['resepsionis/kelola_kamar/delete/(:any)'] = 'Admin/Kelola_Kamar/delete/$1';

// Tipe kamar
$route['resepsionis/tipe_kamar'] = 'Admin/Tipe_Kamar';
$route['resepsionis/tipe_kamar/add'] = 'Admin/Tipe_Kamar/add';
// $route['resepsionis/tipe_kamar/fasilitas/(:any)'] = 'Admin/Tipe_Kamar/fasilitas/$1';
$route['resepsionis/tipe_kamar/edit/(:any)'] = 'Admin/Tipe_Kamar/edit/$1';
$route['resepsionis/tipe_kamar/delete/(:any)'] = 'Admin/Tipe_Kamar/delete/$1';

// Reservasi
$route['resepsionis/pemesanan'] = 'Resepsionis/Pemesanan';
$route['resepsionis/pemesanan/edit/(:any)'] = 'Resepsionis/Pemesanan/edit/$1';
$route['resepsionis/pemesanan/delete/(:any)'] = 'Resepsionis/Pemesanan/delete/$1';
$route['resepsionis/rating'] = 'Resepsionis/Pemesanan/rating';
$route['resepsionis/rating/hapus/(:any)'] = 'Resepsionis/Pemesanan/delete_rating/$1';

// masukan pengguna
$route['resepsionis/masukan'] = 'Admin/Masukan';
$route['resepsionis/masukan/add'] = 'Admin/Masukan/add';
$route['resepsionis/masukan/delete/(:any)'] = 'Admin/Masukan/delete/$1';