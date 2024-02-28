<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['hello-admin'] = 'Mainadmin';
/* Admin */


$route['hello-admin/states'] = 'Mainadmin/states/$1';
$route['hello-admin/cities'] = 'Mainadmin/cities/$1';
$route['hello-admin/login'] = 'auth';;
$route['hello-admin/login/apply-login-credentials'] = 'auth/post_login';

/* Colleges */ 

$route['hello-admin/colleges'] = 'Colleges/colleges';
$route['hello-admin/colleges/submit'] = 'Colleges/colleges_add';
$route['hello-admin/colleges/edit/(:num)'] = 'Colleges/colleges/$1';
$route['hello-admin/colleges/update'] = 'Colleges/colleges_update';
$route['hello-admin/colleges/delete/(:num)'] = 'Colleges/colleges_delete/$1';

/* courses */
$route['hello-admin/courses'] = 'Courses/courses';
$route['hello-admin/courses/submit'] = 'Courses/courses_add';
$route['hello-admin/courses/edit/(:num)'] = 'Courses/courses/$1';
$route['hello-admin/courses/update'] = 'Courses/courses_update';
$route['hello-admin/courses/delete/(:num)'] = 'Courses/courses_delete/$1';

/* CampusAmbassodor */

$route['hello-admin/campus-ambasadors'] = 'CampusAmbassodor/campus_ambasadors';
$route['hello-admin/campus-ambasadors/add-new-campus-ambasadors'] = 'CampusAmbassodor/add_campus_ambasadors';
$route['hello-admin/campus-ambasadors/add-new-campus-ambasadors/submit'] = 'CampusAmbassodor/campus_ambasadors_submit';
$route['hello-admin/campus-ambasadors/edit-campus-ambasadors/(:num)'] = 'CampusAmbassodor/edit_campus_ambasadors/$1';
$route['hello-admin/campus-ambasadors/update-campus-ambasadors/update'] = 'CampusAmbassodor/update_campus_ambasadors';
$route['hello-admin/campus-ambasadors/delete/(:num)'] = 'CampusAmbassodor/delete_campus_ambasadors/$1'; 
$route['update-campus-ambasadors'] = 'CampusAmbassodor/update_campusambasadors'; 
$route['update-campus-ambasadors-password'] = 'CampusAmbassodor/update_password'; 

/* CountryAmbassador */
$route['hello-admin/country-ambasadors'] = 'CountryAmbassodor/country_ambasadors';
$route['hello-admin/country-ambasadors/add-new-country-ambasadors'] = 'CountryAmbassodor/add_country_ambasadors';
$route['hello-admin/country-ambasadors/add-new-country-ambasadors/submit'] = 'CountryAmbassodor/country_ambasadors_submit';
$route['hello-admin/country-ambasadors/edit-country-ambasadors/(:num)'] = 'CountryAmbassodor/edit_country_ambasadors/$1';
$route['hello-admin/country-ambasadors/update-country-ambasadors/update'] = 'CountryAmbassodor/update_country_ambasadors';
$route['hello-admin/country-ambasadors/delete/(:num)'] = 'CountryAmbassodor/delete_country_ambasadors/$1'; 
$route['update-country-ambasadors'] = 'CountryAmbassodor/update_countryambasadors'; 
$route['update-country-ambasadors-password'] = 'CountryAmbassodor/update_password'; 

 
/* CaTasks */
$route['hello-admin/ca-tasks'] = 'CaTask/catasks';
$route['hello-admin/ca-tasks/add-new-ca-task'] = 'CaTask/add_catasks';
$route['hello-admin/ca-tasks/add-new-ca-task/submit'] = 'CaTask/ca_task_submit';
$route['hello-admin/ca-tasks/edit-ca-tasks/(:num)'] = 'CaTask/edit_ca_task/$1';
$route['hello-admin/ca-tasks/update-ca-task/update'] = 'CaTask/ca_task_update';
$route['hello-admin/ca-tasks/delete/(:num)'] = 'Courses/delete_ca_tasks/$1'; 

$route['hello-admin/task-submissions'] = 'CaTask/submissions';

/* CaActions */
$route['hello-admin/ca-actions'] = 'CaAction/ca_takeaction';
$route['hello-admin/ca-actions/add-new-ca-action'] = 'CaAction/add_catakeaction';
$route['hello-admin/ca-actions/add-new-ca-action/submit'] = 'CaAction/ca_takeaction_submit';
$route['hello-admin/ca-action/edit-ca-action/(:num)'] = 'CaAction/edit_ca_takeaction/$1';
$route['hello-admin/ca-actions/update-ca-action/update'] = 'CaAction/ca_takeaction_update';
$route['hello-admin/ca-actions/delete/(:num)'] = 'Courses/delete_ca_takeactions/$1'; 

$route['hello-admin/action-submissions'] = 'CaAction/actionsubmissions';


/* Campus ambassadors */

$route['login/apply-login-credentials'] = 'auth/post_login_user';
$route['login'] = 'welcome/login';
$route['dashboard'] =  'CaTask/dashboard';
$route['ca-tasks'] =  'CaTask/ambassodor_tasks';
$route['submit-report'] = 'CaTask/submit_report';
$route['submit-report/submit'] = 'CaTask/task_submit_report';

$route['cadashboard'] = 'cadashboard/ca_dashboard';
$route['catakeaction'] = 'CaTask/ca_takeaction';
$route['my-file'] = 'CaTask/my_file';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


