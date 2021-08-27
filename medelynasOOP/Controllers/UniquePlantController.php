<?php
include('../../Models/UniquePlant.php');
//  if(isset($_GET['plants'] )){
//     header("location:./plants.php?id=".$_GET['plants']);
//     die;
// }
if(!isset($_POST['create']) &&
    !isset($_GET['edit']) &&
    !isset($_POST['update']) &&
    !isset($_POST['delete'])){
      $all = UniquePlant::all();
    }

if(isset($_POST['create'] )){
    UniquePlant::store();
    header("location:./UniquePlants.php");
    die;
}

if(isset($_POST['update'] )){
    UniquePlant::update();
    header("location:./UniquePlants.php?id=".$_POST['id']);
    die;
}

if(isset($_POST['delete'] )){
    UniquePlant::destroy($_POST['delete']);
    header("location:./UniquePlants.php?id=".$_POST['id']);
    die; 
}

if(isset($_GET['edit'] )){
        $plant = UniquePlant::find($_GET['edit']);
    }



?>