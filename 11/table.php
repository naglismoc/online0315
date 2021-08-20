<table class="table">
  <tr>
    <th>id</th>
    <th>Gyvūno rūšis</th>
    <th>Gyvūno vardas</th>
    <th>Gyvūno amžius</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
  <?php foreach ($_SESSION['zoo'] as $animal) { ?>
    <tr>
        <td><?=$animal['id']?></td>
        <td><?=$animal['species']?></td>
        <td><?=$animal['name']?></td>
        <td><?=$animal['age']?></td>
        <td>
           <a href="?id=<?=$animal['id']?>"> 
               <div class="btn btn-primary">redaguoti</div>
            </a>
        </td>
        <td>
            <form action="" method="post">
                <input type="hidden" name="id" value=<?=$animal['id']?>>
                <input class="btn btn-danger" type="submit" value="trinti">
            </form>
        </td>
    </tr> 
 <?php } ?>
</table>