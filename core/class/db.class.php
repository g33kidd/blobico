<?php

	class db {
		
		public static function db_connection($host, $name, $user, $pass) {
			$db = new PDO("mysql:host=" . $host . ";dbname=" . $name, $user, $pass); 
		}
		
		
		
	}

?>