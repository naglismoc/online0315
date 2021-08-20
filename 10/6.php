<?php
$color = 'green';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
header('location:');
    // $color = 'yellow';  
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:<?=$color?>;
            }
    </style>
</head>
<body>
    <form action="" method="get">
        <button type="submit">green</button>
    </form>
    <form action="" method="post">
    <button type="submit">yellow</button>
    </form>
</body>
</html>