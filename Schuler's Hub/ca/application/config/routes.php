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
 
/* CaTasks */
$route['hello-admin/ca-tasks'] = 'CaTask/catasks';
$route['hello-admin/ca-tasks/add-new-ca-task'] = 'CaTask/add_catasks';
$route['hello-admin/ca-tasks/add-new-ca-task/submit'] = 'CaTask/ca_task_submit';
$route['hello-admin/ca-tasks/edit-ca-tasks/(:num)'] = 'CaTask/edit_ca_task/$1';
$route['hello-admin/ca-tasks/update-ca-task/update'] = 'CaTask/ca_task_update';
$route['hello-admin/ca-tasks/delete/(:num)'] = 'Courses/delete_ca_tasks/$1'; 

$route['hello-admin/task-submissions'] = 'CaTask/submissions';

/* New admin features added(take action, resources)*/
$route['hello-admin/admintakeaction'] = 'admintakeaction/admin_takeaction';
$route['hello-admin/adminresources'] = 'adminresources/admin_resources';


/* Campus ambassadors */

$route['login/apply-login-credentials'] = 'auth/post_login_user';
$route['login'] = 'welcome/login';
$route['ca-tasks'] =  'CaTask/ambassodor_tasks';
$route['submit-report'] = 'CaTask/submit_report';
$route['submit-report/submit'] = 'CaTask/task_submit_report';

$route['cadashboard'] = 'cadashboard/ca_dashboard';
$route['catakeaction'] = 'catakeaction/ca_takeaction';
$route['camyaction'] = 'camyaction/ca_myaction';
$route['caresources'] = 'caresources/ca_resources';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
