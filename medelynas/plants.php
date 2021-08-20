<?php
include('./UniquePlantController.php');


$plantType = findType($_GET['id']);



if(isset($_POST['create'] )){
    store();
    header("location:./plants.php?id=".$_GET['id']);
    die;
}

if(isset($_POST['update'] )){
    update();
    header("location:./plants.php?id=".$_GET['id']);
    die;
}

if(isset($_POST['delete'] )){
    destroy($_POST['delete']);
    header("location:./plants.php?id=".$_GET['id']);
    die; 
}

$action = 'create';

if(isset($_GET['edit'] )){
        $plant = find($_GET['edit']);
        $action = 'update';
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
/*checkbox*/

@supports (zoom:2) {
    input[type="radio"],  input[type=checkbox]{
    zoom: 2;
    }
}
@supports not (zoom:2) {
    input[type="radio"],  input[type=checkbox]{
        transform: scale(2);
        margin: 15px;
    }
}

    </style>
</head>
<body>
<div class="container">
<div class="row mt-3 mb-3 text-center">

<div class="col-md-3"><a href="./">HOME</a> </div>
    <div class="col-md-3"><?= $plantType['name']  ?></div>
    <div class="col-md-3"><?= $plantType['is_yearling']  ?></div>
    <div class="col-md-3"><?= $plantType['quantity']  ?></div>
</div>
<div class="row mt-3 mb-3">

<form class="form" action="" method="POST">
      
      <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Augalo amžius metais</label>
          <div class="col-sm-4">
              <input class="form-control" type="text" name="age" value="<?= (isset($plant))? $plant['age'] : "" ?>">
          </div>
       </div>
       <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Augalo aukštis</label>
          <div class="col-sm-4">
              <input class="form-control" type="text" name="height" value="<?= (isset($plant))? $plant['height'] : "" ?>">
          </div>
       </div>
       <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Augalo būklė (0-100) </label>
          <div class="col-sm-4">
              <input class="form-control" type="text" name="health" value="<?= (isset($plant))? $plant['health'] : "" ?>">
          </div>
          
       </div>
  <?php if(!isset($plant)){
          echo '<button class="btn btn-primary" name="create" type="submit">Pridėti augalą</button>';
  }else{
          echo '<button class="btn btn-info" type="submit" name="update" value="'.$plant['id'].'">Atnaujinti augalą</button>';
  } ?>
  </form>


</div>


    <table class="table">
    
        <tr>
        <th>Id</th> 
        <th>amžius</th> 
        <th>aukštis</th> 
        <th>sveikata</th> 
        <th>edit</th> 
        <th>delete</th> 
        </tr>


        <?php $count = 0; foreach (all() as $plant) { 
            ?>
            <tr>
            <td> <?= ++$count."/".$plant['id']  ?> </td>
                <td> <?= $plant['age']  ?> </td>
                <td> <?= $plant['height']  ?> </td>
                <td> <?= $plant['health']  ?> </td>
                <td>
                    <a class="btn btn-success" href="?id=<?=$_GET['id']?>&edit=<?= $plant['id']?>">edit</a>
                </td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?=$plant['id']?>"  >delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>