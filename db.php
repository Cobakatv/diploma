<?php
require "libs/rb.php";

R::setup('mysql:host=localhost;dbname=elwau_2', 'root', 'root');

function showError($errors){
	return array_shift($errors);
}
?>