<div class="h2 text-center font-weight-light text-uppercase my-3">Modification contact</div>
<hr>

<div class="container w-50 pb-3 pt-3 bg-transparent">
    <form action="./index.php?page=Ctrl_contacts&action=edit" method="post" class="form">
        <input type="hidden" name="id" value="<?=$contacts['id'] ?>">
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" value="<?=$contacts['nom'] ?>" required class="form-control"><br>
        <label for="email">Email :</label><input type="email" name="email" id="email" value="<?=$contacts['email'] ?>" class="form-control" required><br>

        Choisir la fonction occupé: 
        <select class="form-select" aria-label="Default select example" name="fonction" required>
            <option value="dg" selected>DG</option>
            <option value="drh">DRH</option>
            <option value="dc">DC</option>
            <option value="chf_filiere">Chef de filière</option>
        </select>
        

        <div class="text-center">
            <div class="mb-3">
                <button type="submit" name="update" class="btn btn-success mt-5">Enregistrer</button>
            </div>
        </div>
    </form>
</div>
<div class="col text-center mt-4">
                <a href="./index.php?page=Ctrl_contacts" class="btn btn-dark">Liste des contacts</a>
        </div>