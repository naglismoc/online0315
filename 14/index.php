<?php
$answers = ['first'=>0,'second'=>1,'third'=>2];
if(isset($_POST['completed'])){
$count = 0;
    if(isset($_POST['first'])){
      if(  $_POST['first'] == $answers['first'] ){
        $count++;
      }
    }

    if(isset($_POST['second'])){
        if(  $_POST['second'] == $answers['second'] ){
          $count++;
        }
      }

      if(isset($_POST['third'])){
        if(  $_POST['third'] == $answers['third'] ){
          $count++;
        }
      }
echo 'Jūs atsakėte teisingai į '.$count.' klausimus iš 3 ir surinkote '.($count/ 3 * 100)."%";

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <input type="hidden" name="completed">
<br>
<?php
      if(isset($_POST['first'])){
        if(  $_POST['first'] == $answers['first'] ){
          echo "correct<br>";
        }else{
            echo "wrong<br>";
        }
      }else{
        echo "Next time select an option<br>";
    }
?>

  <input type="radio"  name="first" value="0">
  <label for="html">Elnias</label><br>
  <input type="radio"  name="first" value="1">
  <label for="css">Šuo</label><br>
  <input type="radio" " name="first" value="2">
  <label for="javascript">Katinas</label><br>
  <input type="radio" " name="first" value="3">
  <label for="javascript">Begemotas</label>

<br> <br>  <br>   
<?php
      if(isset($_POST['second'])){
        if(  $_POST['second'] == $answers['second'] ){
          echo "correct<br>";
        }else{
            echo "wrong<br>";
        }
      }else{
        echo "Next time select an option<br>";
    }
?>
<input type="radio"  name="second" value="0">
  <label for="html">Elnias</label><br>
  <input type="radio"  name="second" value="1">
  <label for="css">Šuo</label><br>
  <input type="radio" " name="second" value="2">
  <label for="javascript">Katinas</label><br>
  <input type="radio" " name="second" value="3">
  <label for="javascript">Begemotas</label>
<br>  <br>  <br>  
<?php
      if(isset($_POST['third'])){
        if(  $_POST['third'] == $answers['third'] ){
          echo "correct<br>";
        }else{
            echo "wrong<br>";
        }
      }else{
        echo "Next time select an option<br>";
    }
?>
<input type="radio"  name="third" value="0">
  <label for="html">Elnias</label><br>
  <input type="radio"  name="third" value="1">
  <label for="css">Šuo</label><br>
  <input type="radio" " name="third" value="2">
  <label for="javascript">Katinas</label><br>
  <input type="radio" " name="third" value="3">
  <label for="javascript">Begemotas</label>
<br><br>

  <input type="submit" value="Submit">
</form>
    </form>
</body>
</html>