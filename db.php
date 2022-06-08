<?php
require "libs/rb-mysql.php";

R::setup('mysql:host=localhost;dbname=elwau', 'root', 'root');

function showError($errors){
	return array_shift($errors);
}
?>