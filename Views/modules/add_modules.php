<div class="h2 text-center font-weight-light text-uppercase my-3">Nouveau Module</div>
<hr>

<div class="container w-75">
<form action="/mine/PHP/index.php?page=Ctrl_modules&action=add" method="post" class="form">
    <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
    
    <div class="row">
        <div class="col">
            <label for="code">Code :</label><input type="number" name="code" id="code" class="form-control" required><br>
        </div>
        <div class="col">
            <label for="heure">Heure :</label><input type="number" name="heure" id="heure" class="form-control" required><br>
        </div>
    </div>
    L'enseignant: <select class="form-select" aria-label="Default select example" name="id_prof">
            <?php foreach($profs as $p) { ?>
            <option value="<?= $p['id']?>"><?= $p['nom']?></option>
            <?php } ?>

        </select>
    <div class="text-center">
        <div class="mb-3">
        <button type="submit" name="add" class="btn btn-primary mt-4">Enregistrer</button>
        </div>
        <div class="col">
        <a href="/mine/PHP/index.php?page=Ctrl_modules" class="btn btn-dark">Liste des modules</a>
        </div>
    </div>
</form>
</div>