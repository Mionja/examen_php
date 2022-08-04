<h2 class="text-center font-weight-light text-uppercase">Nouveau professeur</h2>
<hr>
<?php
if (isset($err)) {
    echo '<span class="text-danger h6 bold" style="font-weight: bold;">Erreur :</span> <code class="text-danger">' . $err . '</code>';
}
?>
<div class="container w-50 border border-rounded pb-3 pt-3 bg-warning" style="background-color:aquamarine;">
    <form action="./index.php?page=Ctrl_profs&action=add" method="post" enctype="multipart/form-data" class="form">
        <label class="form-label" for="genre">Votre genre</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genre" value="homme" checked>Homme
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genre" value="femme">Femme
        </div>
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
        <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" required class="form-control"><br>
        <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" required><br>
        <label for="age">Votre Age :</label><input type="number" name="age" class="form-control" required><br>
        <label for="tel">Numero(Tel):</label><input type="number" name="tel" class="form-control" required><br>
        <label for="adresse">Votre adresse :</label><input type="text" name="adresse" class="form-control" required><br>
        <label for="reseau">Reseaux Sociaux :</label><input type="text" name="reseau" class="form-control" required><br>
        <label for="age">Mot de passe :</label><input type="text" name="mdp" class="form-control" required><br>

        <div class="container mt-5 mb-5">
            <label for="photo">Entrer votre photo:
                <input type="file" name="photo" id="photo">
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
    <a href="./index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
</div>