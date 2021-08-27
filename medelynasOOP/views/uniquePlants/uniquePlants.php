
<?php include("../../Controllers/UniquePlantController.php");





 include("../menu.php"); ?>

<table class="table">
    
    <tr>
    <th>Id</th> 
    <th>amžius</th> 
    <th>aukštis</th> 
    <th>sveikata</th> 
    <th>edit</th> 
    <th>delete</th> 
    </tr>


    <?php $count = 0; foreach (UniquePlant::all() as $plant) { 
        ?>
        <tr>
        <td> <?= ++$count."/".$plant->id  ?> </td>
            <td> <?= $plant->age  ?> </td>
            <td> <?= $plant->height  ?> </td>
            <td> <?= $plant->health  ?> </td>
            <td>
                <a class="btn btn-success" href="./edit.php?id=<?=$_GET['id']?>&edit=<?= $plant->id?>">edit</a>
            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                    <button class="btn btn-danger" type="submit" name="delete" value="<?=$plant->id?>"  >delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>


    <?php include("../footer.php");?>


