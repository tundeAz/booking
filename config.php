<?php
session_start();

ini_set('display_errors','On');
error_reporting(E_ALL);

//database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'booking';
date_default_timezone_set("Europe/London");

require_once 'connect.php';

