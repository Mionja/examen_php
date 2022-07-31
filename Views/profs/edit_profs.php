<div class="h2 text-center font-weight-light text-uppercase my-3">Modification Prof</div>
<hr>

<div class="container w-50 border border-rounded pb-3 pt-3 bg-warning" style="background-color:aquamarine;">
    <form action="/mine/PHP/index.php?page=Ctrl_profs&action=edit" method="post" enctype="multipart/form-data" class="form">
        <input type="hidden" name="id" value="<?= $profs['id'] ?>">
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" value="<?=$profs['nom'] ?>" required class="form-control"><br>
        <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" value="<?=$profs['prenom'] ?>" required class="form-control"><br>
        <label for="prof">Email :</label><input type="email" name="email" id="prof" value="<?=$profs['email'] ?>" class="form-control" required><br>
        <label for="prof">Mot de passe :</label><input type="password" name="mdp" id="prof" value="<?=$profs['mdp'] ?>" class="form-control" required><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Choisir votre module</option>

            <?php foreach($modules as $module) { ?>
            <option value="<?= $module['nom']?>"><?= $module['nom']?></option>
            <?php } ?>

        </select>
        <div class="container mt-5 mb-5">
        <label for="photo">Entrer votre photo: 
            <input type="file" name="photo" id="photo" value="<?=$profs['photo'] ?>" required>
        </label>
        </div>

        <div class="text-center">
            <div class="mb-3">
                <button type="submit" name="update" class="btn btn-success">Enregistrer</button>
            </div>
        </div>
    </form>
</div>
<div class="col text-center mt-4">
                <a href="/mine/PHP/index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
        </div>