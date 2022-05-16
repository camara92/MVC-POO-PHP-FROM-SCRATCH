

?>


<?php ob_start() ?>

<p> Games notre selection</p>

<?php


$title = "liste des jeux  ";
$content = ob_get_clean();
require_once "base.html.php";
?>

<table class="container table table-hover text-center border">
    <thead class="table-dark">
        <tr>
            <!-- <th>Identifiant</th> -->
            <th>Titre</th>
            <th>Nombre de joueurs</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>

      <tr>
            <td>Jeux 1</td>
            <td>2</td>
            <td><a href=""><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>  
        
        <tr>
            <td>Jeux 1</td>
            <td>2</td>
            <td><a href=""><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>    
        
        <tr>
            <td>Jeux 1</td>
            <td>2</td>
            <td><a href=""><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>        
    

    </tbody>
</table>