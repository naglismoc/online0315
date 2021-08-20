<?php

include("./generateTable.php");
init();
function init(){
    if(!file_exists("./data.txt")){
        file_put_contents("./data.txt","[]");
    }
    if(!file_exists("./id.txt")){
        file_put_contents("./id.txt","0");
    }
}
function getData(){
  return  (array) json_decode( file_get_contents("./data.txt",1) );
}

function newId(){
    $id = json_decode( file_get_contents("./id.txt") );
    $id++;
    file_put_contents("./id.txt",$id);
    return $id;
}

function find($id){
    $animal;
    $data = getData();
    foreach ($data as $entry) {
        if($entry->id == $id){
            $animal = $entry;
            return (array) $animal;
        }
    }   
}

function store(){
    $data = getData();
    $data[] = [
        "id" => newId(),
        "species" => $_POST['species'],
        "name" => $_POST['name'],
        "age" => $_POST['age']
    ];
    file_put_contents("./data.txt", json_encode($data));
}

function update(){
    $data = getData();
    $updatedAnimal = [
            "id" =>$_POST['id'],
            "species" => $_POST['species'],
            "name" => $_POST['name'],
            "age" => $_POST['age']
    ];
    foreach ($data as &$entry) {
        if($entry->id == $updatedAnimal['id']){
            $entry = $updatedAnimal;
            // $data[$key] = $updatedAnimal;
            file_put_contents("./data.txt", json_encode($data));
            return;
        }
    }   
}


function destroy(){
    $data = getData();
    foreach ($data as $key => $entry) {
        if($entry->id == $_POST['id']){
            unset($data[$key]);
            file_put_contents("./data.txt", json_encode(array_values($data)));
            return;
        }
    }   
}
?>
