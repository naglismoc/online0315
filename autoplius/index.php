<?php




include("./DB.php");

if(isset($_POST['create'])){
    store();
    header("location:./");
    die;
}
if(isset($_GET['edit'])){
    $car = find($_GET['edit']);
}
if(isset($_POST['update'])){
    update();
    header("location:./");
    die;
}
if(isset($_POST['delete'])){
    destroy();
    header("location:./");
    die;
}



// objektas - car. columns - id, manufacturer, model, fuel, year, distance, status.
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
    <style>
        body{
            margin:10px;
        }
    </style>
</head>
<body>

<form class="form" action="" method="post">


<div class="form-group row mt-2">
    <label class="col-sm-2 col-form-label" >manufacturer</label>
    <div class="col-sm-4">
        <input class="form-control" type="text" name="manufacturer" value="<?= (isset($car))? $car['manufacturer'] : "" ?>">
    </div>
</div>
<div class="form-group row mt-2">
    <label class="col-sm-2 col-form-label" >Car model</label>
    <div class="col-sm-4">
        <input class="form-control" type="text" name="model" value="<?= (isset($car))? $car['model'] : "" ?>">
    </div>
</div>
<div class="form-group row mt-2">
    <label class="col-sm-2 col-form-label" >year</label>
    <div class="col-sm-4">
        <input class="form-control" type="text" name="year" value="<?= (isset($car))? $car['year'] : "" ?>">
    </div>
</div>
<div class="form-group row mt-2">
    <label class="col-sm-2 col-form-label" >fuel</label>
    <div class="col-sm-4">
        <input class="form-control" type="text" name="fuel" value="<?= (isset($car))? $car['fuel'] : "" ?>">
    </div>
</div>
<div class="form-group row mt-2">
    <label class="col-sm-2 col-form-label" >distance</label>
    <div class="col-sm-4">
        <input class="form-control" type="text" name="distance" value="<?= (isset($car))? $car['distance'] : "" ?>">
    </div>
</div>

<div class="form-group row mt-4">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
        <?php if(isset($car)){
            echo '<button class="btn btn-primary" style="width:100%" type="submit" name="update" value="'.$car['id'].'">atnaujinti</button>';
        }else{
            echo '<button class="btn btn-primary" style="width:100%" type="submit" name="create" >pridėti</button>';
        }?>
    </div>
</div>


<table class="table">
        <tr>
            <th>id</th>
            <th>manufacturer</th>
            <th>model</th>
            <th>year</th>
            <th>fuel</th>
            <th>distance</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <?php foreach (all() as $car) { ?>
          <tr>
              <td> <?=$car['id']?> </td>
              <td> <?=$car['manufacturer']?> </td>
              <td> <?=$car['model']?> </td>
              <td> <?=$car['year']?> </td>
              <td> <?=$car['fuel']?> </td>
              <td> <?=$car['distance']?> </td>
              <td> 
                  <a class="btn btn-success" href="?edit=<?=$car['id']?>">Edit</a>
                </td>
              <td>
              <form action="" method="post">
                <button class="btn btn-danger" type="submit" name="delete" value="<?=$car['id']?>">Delete</button>
              </form>    
              </td>
          </tr>
            <?php }?>




</table>

</form>
    
</body>
</html>