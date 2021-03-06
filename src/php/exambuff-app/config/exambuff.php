<?php
/* Note - all locations relative to index.php
 * 
 * 
/*
/*
 * Service config items
 */
$config['subjects'] = array(''=>'Please select...','Humanities'=>'Humanities','Social Sciences'=>'Social Sciences','Business'=>'Business','Literature'=>'Literature','Languages'=>'Languages','Media'=>'Media','Law'=>'Law','Education'=>'Education','Science'=>'Science','Maths'=>'Maths','Computer Science'=>'Computer Science','Engineering'=>'Engineering');
/*
|--------------------------------------------------------------------------
| File upload options
|--------------------------------------------------------------------------
|
| Settings for tmp and file upload directories
|
*/
$config['upload_technique'] = 'local';
/*
|--------------------------------------------------------------------------
| Facebook
|--------------------------------------------------------------------------
|
| Settings for Facebook
|
*/
$config['fbApi'] = '';
$config['fbSecret'] = '';
$config['fbGenerate'] = true;
/*
|--------------------------------------------------------------------------
| Paypal
|--------------------------------------------------------------------------
|
| Settings for Paypal
|
*/
$config['pp_sand_user'] =  '';
$config['pp_sand_pass'] = '';
$config['pp_sand_sig'] = '';

$config['pp_live_user'] = '';
$config['pp_live_pass'] = '';
$config['pp_live_sig'] = '';
/*
|--------------------------------------------------------------------------
| Versionable files
|--------------------------------------------------------------------------
| 
| Files which will frequently be updated, and that are used widely, should be referred to here so when they are
| updated only this value need be changed
*/
// Javascript 
// autoloaded by html_head - call jQuery & plugins first, before js that relies on them
$config['autoload_js'][] = 'jquery-1.2.6';
$config['autoload_js'][] = 'jquery-ui-personalized-1.6rc2.min';
$config['autoload_js'][] = 'eb_ui';
$config['autoload_js'][] = 'jquery.intercept-min';

$config['js_version'] = '1.0';
$config['cssVer'] = '1.43';
// Flex
$config['viewer'] = 'flex/viewer-1.1';
$config['marker'] = 'flex/marker-1.1';
$config['demo'] = 'flex/demo-1.2';
$config['assess'] = 'flex/assess-1.2';
// CSS



/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
|
| Settings for database
|
*/
$config['default_database'] = 'local';
/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
| Settings for site pages - order is from right, as floated right (as of 28 nov 08)
|
*/
// public tabs
//account tabs should be furthest right - eye catching
$config['site_pages']['sign up/login'] = 'signup';

$config['site_pages']['jobs'] =  'jobs';
$config['site_pages']['faq'] =  'info/faq';
$config['site_pages']['our tutors'] =  'info/tutors';
//$config['site_pages']['demo'] =  'demo';


//home should be furthest left
$config['site_pages']['home'] = "";
// customer tabs

$config['user_pages']['my account'] = 'user';
$config['user_pages']['support'] = 'user/support';
$config['user_pages']['logout'] = 'logout';
$config['user_pages']['upload'] = 'user/upload';
$config['user_pages']['view feedback'] = 'user/feedback';
$config['user_pages']['home'] = "";
// marker pages

$config['marker_pages']['my account'] = 'marker';
$config['marker_pages']['support'] = 'marker/support';
$config['marker_pages']['logout'] = 'marker/login/logout';
$config['marker_pages']['mark'] = 'marker/mark';
$config['marker_pages']['get paid'] = 'marker/getpaid';
$config['marker_pages']['home'] = "";
// footer pages
$config['footer_pages']['privacy'] = 'policies/privacy';
$config['footer_pages']['refunds'] = 'policies/refunds';
// End of file exambuff.php
