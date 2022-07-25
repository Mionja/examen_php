<div class="h2 text-center font-weight-light text-uppercase my-3">Modification d'un Prof</div>
<hr>

<div class="container w-75">
    <form action="/mine/PHP/index.php?page=Ctrl_profs&action=edit" method="post" class="form">
    <input type="hidden" name="id" value="<?= $profs['id'] ?>"><br>
    <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" value="<?= $profs['nom']?>" required class="form-control"><br>
    <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" value="<?= $profs['email']?>" required><br>
    
    <div class="text-center">
        <div class="mb-3">
        <button type="submit" name="update" class="btn btn-success">Valider</button>
        </div>
        <div class="col">
        <a href="/mine/PHP/index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
        </div>
    </div>
</form>
</div>