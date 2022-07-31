<div class="h2 text-center font-weight-light text-uppercase my-3">Modification d'un module</div>
<hr>

<div class="container w-75">
    <form action="/mine/PHP/index.php?page=Ctrl_modules&action=edit" method="post" class="form">
    <input type="hidden" name="id" value="<?= $module['id'] ?>"><br>
    <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" value="<?= $module['nom']?>" required class="form-control"><br>
    
    <div class="row">
        <div class="col">
            <label for="code">Code :</label><input type="number" name="code" id="code" class="form-control" value="<?= $module['code']?>" required><br>
        </div>
        <div class="col">
            <label for="heure">Heure :</label><input type="number" name="heure" id="heure" class="form-control" value="<?= $module['heure']?>" required><br>
        </div>
    </div>
    <div class="text-center">
        <div class="mb-3">
        <button type="submit" name="update" class="btn btn-success">Valider</button>
        </div>
        <div class="col">
        <a href="/mine/PHP/index.php?page=Ctrl_modules" class="btn btn-dark">Liste des modules</a>
        </div>
    </div>
</form>
</div>