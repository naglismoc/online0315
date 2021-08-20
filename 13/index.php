<?php
 include("./functions.php");

 //create
    if($_SERVER['REQUEST_METHOD'] =="POST" &&  !isset($_POST["id"])){
    store();
        header("location:./");
        }
        //fill form for edit
    if(isset($_GET['id'])){
        $animal = find($_GET['id']);
    }

    //update
    if($_SERVER['REQUEST_METHOD'] =="POST" &&  isset($_POST["id"])  &&  isset($_POST["species"])){
        update();
        header("location:./");
    }

   if($_SERVER['REQUEST_METHOD'] =="POST" &&  !isset($_POST["species"])){
    destroy();
    header("location:./");
    die;
   }
    $data = getData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>

</head>
<body>

    <form action="" method="post">
         <?= (isset($animal)) ? '<input type="hidden" name="id" value="'.$animal['id'].'">':""?>
        <input type="text" name="species" value=<?=(isset($animal)) ? $animal['species'] :""?>>
        <input type="text" name="name" value=<?=(isset($animal)) ? $animal['name'] :""?>>
        <input type="text" name="age" value=<?=(isset($animal)) ? $animal['age'] :""?>>
        <button type="submit">atnaujinti</button>
    </form>

<?php
generateTable($data);
?>


