<?php

class Plant {
    public $name;
    public $color;
  
    function __construct($name ="",$color = "") {
        $this->name = $name; 
        $this->color = $color; 
    }

    
    public static function tellMeMore()
    {
       echo " no I won't";
    }

    function intro(){
        echo "I am ".$this->name.", and i am ".$this->color." color.";
    }
    
  }
?>