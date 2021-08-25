<?php
include('../Models/PlantType.php');
 if(isset($_GET['plants'] )){
    header("location:./plants.php?id=".$_GET['plants']);
    die;
}
if(!isset($_POST['create']) &&
    !isset($_GET['edit']) &&
    !isset($_POST['update']) &&
    !isset($_POST['delete'])){
      $all = PlantType::all();
    }

if(isset($_POST['create'] )){
    store();
    header("location:./");
    die;
}

if(isset($_POST['update'] )){
    update();
    header("location:./");
    die;
}

if(isset($_POST['delete'] )){
    destroy($_POST['delete']);
    header("location:./");
    die; 
}

$action = 'create';

if(isset($_GET['edit'] )){
        $plant = find($_GET['edit']);
        $action = 'update';
    }



?>