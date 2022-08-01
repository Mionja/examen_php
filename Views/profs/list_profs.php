<header class="mb-5 pb-5">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">  
    <ul class="navbar-nav">
        <li class="nav-item">
        <a href="/mine/PHP/index.php?page=Ctrl_acceuils" class="nav-link text-light" style="font-size: 20px;">Acceuil</a>
        </li>
        <li class="nav-item ml-3">
        <a class="nav-link text-light" href="index.php?page=Ctrl_modules" style="font-size: 20px;">Modules</a>
        </li>
        <?php if ($_SESSION["status"] != 'etudiant') {?>
        <li class="nav-item ml-3">
        <a class="nav-link text-light" href="index.php?page=Ctrl_profs" style="font-size: 20px;">Profs</a>
        </li>
        <?php } ?>
        <li class="nav-item ml-3">
        <a class="nav-link text-light" href="index.php?page=Ctrl_etudiants" style="font-size: 20px;">Etudiants</a>
        </li>
        <li class="nav-item ml-3">
        <a class="nav-link text-light" href="index.php?page=Ctrl_contacts" style="font-size: 20px;">Contact</a>
        </li>
    </ul>
    </nav>
</header>


<div class="h2 text-center font-weight-light text-uppercase" style="font-style:italic">Liste  des Profs</div>
<hr>
<table class="table table-striped table-borderless table-dark table-hover">
    <thead class="text-center text-light bg-black">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Modules</th>
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
            <td></td>
            <?php if ($_SESSION["status"] == 'admin') {?>        
                <td><a href="/mine/PHP/index.php?page=Ctrl_profs&view=details&id=<?= $prof['id']?>" class="btn btn-sm " title="Details sur <?= $prof['nom']?> "><img src="/mine/PHP/assets/img/detail.png" style="width:20px;"></a></td>
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
