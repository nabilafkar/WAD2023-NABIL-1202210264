<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi

    // a. Ambil nilai input email
    $email = $_POST['email'];
    // b. Ambil nilai input name
    $name = $_POST['name'];
    // c. Ambil nilai input username
    $username = $_POST['username'];
    // d. Ambil nilai input password
    $password = $_POST['password'];
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()
    $password = password_hash($password, PASSWORD_BCRYPT);

//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$query1 = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query1);
//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
if(mysqli_num_rows($result) == 0) {
    $query2 = "INSERT INTO `users`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
    $insert = mysqli_query($conn, $query2);

    if($insert){
        $_SESSION['message'] = 'Pendaftaran sukses, silahkan login kembali';
        $_SESSION['color'] = 'success';
        header('Location: ../views/login.php');
    }else{
        $_SESSION['message'] = 'Maaf, Pendaftaran gagal';
    }
}else{
    $_SESSION['message'] = 'Email sudah terdaftar silahkan coba lagi!';
    header('Location: ../views/register.php');
}

    // a. Buatlah query untuk melakukan insert data ke dalam database

    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
    
// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar

//

?>