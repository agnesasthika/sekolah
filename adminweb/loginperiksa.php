<?php
//koneksi ke database
include "../config/koneksi.php";
//mengambil data dari form
$username = $_POST['TxtUser'];
$password = $_POST['TxtPasswd'];
//enkripsi password dengan md5
$password_md5 = md5($password);
//cek username dan password dari database
$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$password_md5'");
$row=mysqli_fetch_array($login);
//Cek adanya username dan password di database dilanjutkan
//dengan membuat session
if ($row['username'] == $username AND $row['password'] == $password_md5)
{
session_start();
$_SESSION['username'] = $row['username'];
$_SESSION['password'] = $row['password'];
header('location:index.php');
}
else
{
echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
Username atau Password Anda tidak benar.<br>";
echo "<br>";
echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>";
}
?>