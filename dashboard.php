<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candra Library</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<?php
session_start();
if(!isset($_SESSION['DATA'])){
    $_SESSION['DATA'] = array(); 
    $_GET['STATUS'] = "STANDBY";
}

if(isset($_POST['SIMPAN'])&&$_GET['status']=="post"){
    array_push(
        $_SESSION['DATA'],[
            $_POST['TITLE'],
            $_POST['AUTHORS'],
            $_POST['PUBLISHER'],
            $_POST['CATEGORY']
        ]
    );
            header("Location: dashboard.php");
}
if(isset($_GET['clear'])){
    session_unset();
    header("Location: dashboard.php");
}
?>
<br><br>
<h1 class="display-4">CANDRA LIBRARY</h1><br><br>
<a href="main-form.php"><button class="btn btn-primary">ADD DATA</button></a>
<br><br>
<table class="table table-bordered table-hover thead-light">
<thead>
    <th>NO</th>
    <th>TITLE</th>
    <th>AUTHORS</th>
    <th>PUBLISHER</th>
    <th>CATEGORY</th>
</thead>
<?php
    $i=0;
        foreach($_SESSION['DATA'] as $DATA){
            echo "
                <tr>
                    <td>".++$i."</td>
                ";
            foreach($DATA as $col){
                echo "<td>$col</td>";
            }
            echo "</tr>";
        }
?>
</table><br><br>   
<a href="clear-data.php"><button class="btn btn-danger">CLEAR DATA</button></a>

</div>
</body>
<footer>&copy; Copyright 2019 Candra Prasetya. All Right Reserved</footer>
</html>
