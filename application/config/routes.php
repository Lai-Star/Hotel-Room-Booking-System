<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login";
$route['404_override'] = 'error';


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';

$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";


$route['floorsListing'] = 'floors/floorsListing';
$route['floorsListing/(:num)'] = "floors/floorsListing/$1";
$route['addNewFloor'] = "floors/addNewFloor";
$route['addedNewFloor'] = "floors/addedNewFloor";
$route['editOldFloor'] = "floors/editOldFloor";
$route['editOldFloor/(:num)'] = "floors/editOldFloor/$1";
$route['updateOldFloor'] = "floors/updateOldFloor";
$route['deleteFloors'] = "floors/deleteFloors";

$route['roomSizesListing'] = 'roomSizes/roomSizesListing';
$route['roomSizesListing/(:num)'] = "roomSizes/roomSizesListing/$1";
$route['addNewRoomSize'] = "roomSizes/addNewRoomSize";
$route['addedNewRoomSize'] = "roomSizes/addedNewRoomSize";
$route['editOldRoomSize'] = "roomSizes/editOldRoomSize";
$route['editOldRoomSize/(:num)'] = "roomSizes/editOldRoomSize/$1";
$route['updateOldRoomSize'] = "roomSizes/updateOldRoomSize";
$route['deleteRoomSize'] = "roomSizes/deleteRoomSize";

$route['roomListing'] = 'rooms/roomListing';
$route['roomListing/(:num)'] = "rooms/roomListing/$1";
$route['addNewRoom'] = "rooms/addNewRoom";
$route['addedNewRoom'] = "rooms/addedNewRoom";
$route['editOldRoom'] = "rooms/editOldRoom";
$route['editOldRoom/(:num)'] = "rooms/editOldRoom/$1";
$route['updateOldRoom'] = "rooms/updateOldRoom";
$route['deleteRoom'] = "rooms/deleteRoom";

$route['baseFareListing'] = 'baseFare/baseFareListing';
$route['baseFareListing/(:num)'] = "baseFare/baseFareListing/$1";
$route['addNewBaseFare'] = "baseFare/addNewBaseFare";
$route['addedNewBaseFare'] = "baseFare/addedNewBaseFare";
$route['editOldBaseFare'] = "baseFare/editOldBaseFare";
$route['editOldBaseFare/(:num)'] = "baseFare/editOldBaseFare/$1";
$route['updateOldBaseFare'] = "baseFare/updateOldBaseFare";
$route['deleteBaseFare'] = "baseFare/deleteBaseFare";

/******* Forget Password Routes ***********/
$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";


$route['customerListing'] = 'customer/customerListing';
$route['customerListing/(:num)'] = "customer/customerListing/$1";
$route['addNewCustomer'] = "customer/addNewCustomer";
$route['addedNewCustomer'] = "customer/addedNewCustomer";
$route['editOldCustomer'] = "customer/editOldCustomer";
$route['editOldCustomer/(:num)'] = "customer/editOldCustomer/$1";
$route['updateOldCustomer'] = "customer/updateOldCustomer";
$route['deleteCustomer'] = "customer/deleteCustomer";

/* End of file routes.php */
/* Location: ./application/config/routes.php */