<?php
 $password = "12345"; 

if ($username == "admin") {
    if ($password == "12345") {
        echo "Login berhasil sebagai Admin";
    } else {
        echo "Password salah";
    }
} elseif ($username == "siswa") {
    if ($password == "1111") {
        echo "Login berhasil sebagai Siswa";
    } else {
        echo "Password salah";
    }
} else {
    echo "Username tidak ditemukan";
}
?>