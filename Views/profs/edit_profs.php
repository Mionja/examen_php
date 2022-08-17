<div class="h2 text-center font-weight-light text-uppercase my-3">Modification Prof</div>
<hr>

<div class="container w-50 pb-3 pt-3 bg-transparent">
    <form action="./index.php?page=Ctrl_profs&action=edit" method="post" enctype="multipart/form-data" class="form">
        <input type="hidden" name="id" value="<?= $profs['id'] ?>">
        
        <div class="form-check mb-4 ml-5">
            <label for="homme" class="mr-5">
            <input class="form-check-input" id="homme" type="radio" name="genre" value="homme" checked>Homme
            </label>
        
            <label for="femme" >
            <input class="form-check-input" id="femme" type="radio" name="genre" value="femme">Femme
            </label>
        </div>

        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" value="<?=$profs['nom'] ?>" required class="form-control"><br>
        <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" value="<?=$profs['prenom'] ?>" required class="form-control"><br>
        <label for="email">Email :</label><input type="email" name="email" id="email" value="<?=$profs['email'] ?>" class="form-control" required><br>
        <div class="row">
            <div class="col">
            <label for="tel">Numero(Tel):</label><input type="number" name="tel" class="form-control" required value="<?=$profs['tel'] ?>"><br>        
            </div>
            <div class="col">
                <label for="reseau">Reseaux Sociaux :</label><input type="text" name="reseau" class="form-control" required value="<?=$profs['reseau'] ?>"><br>
            </div>
        </div>
        <label for="adresse">Adresse :</label><input type="text" name="adresse" class="form-control" required value="<?=$profs['adresse'] ?>"><br>
        <label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp" value="<?=$profs['mdp'] ?>" class="form-control" required><br>
        <div class="container mt-5 mb-5">
        <label for="photo">Photo: <img src="/PHP/assets/uploaded_img/<?=$profs['photo'] ?>" alt="photo_a_modifier" style="width: 100px;height:100px;">
            <input type="file" name="photo" id="photo" value="<?=$profs['photo'] ?>">
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
                <a href="./index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
        </div>