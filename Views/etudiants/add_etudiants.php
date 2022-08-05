<h2 class="text-center font-weight-light text-uppercase">Nouveau etudiant</h2>

<hr>
<?php
if (isset($err)) {
  echo '<span class="text-danger h6 bold" style="font-weight: bold;">Erreur :</span> <code class="text-danger">' . $err . '</code>';
}
?>
<div class="container w-75">
  <form action="./index.php?page=Ctrl_etudiants&action=add" method="post" class="form" enctype="multipart/form-data">
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
    <div class="row">
      <div class="col">
        <label for="date_naissance" class="form-label">Date de naissance :</label><input type="date" name="date_naissance" id="date_naissance" required class="form-control">
      </div>
      <div class="col">
        <label for="tel">Telephone :</label><input type="number" name="tel" id="tel" class="form-control" min=1 required>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <label for="cin" class="form-label">CIN :</label><input type="number" name="cin" id="cin" class="form-control" min=1 required>
      </div>
      <div class="col">
      <label for="comptefb" class="form-label">Nom sur fb :</label><input type="text" name="comptefb" id="comptefb" class="form-control">
      </div>
    </div>
    
    
    <label for="photo" class="form-label">Photo :</label><input type="file" name="photo" id="photo" class="form-control"><br>
    <label for="password" class="form-label">Password :</label><input type="password" name="password" id="password" required class="form-control"><br>
    <div class="text-center">
      <div class="mb-3">
        <button type="submit" name="add" class="btn btn-primary">Enregistrer</button>
      </div>
      <div class="col">
        <a href="./index.php?page=Ctrl_etudiants" class="btn btn-dark">Liste des etudiants</a>
      </div>
    </div>
  </form>
</div>