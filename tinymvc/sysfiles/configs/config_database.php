<?php

/**
 * database.php
 *
 * application database configuration
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

//database connectie localhost ubuntu

$config['default']['dbactive'] = true; // uses db connection
$config['default']['plugin'] = 'TinyMVC_PDO'; // plugin for db access
$config['default']['type'] = 'mysql';      // connection type
$config['default']['host'] = 'localhost';  // db hostname
$config['default']['name'] = 'deopvoedingswinkel';     // db name
$config['default']['user'] = 'personel';     // db username
$config['default']['pass'] = '';     // db password
$config['default']['persistent'] = true;  // db connection persistence?

/*
//database connectie local host windows

$config['default']['dbactive'] = true; // uses db connection
$config['default']['plugin'] = 'TinyMVC_PDO'; // plugin for db access
$config['default']['type'] = 'mysql';      // connection type
$config['default']['host'] = 'localhost';  // db hostname
$config['default']['name'] = 'deopvoedingswinkel';     // db name
$config['default']['user'] = 'root';     // db username
$config['default']['pass'] = '';     // db password
$config['default']['persistent'] = true;  // db connection persistenc
 */


/*
//// database config file edu web 

$config['default']['dbactive'] = true; // uses db connection
$config['default']['plugin'] = 'TinyMVC_PDO'; // plugin for db access
$config['default']['type'] = 'mysql';      // connection type
$config['default']['host'] = 'mysql.hasselt.be';  // db hostname
$config['default']['name'] = 'eduweb';     // db name
$config['default']['user'] = 'khlim';     // db username
$config['default']['pass'] = 'Kh3du2003';     // db password
$config['default']['persistent'] = true;  // db connection persistence?
 * 
 */


?>