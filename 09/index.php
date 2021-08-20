
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

</style>
<?php
echo $_SERVER['REQUEST_METHOD'];
// print_r(array_keys( $_SERVER ));
if(true){

}
echo "<h1 style=\"color:".$_GET['color'].";\">";
if(isset($_GET['vardas'])){
    echo $_GET['vardas']." ";
}
if(isset($_GET['pavarde'])){
    echo $_GET['pavarde'];
}

echo "</h1>";
if(isset($_GET['jsMy'])){
    echo '<script>
            console.log(\''. $_GET['jsMy'] .'\');
        </script>';
}

?>

<!-- <a href="">push me</a> -->
  <form action="" method="get">
    
  <label for="jsMy">js</label>
    <input id="jsMy" type="text" name="jsMy"><br>

    <label for="color">color</label>
    <input id="color" type="text" name="color"><br>

    <label for="name">name</label>
    <input id="name" type="text" name="vardas"><br>

    <label for="surname">surname</label>
    <input id="surname" type="text" name="pavarde"><br>

    <button type="submit">submit</button>
  </form>  
</body>
</html>


