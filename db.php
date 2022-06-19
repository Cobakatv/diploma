<?php
require "libs/rb.php";
header("Location: 404");

R::setup('mysql:host=localhost;dbname=elwau', 'root', 'root');


ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);
session_start();


function showError($errors){
	return array_shift($errors);
}
?>