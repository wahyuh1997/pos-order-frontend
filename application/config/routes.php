<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller']    = 'dashboard';
$route['404_override']          = 'login/not_found';
$route['translate_uri_dashes']  = FALSE;

// LOGIN PART
$route['login-enterprise']  = "login/login_enterprise";
$route['login-user']        = "login/login_user";
$route['logout']            = "login/logout";

// module routes Master Data

/* Menu */
$route['master-data/menu']            = "master_data/menu";
$route['master-data/menu/add']        = "master_data/menu/add";
$route['master-data/menu/edit/(:any)']  = "master_data/menu/edit/$1";

/* Menu Categories */
$route['master-data/menu-categories']                       = "master_data/menu_categories";
$route['master-data/menu-categories/add']                   = "master_data/menu_categories/add";
$route['master-data/menu-categories/dtb-serverside']        = "master_data/menu_categories/dtb_serverside";

/* Menu Attributes */
$route['master-data/menu-attributes']                       = "master_data/menu_attributes";
$route['master-data/menu-attributes/add']                   = "master_data/menu_attributes/add";
$route['master-data/menu-attributes/edit/(:num)']           = "master_data/menu_attributes/edit/$1";
$route['master-data/menu-attributes/set-addon/(:num)']      = "master_data/menu_attributes/set_addon/$1";

/* Menu Ingredients */
$route['master-data/menu-ingredients']           = "master_data/menu_ingredients";
$route['master-data/menu-ingredients/add']       = "master_data/menu_ingredients/add";
$route['master-data/menu-ingredients/bulk']      = "master_data/menu_ingredients/bulk_add";
$route['master-data/menu-ingredients/edit/(:num)'] = "master_data/menu_ingredients/edit/$1";

/* Menu Location */
$route['manage/location']             = "location_management/location";
$route['manage/location/add']         = "location_management/location/add";
$route['manage/location/edit/(:num)'] = "location_management/location/edit/$1";

/* Menu Tables */
$route['manage/tables']             = "location_management/tables";
$route['manage/tables/add']         = "location_management/tables/add";
$route['manage/tables/edit/(:num)'] = "location_management/tables/edit/$1";

/* POS Kitchen Order */
$route['pos-kitchen-order']       = "pos_kitchen_order";

/* Table Booking */
$route['table-booking']       = "table_booking";

/* Settings */
// printer
$route['settings/printer']              = "SettingControllers/printer";
$route['settings/printer/add']          = "SettingControllers/printer/add";
$route['settings/printer/edit/(:num)']  = "SettingControllers/printer/edit/$1";

// page 
$route['terms-and-regulation']  = "companyinfo/terms_regulation";
$route['about']          = "companyinfo/about";
