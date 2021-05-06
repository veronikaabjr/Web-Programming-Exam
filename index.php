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
  <body style='background-color:#341f97'>
    <div class="container-fluid" style='color:white;position:absolute;left:10%;top:30%;width:80%;text-align:center'>
    <?php
    if(!isset($_COOKIE['nama'])){
    ?>  
    
    <h1> SELAMAT DATANG! <br> AYO BERMAIN GAME MATEMATIKA!</h1><br>
        <form method="POST" action="login.php">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label><br>
                <input type="text" class="form-control-md" name="nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label><br>
                <input type="email" class="form-control-md" name="email">
            </div>
                    
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
        </form>

    
    <?php
    } else {
        echo "<h1> SELAMAT DATANG! <br> AYO BERMAIN GAME MATEMATIKA!</h1><br>";
        echo "Hallo {$_COOKIE['nama']}, Selamat datang kembali di permainan ini !!!";
        ?>
        <p>
        <a href='game.php' class='btn btn-primary'>Mulai</a>
        <a href='logout.php' class='btn btn-danger'>Keluar</a></p>
    <?php
        echo "Bukan anda <a href='logout.php'>klik di sini</a>";    
    }
    ?>
    </div>
    
  </body>
</html>