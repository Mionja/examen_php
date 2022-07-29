<div class="h2 text-center font-weight-light text-uppercase my-3">Nouveau Prof</div>
<hr>

<div class="container w-75">
    <form action="/mine/PHP/index.php?page=Ctrl_profs&action=add" method="post" class="form">
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
        <label for="prof">Email :</label><input type="email" name="email" id="prof" class="form-control" required><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Choisir votre module</option>
            <?php foreach($modules as $module) { ?>
            <option value="<?= $module['nom']?>"><?= $module['nom']?></option>
            <?php } ?>
        </select>
        <div class="text-center">
            <div class="mb-3">
                <button type="submit" name="add" class="btn btn-primary">Enregistrer</button>
            </div>
            <div class="col">
                <a href="/mine/PHP/index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
            </div>
        </div>
    </form>
</div>