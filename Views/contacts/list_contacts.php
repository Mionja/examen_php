<div class="row">
    <span class="h2">Liste des contacts</span>
    <?php if ($_SESSION["status"] == 'admin') {?>  
    <span class="offset-7">  
        <a href="./index.php?page=Ctrl_contacts&view=add" class="btn btn_primary">Nouveau</a>
    </span>
    <?php } ?>
</div>
<div class="row">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Fonction</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($contacts as $c) {?>
                <tr>
                    <td><?= $c['nom']?></td>
                    <td><?= $c['email']?></td>
                    <td><?= $c['fonction']?></td>
                    <td>
                        <a href="./index.php?page=Ctrl_contacts&view=message&id= <?= $c['id']?>"><code>Contacter</code></a>
                        <?php if ($_SESSION["status"] == 'admin') {?>    
                        <a href="./index.php?page=Ctrl_contacts&view=edit&id= <?= $c['id']?>" class="btn btn-outline-warning ml-2" >Modifier</a>
                        <a href="./index.php?page=Ctrl_contacts&action=delete&id=<?= $c['id'] ?>" class="btn btn-outline-danger ml-2">Supprimer</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php   }
            ?>
        </tbody>
    </table>
</div>