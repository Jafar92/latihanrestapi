<?php
	
	function key() {
	    return ["345", "key", "keyy"];
	}
	
	function validasi($input) {
	    $apikey = $input["api_key"];
	    if (in_array($apikey, key())) {
	        return true;
	    } else {
	        return false;
	    } 
	}
	
	function jsonOut($status, $message, $data) {
	    $respon = ["status" => $status, "message" => $message, "data" => $data];
	
	    header("Content-type: application/json");
	    echo json_encode($respon);
	}
	
	function film() {
	    $film = [
	        ["title" => "MOTOGP", "rosi" => "qualification"],
	        ["title" => "MOTOGP2", "rosi" => "race"]
	    ];
	    return $film;
	}
	
	if (validasi($_GET)) {
	    jsonOut("success", "apikey valid!", film());
	} else {
	    jsonOut("failed", "apikey tidak valid!", null);
	}
	
	?>
