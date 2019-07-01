<?php
    include('koneksi.php'); //call koneksi.php file
 if(isset($_GET(['tinggi_air'])) //check wether "tinggi_air" elemen exist
 {
	 $sensor = $_GET['tinggi_air']; //take data from db, store it to a variable
 }
    $sensor = $_GET['tinggi_air'];
 
    $sql = "INSERT INTO tbl_water (tinggi_air) VALUES (:tinggi_air)"; //insert data to db
 
    $stmt = $PDO->prepare($sql); //begin bindparam protocol
 
    $stmt->bindParam(':tinggi_air', $sensor);
 
    if($stmt->execute()) { //check wether bindparam() protocol is succesful or not
        echo "sukses gaes"; 
    }else{
        echo "gagal gaes";
    }
?>
 
