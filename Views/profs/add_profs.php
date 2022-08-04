<h2 class="text-center font-weight-light text-uppercase">Nouveau professeur</h2>
<hr>
<?php 
      if (isset($err)) {
        echo '<span class="text-danger h6 bold" style="font-weight: bold;">Erreur :</span> <code class="text-danger">'.$err.'</code>';
      }   
    ?>
<div class="container w-50 border border-rounded pb-3 pt-3 bg-warning" style="background-color:aquamarine;">
    <form action="./index.php?page=Ctrl_profs&action=add" method="post" enctype="multipart/form-data" class="form">
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
        <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" required class="form-control"><br>
        <label for="prof">Email :</label><input type="email" name="email" id="prof" class="form-control" required><br>
        <label for="prof">Mot de passe :</label><input type="text" name="mdp" id="prof" class="form-control" required><br>
    
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
                <a href="./index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
        </div>