<?php
$dbhost = 'sql213.epizy.com';
$dbname = 'epiz_28542792_game';
$dbusername = 'epiz_28542792';
$dbpassword = 'TlFtdhYABut';


function addScore($dbhost, $dbusername, $dbpassword, $dbname, $nama, $skor){
    $mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
    $query = "INSERT INTO ranking (nama, skor) VALUES ('$nama', '$skor')";
    $result = mysqli_query($mysqli, $query);
    mysqli_close($mysqli);
}

function ranking ($dbhost, $dbusername, $dbpassword, $dbname){
    $mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
    $query = "SELECT * FROM ranking ORDER BY skor DESC LIMIT 10";
    $index = 1;
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) > 0) {

        ?>
        
        <table border='2' class="table table-bordered border-light caption-top">
        <caption style='text-align:center;color:white'><h1>Ranking 10</h1></caption>
        <tr class='table-light'>
        <th style='width:5%'>No.</th>
        <th>Nama</th>
        <th>Score</th>
        </tr>
    
        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo"<tr style='color:white;background-color:#5f27cd'>";
            echo"<td>$index</td>";
            echo"<td>{$row['nama']}</td>";
            echo"<td>{$row['skor']}</td>";
            $index++;
        }
    
        
        ?>
        
        </table>
        <?php
    }
    mysqli_close($mysqli);
}

?>