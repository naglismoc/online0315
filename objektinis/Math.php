<?php

class Math{



    public static function sum($a,$b)
    {
       return $a + $b;
    }

    public static function extraordanary($a)
    {
       return Math::volume($a) / Math::area($a);
    }
      
    public static function volume($a)
    {
       return 4/3 * pi() *pow($a,3);
    }
          
    public static function area($a)
    {
       return 4 * pi() * pow($a,2);
    }

}

?>