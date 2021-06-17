<?php
	
	    $server = "localhost";
	    $user = "root";
	    $pass = "root";
	    $db = "ws";
	
	    $kon = mysqli_connect($server, $user, $pass, $db);
	    if (!$kon) {
	        die("gagal!"); 
	    } 
	
	?>
