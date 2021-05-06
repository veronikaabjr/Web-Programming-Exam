  
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
<head>
<body style='background:#341f97;color:white'>
    <nav class="navbar-collapse navbar-dark" style='position:fixed;top:5%;right:10%'>
        <div class="container">
        <a class='btn btn-primary btn-sm' href='index.php'>Beranda</a>
        <a class='btn btn-danger btn-sm' href='logout.php'>Keluar</a>
        </div>
    </nav>
    <div class="container container-fluid" style="position: absolute; top:40%; left:50%;z-index: 2;transform: translate(-50%, -40%);width: 80%; text-align:center;color: white;">
    
    <?php
    include('config.php');
    
    ranking($dbhost, $dbusername, $dbpassword, $dbname);
    ?>
</div>
</body>
</html>