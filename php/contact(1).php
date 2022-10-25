<?php

// untuk mengoneksi data base
require 'koneksi.php';
// untuk mengatur fungsi
require 'function.php';
if( isset($_POST["submit"])) {
   //validator
   if ( send($_POST) > 0){
       echo "
       <script>
       alert('Pesan Berhasil Terkirim !');
       document.location.href = 'index.html';
       </script>
       ";
   }
   else {
       echo "<script>alert('Pesan Gagal Terkirim !');</script>";
       echo "<br>";
       echo mysqli_error($conn);
   }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="32.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar">
    <br>
    <a href="index.html">Home</a>
    <a href="/CURRICULUM VITAE.pdf">Download CV</a>
    <a href="#Contact.php">Contact</a>  
    <a href="aboutme.html">About Me</a>
</nav>
<form action="" method="post">
<ol>
    <li>
        <label for="email"> <h2>Email</h2> </label>
        <input type="email" placeholder="Email" name="email" id="email">
    </li>
    <li>
        <label for="pesan"><h2>Pesan</h2></label>
        <textarea  type="p" cols="55" rows="5" name="pesan" id="pesan">
        </textarea>
    </li>
    <li>
        <label for="submit"></label>
        <button name="submit"><h3>Submit !</h3></button>
    </li>
</ol>
</form>
</body>
</html>
