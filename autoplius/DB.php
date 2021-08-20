<?php

  function connection (){
   return new mysqli("localhost","root","","autoplius");
  }

  function all(){
    $conn = connection();
    $sql = " SELECT * from cars";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
  }


  function find($id){
    $sql = 'SELECT * from cars where id ="'.$id.'"';
    $conn = connection();
    $car = $conn->query($sql);
    $conn->close();
    return  $car->fetch_assoc();
  }


  function store(){
   
    $sql = "INSERT INTO `cars` 
    (`id`, `manufacturer`, `model`, `fuel`, `year`, `distance`, `status`)
     VALUES (NULL, '".$_POST['manufacturer']."', '".$_POST['model']."',
                    '".$_POST['fuel']."', '".$_POST['year']."',
                    '".$_POST['distance']."', '".$_POST['status']."');";

    $conn = connection();    
    $conn->query($sql);
    $conn->close();      
  }

  function update(){
    $sql= "UPDATE `cars`
     SET `manufacturer` = \"".$_POST['manufacturer']."\", `model` = \"".$_POST['model']."\", `fuel` = \"".$_POST['fuel']."\", `year` = \"".$_POST['year']."\", `distance` = \"".$_POST['distance']."\"
     WHERE `cars`.`id` = \"".$_POST['update']."\";";
    //  echo $sql;die;
     $conn = connection();    
     $conn->query($sql);
     $conn->close();    
  }

  function destroy(){
    $sql = 'DELETE FROM `cars` WHERE `cars`.`id` = '.$_POST['delete'];
        //  echo $sql;die;
    $conn = connection();    
    $conn->query($sql);
    $conn->close();    
  }

?>