<?php
include('../Models/DB.php');

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

    public function checkBoxActivation()
    {
        return ($this->is_yearling )? "checked" : "";
        
    }


}









?>