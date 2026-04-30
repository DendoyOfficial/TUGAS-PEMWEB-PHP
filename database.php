<?php
$con = mysqli_connect("localhost", "root", "", "datadiri");

if (isset($_POST['submit'])) {
    $nama          = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $gender        = $_POST['gender'];
    $alamat        = $_POST['alamat'];
    $email         = $_POST['email'];
    $pesan         = $_POST['pesan'];

    $query = "INSERT INTO form (nama, tanggal_lahir, gender, alamat, email, pesan)
            VALUES ('$nama', '$tanggal_lahir', '$gender', '$alamat', '$email', '$pesan')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Data Terkirim Sempurna!')</script>";
    } else {
        echo "<script>alert('Data Gagal Terkirim Nih!')</script>";
    }

    mysqli_close($con);
}
?>