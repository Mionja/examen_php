
<?php if ($_SESSION["status"] != 'etudiant') {?>    
<div class="h2 text-center font-weight-light text-uppercase" style="font-style:italic">Liste  des Profs</div>
<hr>
<table class="table table-striped table-borderless table-dark table-hover">
    <thead class="text-center text-light bg-black">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <?php if ($_SESSION["status"] == 'admin') {?>    
        <th colspan="3">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($profs as $prof) { ?>
        <tr>
            <td><?= $prof['nom']?>  <code class="text-light"><?= $prof['prenom']?></code></td>
            <td><?= $prof['email']?></td>
            <td><a href="/mine/PHP/index.php?page=Ctrl_profs&view=details&id=<?= $prof['id']?>" class="btn btn-sm " title="Details sur <?= $prof['nom']?> "><img src="/mine/PHP/assets/img/detail.png" style="width:20px;"></a></td>
            <?php if ($_SESSION["status"] == 'admin') {?>        
                <td><a href="/mine/PHP/index.php?page=Ctrl_profs&view=edit&id=<?= $prof['id']?>" class="btn btn-sm " title="Modifier information "><img src="/mine/PHP/assets/img/edit.png" class=""></a></td>
                <td><a href="/mine/PHP/index.php?page=Ctrl_profs&action=delete&id=<?= $prof['id']?>" class="btn btn-sm " title="Supprimer"><img src="/mine/PHP/assets/img/trash.png" class=""></a></td>
            <?php } ?>
            
            
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php if ($_SESSION["status"] == 'admin') {?> 
<div class="text-center mb-3">
<a href="/mine/PHP/index.php?page=Ctrl_profs&view=add" class="btn btn-warning">Ajouter un prof</a>
</div>
<?php } ?>

<?php } 
 else{
    echo '<script>alert("Vous êtes un etudiant, vous n\'y avez pas accès")</script>'; ?>

    <img src="/mine/PHP/assets/img/oups.png" alt="Oups, accès refusé" class="img-thumbnail mx-auto d-block w-25 bg-dark" >
    <p class="text-center mt-2 text-danger">Seul les administrateur et les professeurs ont accès à cette page</p>

<?php  } ?>
    