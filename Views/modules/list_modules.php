<div class="h2 text-center font-weight-light text-uppercase">Liste  des modules</div>
<hr>
<table class="table table-striped table-borderless">
    <thead class="text-center table-primary">
    <tr>
        <th>Nom</th>
        <th>Code</th>
        <th>Heure</th>
        <th>Prof</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($modules as $module) { ?>
    <tr>
        <td><?= $module['nom']?></td>
        <td><?= $module['code']?></td>
        <td><?= $module['heure']?></td>
        <td>Apio</td>
        <td><a href="/mine/Examen-PHP/index.php?view=edit&id=<?= $module['id']?>" class="btn btn-outline-warning"><i class="fa-solid fa-file-pen"></i></i></a></td>
        <td><a href="/mine/Examen-PHP/index.php?action=delete&id=<?= $module['id']?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<a href="/mine/Examen-PHP/index.php?view=add" class="btn btn-outline-primary">Ajouter un module</a>
</div>