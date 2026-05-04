<?php
$conn = mysqli_connect("localhost", "root", "", "db_companyprofile");

// Check koneksi apabila gagal maka muncul pesan di bawah ini
if (mysqli_connect_error()) {
    echo "koneksi database gagal ; " . mysqli_connect_error();
}
?>