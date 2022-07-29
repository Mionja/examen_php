<?php if ($_SESSION["status"] == 'etudiant') {
    header("location:/mine/PHP/index.php?page=Ctrl_acceuils");
} 
else{ ?>
    <div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Liste  des Profs</div>
<hr>
<table class="table table-striped table-borderless table-success table-hover">
    <thead class="text-center text-dark bg-success">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Modules</th>
        <?php if ($_SESSION["status"] == 'admin') {?>    
        <th colspan="2">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($profs as $prof) { ?>
    <tr>
        <td><?= $prof['nom']?></td>
        <td><?= $prof['email']?></td>
        <td></td>
        <?php if ($_SESSION["status"] == 'admin') {?>        
            <td><a href="/mine/PHP/index.php?page=Ctrl_profs&view=edit&id=<?= $prof['id']?>" class="btn btn-sm bg-dark"><img src="/mine/PHP/assets/img/edit.png" class=""></a></td>
            <td><a href="/mine/PHP/index.php?page=Ctrl_profs&action=delete&id=<?= $prof['id']?>" class="btn btn-sm bg-dark"><img src="/mine/PHP/assets/img/trash.png" class=""></a></td>
        <?php } ?>
        
        
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<a href="/mine/PHP/index.php?page=Ctrl_profs&view=add" class="btn btn-success">Ajouter un prof</a>
</div>
<?php } ?>