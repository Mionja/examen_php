<a href="/mine/PHP/index.php" class="btn btn-outline-primary">Acceuil</a>
<div class="h2 text-center font-weight-light text-uppercase">Liste  des Profs</div>
<hr>
<table class="table table-striped table-borderless">
    <thead class="text-center table-primary">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Modules</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($profs as $prof) { ?>
    <tr>
        <td><?= $prof['nom']?></td>
        <td><?= $prof['email']?></td>
        <td></td>
        <td><a href="/mine/PHP/index.php?page=Ctrl_profs&view=edit&id=<?= $prof['id']?>" class="btn btn-outline-warning"><i class="fa-solid fa-file-pen"></i></i></a></td>
        <td><a href="/mine/PHP/index.php?page=Ctrl_profs&action=delete&id=<?= $prof['id']?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<a href="/mine/PHP/index.php?page=Ctrl_profs&view=add" class="btn btn-primary">Ajouter un prof</a>
</div>