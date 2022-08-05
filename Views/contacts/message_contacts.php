<h3>Contact <span class="text-info"> <?= $contacts['nom'];?></span></h3>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
    <div class="row">
        <div class="col-5">
            <h4>Objet</h4>
            <input type="text" name="objet" id="" required>
        </div>
        <div class="col">
            <h4>Message</h4> 
            <textarea name="message" id="" cols="30" rows="10" required>
              Bonjour Monsieur/Madame,
              
              Je sollicite Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Tempora debitis asperiores incidunt cumque voluptatum magni labore! 
              Soluta consectetur aspernatur porro.
            </textarea>
        </div>
        </div>
    </div>
</div>
<div class="div text-center">
    <button class="btn btn-warning">Envoyer</button> 
    <a href="./index.php?page=Ctrl_contacts" class="btn btn-dark">Revenir</a>
</div>
