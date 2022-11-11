<?php
include('koneksi.php');
IF($_SERVER["REQUEST_METHOD"]=="POST"){
    $Username=mysqli_real_escape_string($koneksi,$_POST['Username']);
    $Password=mysqli_real_escape_string($koneksi,MD5($_POST['Password']));
    $query="SELECT * FROM user WHERE Username='$Username' AND Password='$Password'";
    $queryDB=mysqli_query($koneksi,$query);
    $Cek=mysqli_num_rows($queryDB);
    IF ($Cek>0) {
        $Getadata=mysqli_fetch_array($queryDB);
        header("Location: Welcome.php");
        }else { 
            echo "Username dan Password Salah";
    }
}