<?php

$arr = [];
for ($i=0; $i < 10; $i++) { 
    $rnd = rand(0,2);
    
    if($rnd == 1){
       $arr[] = rand(0,20);
       continue;
    }
    if($rnd == 0){
        $tmp = [];
        for ($i=0; $i < rand(3,7) ; $i++) { 
        $tmp[] = rand(20,70);
    }
    $arr[] = $tmp;
    continue;
   }
    $tmp = [];
    for ($i=0; $i < rand(3,7) ; $i++) { 
        $tmp2 = []; 
        for ($i=0; $i < rand(3,7) ; $i++) { 
        $tmp2[] = rand(20,70);
        }
        $tmp[] =  $tmp2;
    }
    $arr[] = $tmp;

}
print_r($arr);
echo "<hr>";
diveDeep($arr);
echo "<hr>";
$result = diveDeepAndSum($arr);
echo "<hr>";
echo $result*20;
echo "<hr>";

echo diveDeepAndSum() * 20;

function diveDeepAndSum($item = 0){

    if(!is_array($item)){
        if(!is_numeric($item)){
            return 0;
        }
        return $item;
    }

    $sum = 0;
    foreach ($item as $innerItem) {
        if(is_array($innerItem)){
            $sum += diveDeepAndSum($innerItem);
        } else{
            echo $innerItem." ";
            $sum += $innerItem;
        }
    }
    
    return $sum;
}


function diveDeep($item){
    if( is_array($item)){
        foreach ($item as $innerItem) {
            if(is_array($innerItem)){
                diveDeep($innerItem);
            } else{
                echo $innerItem." ";
            }
        }
    }else{
        echo $item." ";
    }
}



// recursion (5);

function recursion ($count){
    $count--;
    if($count > 0){
        recursion ($count);
    }
    echo $count;
}



// makeCoffe("late");

// function makeCoffe($type){
//     switch ($type) {
//         case 'late':
//             makeLate();
//             break;
//         case 'espresso':
//             makeEspresso();
//             break;
//     }
// }

// function makeLate(){
//     if(checkIngredients('Late')){
//         boilWater();
//         prepateTheCup();
//         pourWater();
//         returnCup();
//     }
// }

// function makeEspresso(){
//     if(checkIngredients('Espresso')){
//         boilWater();
//         prepateTheCup();
//         pourWater();
//         returnCup();
//     }
// }

// function boilWater(){
//     echo " verdu vandeni ir laukiu kol uzvirs";
// }
// function prepateTheCup(){
//     echo " Pastatau puodeli";
// }

?>