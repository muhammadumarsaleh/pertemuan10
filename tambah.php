<?php
require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }


}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method ="post">
    <ul>
        <li>
            <label for="nrp">NRP :</label>
            <input type="text" name="nrp" id="nrp">
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
        </li>

        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
    </form>

</body>
</html> 







































/*
<?php

// // Jika ingin terhubung kedatabase maka koneksikan dulu
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");


// // cek apakah tombol submit sudah ditekan atau belum
// if( isset($_POST["submit"]) ) {
//     // ambil data dari tiap elemen data form
//     $nrp = $_POST["nrp"];
//     $nama = $_POST["nama"];
//     $email = $_POST["email"];
//     $jurusan = $_POST["jurusan"];
//     $gambar = $_POST["gambar"];

    // // query insert data
    // $query = "INSERT INTO mahasiswa
    //             VALUES
    //         ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')

    // ";
    // mysqli_query($conn, $query);

    // // cek apakah data berhasil ditambahkan atau tidak
    // // var_dump(mysqli_affected_rows($conn));

    // if(mysqli_affected_rows($conn) > 0 ) {
    //     echo "berhasil";
    // }else {
    //     echo "Gagal!";
    //     echo "<br>";
    //     echo mysqli_error($conn);

//     }


// }

// ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method ="post">
    <ul>
        <li>
            <label for="nrp">NRP :</label>
            <input type="text" name="nrp" id="nrp">
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
        </li>

        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>


    </form>

</body>
</html> 
*/