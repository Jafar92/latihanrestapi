<?php
	
	    include "koneksi.php";
	    
	    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	        $q1 = "select * from mahasiswa";
	        $q2 = mysqli_query($kon, $q1);
	        while ($data = mysqli_fetch_array($q2)) {
	            
	            $datanew[] = array(
	                'npm' => $data['npm'],
	                'nama' => $data['nama'],
	                'jurusan' => $data['jurusan']
	            );
	        }
	
	        $respon[] = array(
	            'status' => 'OK',
	            'kode' => '999',
	            'data' => $datanew
	        );
	        header("Content-type: application/json");
	        echo json_encode($respon);
	    }
?>
