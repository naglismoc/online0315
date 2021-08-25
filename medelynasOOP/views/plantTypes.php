
<?= include("./menu.php")?>
<?= include("../Controllers/PlantTypeController.php")?>





<table class="table">
        <tr>
        <th>Id</th> 
        <th>Rūšis</th> 
        <th>vienmetis</th> 
        <th>kiekis</th> 
        <th>augalai</th> 
        <th>edit</th> 
        <th>delete</th> 
        </tr>


        <?php $count = 0; foreach ($all as $plant) {?>
            <tr>
            <td> <?= ++$count."/".$plant->id  ?> </td>
                <td> <?= $plant->name  ?> </td>
                <td> 
                    <input class="checkbox" type="checkbox" name="" id="" <?=$plant->checkBoxActivation()?> disabled>
                </td>
                <td> <?= $plant->quantity  ?> </td>
                <td>
                    <a class="btn btn-primary" href="?plants=<?= $plant->id  ?>">augalai</a>
                </td>
                <td>
                    <a class="btn btn-success" href="?edit=<?= $plant->id  ?>">edit</a>
                </td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?=$plant->id?>"  >delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>





</body>
</html>