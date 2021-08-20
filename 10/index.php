
<!-- <a href="./antras.php?name=Jonas">ten pat</a> -->



<?php
      $color = 'fff111';
    if(isset($_GET['color'])){
        $color = $_GET['color'];
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
            background-color: #<?=$color?>;
            }
    </style>
</head>
<body>
<a href="./">black</a>
<form action="" method="get">
    <input type="text" name="color">
    <button type="submit"> dažyk </button>
</form>

</body>
</html>

