<h3 class="text-center">Contact <span class="text-info"> <?= $contacts['nom'];?></span></h3>
<div class="d-flex justify-content-center">
<div class="p-5 my-3 bg-light rounded w-50">
    <div class="container">
        <div>
            <h4 class="font-weight-light">Objet :</h3>
            <input type="text" name="objet" id="objet" class="form-control">
        </div>
        <div class="mt-2">
            <h4 class="font-weight-light">Message :</h3>
            <textarea name="msg" id="msg" cols="30" rows="5" class="form-control" placeholder="text..."></textarea>
        </div>
    </div>
</div>
</div>
<div class="div text-center">
    <button class="btn btn-warning">Envoyer</button> 
    <a href="./index.php?page=Ctrl_contacts" class="btn btn-dark">Revenir</a>
</div>
