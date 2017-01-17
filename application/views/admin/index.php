<?php
error_reporting(0);
session_start();
require 'config/dbconfig.inc.php';
require 'config/session.inc.php';
require 'library/Controller.php';
require 'lang/de/de.php';
$controller = new Controller();
$controller->run();