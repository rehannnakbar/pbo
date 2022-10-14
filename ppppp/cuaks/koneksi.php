<?php

    $koneksi = mysqli_connect("localhost","root","","tbregister");

    if(mysqli_connect($koneksi))
    {
        echo "koneksi gagal". mysqli_connect_error();
    }
    ?>