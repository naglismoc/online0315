<?php
include('../../Models/DB.php');

class UniquePlant{

    public $id;
    public $age;
    public $height;
    public $health;

    function __constructor(){
    
    }

    public static function  all(){
        $conn = connection();
        $sql = 'SELECT * from `unique_plants` where plant_id ='.$_GET['id'];
        $result = $conn->query($sql);
    
        $all = [];
        while($row = $result->fetch_assoc()) {
            $plant = new UniquePlant();
            $plant->id = $row['id'];
            $plant->age = $row['age'];
            $plant->height = $row['height'];
            $plant->health = $row['health'];
            $all[] = $plant;
        }
        $conn->close();
        return $all;
    }
    public static function findType($id){
        $conn = connect();
        $sql = 'SELECT * from `plants` where id ='.$id;
        $result = $conn->query($sql);
        $conn->close();
        return $result->fetch_assoc();
    }
    public static function  find($id){
        $conn = connection();
        $sql = 'SELECT * from `unique_plants` where id ='.$id;
        $result = $conn->query($sql);
        $conn->close();
        $resultPlant = $result->fetch_assoc();

        $plant = new UniquePlant();
        $plant->id = $resultPlant['id'];
        $plant->age = $resultPlant['age'];
        $plant->height = $resultPlant['height'];
        $plant->health = $resultPlant['health'];

        return $plant;
    }

    public static function store(){
        $checked = 0;
        if(isset($_POST['is_yearling'])){
            $checked = 1;
        }
        $conn = connection();
        $sql = 'INSERT INTO `plants`(`id`, `name`, `is_yearling`, `quantity`) VALUES (NULL,"'.$_POST['name'].'","'.$_POST['is_yearling'].'","'.$_POST['quantity'].'")';

        $conn->query($sql);
        $conn->close();
    }

    public static function update(){
        $checked = 0;
        if(isset($_POST['is_yearling'])){
            $checked = 1;
        }
        // echo $checked;die;
        $conn = connection();
        $sql ='UPDATE `unique_plants` SET `age` = "'.$_POST['age'].'", `height` = "'.$_POST['height'].'", `health` = "'.$_POST['health'].'" WHERE `unique_plants`.`id` ='.$_POST['update'];
        $conn->query($sql);
        $conn->close();
    }
    public static function destroy($id){
        $conn = connection();
        $sql = "DELETE FROM `unique_plants` WHERE id=".$id;
        $conn->query($sql);
        $conn->close();
    }

 




    public function checkBoxActivation()
    {
        return ($this->is_yearling )? "checked" : "";
        
    }


}









?>