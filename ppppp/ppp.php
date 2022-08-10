<?php
//koneksi
$db = new PDO("mysql:host=localhost;dbname=ppdb","root","");
//query
$query = $db->query("UPDATE `calon_siswa` SET `nama` ='ibnu' WHERE `id` = 1");