<?php

 $nik = $_POST['nik'];
 $nama= $_POST['nama'];

 $database = new PDO("mysql:host=localhost;dbname=tbregister",'root','');
 $query = $database->query("insert into tbregister values('','$nik','$namalengkap')");

 if($query){
    header("Location:registerrr.php");
 }