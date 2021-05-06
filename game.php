<?php
include('cek.php');
include('config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Game Matematika</title>
  </head>
  <body style='background-color:#5f27cd;color:white'>
        <nav class="navbar">
            <div class="container">
            <a class='btn btn-md btn-primary' href='index.php'>Beranda</a>
            </div>
        </nav>
    <div class="container-fluid" style='color:white;position:absolute;left:10%;top:30%;width:80%;text-align:center'>
    <?php
    session_start();
    $hasil = $_SESSION['angka1'] + $_SESSION['angka2'];
    if($_SESSION['lives'] > 0){
        if(!isset($_POST['submit'])){
            echo "<p><h2>Hello {$_COOKIE['nama']}, tetap semangat ya...<br>You can do the best!!</h2></p>";
            echo "<p><button class='btn btn-light disabled'>lives : {$_SESSION['lives']}</button>
            <button class='btn btn-light disabled'>score : {$_SESSION['score']}</button></p>";
            
            echo "<form method='post'>";
            echo "<h3>Berapakah {$_SESSION['angka1']} + {$_SESSION['angka2']} = ";
            echo "<input type='text' class='form-control-sm' name='jawaban'></h3>";
            echo "<button type='submit' class='btn btn-primary btn-sm' name='submit'>Jawab</button>";

        } else {
            if ($hasil == intval($_POST['jawaban'])){
                echo "<p><h2>Hello {$_COOKIE['nama']}, selamat jawaban Anda benar ... </h2></p>";
                $_SESSION['score'] += 10;
                echo "<p><button class='btn btn-light disabled'>lives : {$_SESSION['lives']}</button>
                <button class='btn btn-light disabled'>score : {$_SESSION['score']}</button></p>";
                $_SESSION['angka1'] = rand(1,20);
                $_SESSION['angka2'] = rand(1,20);
                echo "<a class='btn btn-primary' href='game.php'>Soal Selanjutnya</a>";
            } else  {
                echo "<p><h2>Yahh jawaban Anda salah ... </h2></p>";
                $_SESSION['score'] -= 2;
                $_SESSION['lives'] -= 1;
                echo "<p><button class='btn btn-light disabled'>lives : {$_SESSION['lives']}</button>
                <button class='btn btn-light disabled'>score : {$_SESSION['score']}</button></p>";
                $_SESSION['angka1'] = rand(1,20);
                $_SESSION['angka2'] = rand(1,20);
                if($_SESSION['lives'] > 0){
                echo "<a class='btn btn-primary' href='game.php'>Soal Selanjutnya</a>";
                } else {
                    echo "<a class='btn btn-danger' href='game.php'>Selanjutnya</a>";
                }
            }
        }
    } else {
        echo "<p><h2>Hello {$_COOKIE['nama']}, sayang permainan sudah selesai<br>Semoga lain kali bisa lebih baik</h2></p>";
        echo "<p><button class='btn btn-light disabled'>Score Anda : {$_SESSION['score']}</button></p>";
        echo "<p><a class='btn btn-outline-light' href='ranking.php'>Lihat Peringkat</a></p>";
        addScore($dbhost, $dbusername, $dbpassword, $dbname, $_COOKIE['nama'], $_SESSION['score']);
        $_SESSION['score'] = 0;
        $_SESSION['lives'] = 5;
        echo "<p>Main lagi?<br>";
        echo "<a class='btn btn-primary' href='game.php'>Main lagi</a></p>";

    }
    
    ?>

    </div> 
    
  </body>
</html>