<?php
include('../../Models/PlantType.php');
 if(isset($_GET['plants'] )){
    header("location:../uniquePlants/uniquePlants.php?id=".$_GET['plants']);
    die;
}
if(!isset($_POST['create']) &&
    !isset($_GET['edit']) &&
    !isset($_POST['update']) &&
    !isset($_POST['delete'])){
      $all = PlantType::all();
    }

if(isset($_POST['create'] )){
    PlantType::store();
    header("location:./plantTypes.php");
    die;
}

if(isset($_POST['update'] )){
    PlantType::update();
    header("location:./plantTypes.php");
    die;
}

if(isset($_POST['delete'] )){
    PlantType::destroy($_POST['delete']);
    header("location:./plantTypes.php");
    die; 
}

if(isset($_GET['edit'] )){
        $plant = PlantType::find($_GET['edit']);
    }



?>