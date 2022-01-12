<?php
/**
* Your Mission , should you choose to accept it, is to configure your website.
*/

define('site_title', 'Raptor Jackpot');


define('web_root', 'C:\xampp\htdocs');


/**
* Database Details.
*/

define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'raptorjackpot');
define('MYSQL_USERNAME', 'root');
define('MYSQL_PASSWORD', 'root');

define("show_admin_link", true);


define("admin_username", "admin");
define("admin_password", "password");

define("DEBUG", 1);
define("LOG_FILE", "yourlogs.log");


const pp_config = array(
    'business'              => "youremail@gmail.com",
	'no_note'               => 1,
	'cmd'                   => "_cart",
    'upload'                => 1,
	'address_override'      => 1,
	'return'                => "https://your-website.com",
    'cancel_return'         => "https://your-website.com",
	'notify_url'            => "https://your-website.com/admin",
	'cpp_heaper_image'      => "https://your-website.com/logo.png",

);