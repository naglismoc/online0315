<?php include("../../Controllers/PlantTypeController.php")?>



<?php include("../menu.php")?>
<h1>Edit</h1>

<form class="form" action="./plantTypes.php" method="POST">
      
      <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Augalo pavadinimas</label>
          <div class="col-sm-4">
              <input class="form-control" type="text" name="name" value="<?= $plant->name  ?>">
          </div>
       </div>
       <div class="form-group row">
          <label class="col-sm-2 col-form-label" >Vienmetis</label>
          <div class="col-sm-4">
          <input class="checkbox" type="checkbox" name="is_yearling" <?=$plant->checkBoxActivation()?> >
                
           </div>
       </div>
          <button class="btn btn-info" type="submit" name="update" value="<?=$plant->id?>">Atnaujinti augalą</button>

  </form>

  <?php include("../footer.php");?>