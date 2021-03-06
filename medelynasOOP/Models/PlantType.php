<?php
include('../../Models/DB.php');

class PlantType{

    public $id;
    public $name;
    public $is_yearling;
    public $quantity;

    function __constructor(){
    
    }

    public static function  all(){
        $conn = connection();
        $sql = "SELECT `plant_types`.`id`, `name`, `is_yearling`,
                        (SELECT COUNT(*)
                        FROM `unique_plants`
                        WHERE `unique_plants`.`plant_id` = `plant_types`.`id`) as 'quantity'
                        FROM `unique_plants` right join `plant_types`
                        ON `plant_types`.`id` = `unique_plants`.`plant_id`
                        GROUP by `plant_types`.`id`;";
        $result = $conn->query($sql);
    
        $all = [];
        while($row = $result->fetch_assoc()) {
            $plant = new PlantType();
            $plant->id = $row['id'];
            $plant->is_yearling = $row['is_yearling'];
            $plant->quantity = $row['quantity'];
            $plant->name = $row['name'];
            $all[] = $plant;
        }
        $conn->close();
        return $all;
    }

    public static function  find($id){
        $conn = connection();
        $sql = 'SELECT * from `plant_types` where id ='.$id;
        $result = $conn->query($sql);
        $conn->close();
        $resultPlant = $result->fetch_assoc();

        $plant = new PlantType();
        $plant->id = $resultPlant['id'];
        $plant->name = $resultPlant['name'];
        $plant->is_yearling = $resultPlant['is_yearling'];

        return $plant;
    }

    public static function store(){
        $checked = 0;
        if(isset($_POST['is_yearling'])){
            $checked = 1;
        }
        $conn = connection();
        $sql = 'INSERT INTO `plant_types`(`id`, `name`, `is_yearling`) VALUES (NULL,"'.$_POST['name'].'",'.$checked.')';
        // echo $sql;die;
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
        $sql = 'UPDATE `plant_types` SET `name`="'.$_POST['name'].'",`is_yearling`='.$checked.' WHERE id = '.$_POST['update'];
        //  echo $sql;die;
        $conn->query($sql);
        $conn->close();
    }
    public static function destroy($id){
        $conn = connection();
        $sql = "DELETE FROM `plant_types` WHERE id=".$id;
        $conn->query($sql);
        $conn->close();
    }

 




    public function checkBoxActivation()
    {
        return ($this->is_yearling )? "checked" : "";
        
    }


}









?>