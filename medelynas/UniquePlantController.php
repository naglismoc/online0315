<?php
include('./DB.php');
// reprezentuoja unique_plants table

function find($id){
    $conn = connect();
    $sql = 'SELECT * from `unique_plants` where id ='.$id;
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_assoc();
}
function findType($id){
    $conn = connect();
    $sql = 'SELECT * from `plants` where id ='.$id;
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_assoc();
}

function all(){
    $conn = connect();
    $sql = 'SELECT * from `unique_plants` where plant_id ='.$_GET['id'];
    $result = $conn->query($sql);
    $conn->close();
    return $result;

}

function store(){
    $conn = connect();
    $sql = 'INSERT INTO `plants`(`id`, `name`, `is_yearling`, `quantity`) VALUES (NULL,"'.$_POST['name'].'","'.$_POST['is_yearling'].'","'.$_POST['quantity'].'")';
    $conn->query($sql);
    $conn->close();
}


function update(){
    $conn = connect();
   // $sql = 'UPDATE `plants` SET `name`="'.$_POST['name'].'",`is_yearling`="'.$_POST['is_yearling'].'",`quantity`="'.$_POST['quantity'].'" WHERE id = '.$_POST['update'];
    $sql ='UPDATE `unique_plants` SET `age` = "'.$_POST['age'].'", `height` = "'.$_POST['height'].'", `health` = "'.$_POST['health'].'" WHERE `unique_plants`.`id` ='.$_POST['update'];
    $conn->query($sql);
    $conn->close();
}

function destroy($id){
    $conn = connect();
    $sql = "DELETE FROM `unique_plants` WHERE id=".$id;
    $conn->query($sql);
    $conn->close();
}
?>