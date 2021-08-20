<?php



$conn = new mysqli("localhost", "root", "", "olympics_2021");


$sqlCreate = "INSERT INTO `athletes` (`id`, `name`, `surname`, `country_id`) 
VALUES (NULL, 'zigmondas', 'Jurkus', '1');";
$conn->query($sqlCreate);

$sqlUpdate = 'UPDATE `athletes` SET `surname`= "' . str_repeat( chr(rand(65,90)) ,5 ).  '" WHERE name = "zigmondas" ';
$conn->query($sqlUpdate);


$sqlDelete = "DELETE FROM `athletes` WHERE id > 20";
$conn->query($sqlDelete);

$sql = "SELECT * from athletes";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    // echo $row['id']." ".$row['name']." ".$row['surname']."<br>";
    echo $row['id']." ".$row['name']." ".$row['surname']."<br>";
}

$conn->close();









// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }



?>