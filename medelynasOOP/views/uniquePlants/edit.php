<?php include("../../Controllers/UniquePlantController.php");

?>



<?php include("../menu.php")?>
<h1>Edit</h1>

<form class="form" action="./uniquePlants.php" method="POST">
      
      <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Augalo pavadinimas</label>
          <div class="col-sm-4">
              <input class="form-control" type="text" name="age" value="<?= $plant->age  ?>">
          </div>
       </div>
       <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Augalo pavadinimas</label>
          <div class="col-sm-4">
              <input class="form-control" type="text" name="health" value="<?= $plant->health  ?>">
          </div>
       </div>
       <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Augalo pavadinimas</label>
          <div class="col-sm-4">
              <input class="form-control" type="text" name="height" value="<?= $plant->height  ?>">
          </div>
       </div>
       <input type="hidden" name="id" value="<?=$_GET['id']?>">
          <button class="btn btn-info" type="submit" name="update" value="<?=$plant->id?>">Atnaujinti augalą</button>

  </form>

  <?php include("../footer.php");?>