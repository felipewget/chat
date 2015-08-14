<?php

	Class Database {
	
		public function conect()
		{
					
			$user = 'root';
			$pass = '';
			$db = 'portal';
			
			$conn =  mysqli_connect('localhost', $user, $pass, $db) or die('die');
			mysqli_query($conn, "SET NAMES utf8");
			return $conn;
				
		}
		
	}

?>