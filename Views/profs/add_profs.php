<div class="h2 text-center font-weight-light text-uppercase my-3 mt-5">Nouveau Prof</div>
<hr>

<div class="container w-50 border border-rounded pb-3 pt-3 bg-warning" style="background-color:aquamarine;">
    <form action="/mine/PHP/index.php?page=Ctrl_profs&action=add" method="post" enctype="multipart/form-data" class="form">
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
        <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" required class="form-control"><br>
        <label for="prof">Email :</label><input type="email" name="email" id="prof" class="form-control" required><br>
        <label for="prof">Mot de passe :</label><input type="text" name="mdp" id="prof" class="form-control" required><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Choisir votre module</option>

            <?php foreach($modules as $module) { ?>
            <option value="<?= $module['nom']?>"><?= $module['nom']?></option>
            <?php } ?>

        </select>
        <div class="container mt-5 mb-5">
        <label for="photo">Entrer votre photo: 
            <input type="file" name="photo" id="photo" required>
        </label>
        </div>

        <div class="text-center">
            <div class="mb-3">
                <button type="submit" name="add" class="btn btn-success">Enregistrer</button>
            </div>
        </div>
    </form>
</div>
<div class="col text-center mt-4">
                <a href="/mine/PHP/index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
        </div>