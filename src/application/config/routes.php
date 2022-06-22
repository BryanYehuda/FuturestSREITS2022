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

// HOME
$route['default_controller'] = 'home/registerGrandTalkshowEvent';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'home/index';
$route['details'] = 'home/details';
$route['events'] = 'home/events';
$route['contact'] = 'home/contact';
$route['choose-event'] = 'home/chooseEvent';
$route['login'] = 'home/login';
$route['logout'] = 'auth/logout';
$route['finish-register'] = 'home/finishregist';

//Dashboard Grand Talkshow
$route['dashboard-grand-talkshow'] = "grand_talkshow";
$route['dashboard-grand-talkshow-list'] = "grand_talkshow/list";

//Dashboard RE 101
$route['dashboard-re-101'] = "re_101";
$route['dashboard-re-101-list'] = "re_101/list";

//Dashboard Final Talkshow
$route['dashboard-final-talkshow'] = "final_talkshow";
$route['dashboard-final-talkshow-list'] = "final_talkshow/list";

//Dashboard Climate Change Community
$route['dashboard-climate-change-community'] = "climate_change_community";
$route['dashboard-climate-change-community-list'] = "climate_change_community/list";

//Dashboard Awarding Night
$route['dashboard-awarding-night'] = "awarding_night";
$route['dashboard-awarding-night-list'] = "awarding_night/list";

//Dashboard National Essay
$route['dashboard-national-essay'] = "national_essay";
$route['dashboard-national-essay-list'] = "national_essay/list";
$route['dashboard-national-essay-confirmation'] = "national_essay/confirmation";
$route['dashboard-national-essay-payment'] = "national_essay/payment";
$route['dashboard-national-essay-submission'] = "national_essay/esai";

//Dashboard RE Innovation
$route['dashboard-re-innovation'] = "re_innovation";
$route['dashboard-re-innovation-list'] = "re_innovation/list";
$route['dashboard-re-innovation-confirmation'] = "re_innovation/confirmation";
$route['dashboard-re-innovation-payment'] = "re_innovation/payment";
$route['dashboard-re-innovation-abstract'] = "re_innovation/abstract";
$route['dashboard-re-innovation-fullpaper'] = "re_innovation/fullpaper";
$route['dashboard-re-innovation-powerpoint'] = "re_innovation/ppt";

// Events
$route['grand-talkshow'] = 'home/grand_talkshow';
$route['climate-change-community'] = 'home/climate_change_community';
$route['awarding-night'] = 'home/awarding_night';
$route['final-talkshow'] = 'home/final_talkshow';
$route['re-101'] = "home/re_101";

// Competitions
$route['essay'] = 'home/essay';
$route['re-innovation'] = 'home/re_innovation';

// Registration
$route['register-essay-comp-individual'] = "home/registerEssayCompIndividu";
$route['register-essay-comp-team'] = "home/registerEssayCompTeam";
$route['register-re-innovation-comp'] = "home/registerReInnovationComp";
$route['register-grand-talkshow-event'] = "home/registerGrandTalkshowEvent";
$route['register-re-101-event'] = "home/registerRE101Event";
$route['register-final-talkshow-event'] = "home/registerFinalTalkshowEvent";
$route['register-climate-change-event'] = "home/registerClimateChangeEvent";
