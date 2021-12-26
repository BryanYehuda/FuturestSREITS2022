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

// HOME
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['details'] = 'home/details';
$route['events'] = 'home/events';
$route['contact'] = 'home/contact';
$route['login'] = 'home/login';
$route['logout'] = 'auth/logout';

// Competitions
$route['essay'] = 'home/essay';
$route['re-innovation'] = 'home/re_innovation';

// Events
$route['grand-talkshow'] = 'home/grand_talkshow';
$route['climate-change-community'] = 'home/climate_change_community';
$route['awarding-night'] = 'home/awarding_night';
$route['final-talkshow'] = 'home/final_talkshow';
$route['re-101'] = "home/re_101";

// Registration
$route['register-essay-comp-individual'] = "home/registerEssayCompIndividu";
$route['register-essay-comp-team'] = "home/registerEssayCompTeam";
$route['register-re-innovation-comp'] = "home/registerReInnovationComp";
$route['register-grand-talkshow-event'] = "home/registerGrandTalkshowEvent";
$route['register-re-101-event'] = "home/registerRE101Event";
$route['register-final-talkshow-event'] = "home/registerFinalTalkshowEvent";
$route['register-climate-change-event'] = "home/registerClimateChangeEvent";
