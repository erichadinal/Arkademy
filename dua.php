<?php

	function is_username_valid($username){
		if (!preg_match('/^[a-z]{5,9}$/', $username)){
			return "false";
		}
		else {
			return "true";# code...
		}
	}

	function is_password_valid($password){
		if (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$/', $password)){
			return "false";
		}
		else {
			return "true";# code...
		}
	}
	echo is_username_valid("erich");
	echo is_password_valid("Erich!123");
?>