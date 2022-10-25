
<?php
require 'functions.php';

if( isset($_POST["REGISTER"])) {

    if(contact($_POST) > 0 ) {
        echo "<script>
        alert('user baru berhasil ditambahkan!');
        </script>";

    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <title>SURYA</title>
</head>
<body>
    <header>
        <hr>
        <!-- Navbar -->
        <nav>
            <span id="for_respo">
                <img src="../img/logoskensa.png" alt="logoskensa">
            </span>
            <a class="navlink" href="index.html">Home </a> 
            <a class="navlink" href="../pdf/GEDE_SURYANTARA_05_XI_RPL3.pdf">Dwonload CV </a> 
            <a class="navlink" href="contact.html">Contact </a> 
            <a class="navlink" href="about.html">About Me </a> 
        </nav>
        <hr>
    </header>
    <main id="main_con">
        <article>
            <h1>CONTACT ME</h1>
            <h2>Email</h2>
            <form action="proses.php" action="post">
                <ol>
                    <li>
                        <input type="email" placeholder="Email" name="user_email">
                    </li>
                    <h2>Pesan</h2>
                    <li>
                        <textarea  type="p" name="" id="" cols="55" rows="5" placeholder="" name="user_pesan">
                        </textarea>
                    </li>
                    <li>
                        <input type="button" value="save" width="100px"  id="input">
                    </li>
                </ol>                
            </form>
        </article>
    </main>
    <!-- footer -->
    <span id="for_footer">
        <footer>
            <h4>&copy; GEDE SURYANTARA 2006-2022</h4>
        </footer>
    </span>
</body>
</html>
