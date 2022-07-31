<div class="h2 text-center font-weight-light text-uppercase" style="font-style:italic">Liste  des etudiants</div>
<hr>
<table class="table table-striped table-borderless table-dark table-hover">
    <thead class="text-center text-light bg-black">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Numéro</th>
        <?php if ($_SESSION["status"] == 'admin') {?>    
        <th colspan="3">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($etudiants as $e) { ?>
    <tr>
        <td><?= $e['nom']?>  <code class="text-dark"><?= $e['prenom']?></code></td>
        <td><?= $e['email']?></td>
        <td></td>
        <?php if ($_SESSION["status"] == 'admin') {?>        
            <td><a href="/mine/PHP/index.php?page=Ctrl_etudiants&view=details&id=<?= $prof['id']?>" class="btn btn-sm" title="Details sur <?= $e['nom']?> "><img src="/mine/PHP/assets/img/detail.png" style="width:20px;"></a></td>
            <td><a href="/mine/PHP/index.php?page=Ctrl_etudiants&view=edit&id=<?= $prof['id']?>" class="btn btn-sm" title="Modifier information "><img src="/mine/PHP/assets/img/edit.png" class=""></a></td>
            <td><a href="/mine/PHP/index.php?page=Ctrl_etudiants&action=delete&id=<?= $prof['id']?>" class="btn btn-sm " title="Supprimer"><img src="/mine/PHP/assets/img/trash.png" class=""></a></td>
        <?php } ?>
        
        
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php if ($_SESSION["status"] == 'admin') {?> 
<div class="text-center mb-3">
<a href="/mine/PHP/index.php?page=Ctrl_etudiants&view=add" class="btn btn-warning">Ajouter un etudiant</a>
</div><?php } ?>
