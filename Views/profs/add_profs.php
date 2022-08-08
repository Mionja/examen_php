<h2 class="text-center font-weight-light text-uppercase">Nouveau professeur</h2>
<hr>
<?php
if (isset($err)) {
    echo '<span class="text-danger h6 bold" style="font-weight: bold;">Erreur :</span> <code class="text-danger">' . $err . '</code>';
}
?>
<div class="container w-50 pb-3 pt-3 bg-transparent" style="background-color:aquamarine;">
    <form action="./index.php?page=Ctrl_profs&action=add" method="post" enctype="multipart/form-data" class="form">
        <div class="form-check mb-4 ml-5">
            <label for="homme" class="mr-5">
            <input class="form-check-input" id="homme" type="radio" name="genre" value="homme" checked>Homme
            </label>
        
            <label for="femme" >
            <input class="form-check-input" id="femme" type="radio" name="genre" value="femme">Femme
            </label>
        </div>
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
        <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" required class="form-control"><br>
        <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" required><br>
        <div class="row">
            <div class="col">
                <label for="tel">Numero(Tel):</label><input type="number" name="tel" class="form-control" required><br>
            </div>
            <div class="col">
                <label for="reseau">Reseaux Sociaux :</label><input type="text" name="reseau" class="form-control" required><br>
            </div>
        </div>
        
        <label for="adresse">Votre adresse :</label><input type="text" name="adresse" class="form-control" required><br>
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