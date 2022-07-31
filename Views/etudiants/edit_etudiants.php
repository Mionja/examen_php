<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat ullam quia ipsam praesentium dolores et commodi ducimus iusto totam ex mollitia perspiciatis, voluptatem quo omnis fugit laborum animi eligendi exercitationem sapiente. Quae repellat blanditiis, mollitia impedit, consequatur obcaecati aperiam a voluptates soluta debitis esse tenetur. Voluptatum, tenetur fugiat provident aspernatur amet officiis rerum optio? Laudantium voluptate rem porro, explicabo expedita atque nostrum. Eum sapiente at odit deleniti ullam ex accusantium voluptatibus mollitia molestias nulla, atque incidunt totam omnis consequatur ut iusto officia repudiandae vero. Ex vel libero ad dignissimos a expedita perspiciatis numquam suscipit, explicabo voluptates minus, at dolores tempore ea aspernatur eaque facere quam, dolorem fuga maiores! Consequuntur, tempore ullam! Eligendi tenetur earum, iste maiores vitae vel debitis expedita! Quibusdam, pariatur? Modi provident nulla, accusantium cupiditate magnam tempore quasi sapiente error fuga tempora blanditiis laboriosam iusto qui eos consectetur magni veniam quas minima sed quos deleniti sequi ad? Soluta vero officia, magni odit quisquam unde dolorum, autem sequi tempore error aperiam non dolores? Blanditiis nemo veritatis quo fugit animi sapiente corrupti possimus sed facilis dolorum voluptatem maxime pariatur optio officia natus neque dolores alias dolor harum, odit voluptates. Facilis suscipit ipsam consequuntur doloremque adipisci modi, facere cum ipsum odio odit earum qui consequatur natus dignissimos. Accusantium similique debitis eaque corporis, praesentium dolores cum labore voluptas, dolor, reprehenderit aspernatur officia. Dolore id doloribus dolor adipisci, dignissimos facilis praesentium aut est nulla illo sed ipsa at aperiam eum blanditiis distinctio hic voluptas explicabo et minus culpa dicta. Aut eius sunt deleniti minima voluptatibus possimus, saepe neque magni modi enim accusamus consequuntur, corrupti blanditiis quisquam voluptate velit corporis quis dolore tempore. Repellendus nemo aliquid inventore voluptas sunt architecto minus perspiciatis temporibus aut, repellat corrupti possimus? Officia recusandae placeat reiciendis tempora cumque eos, dolores ducimus, saepe error laboriosam corrupti quidem quam vero ea?</p>
<div class="h2 text-center font-weight-light text-uppercase my-3">Modification etudiant</div>
<hr>
<div class="container w-75">
<form action="/mine/PHP/index.php?page=Ctrl_etudiants&action=edit" method="post" class="form" enctype="multipart/form-data">
    <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control" value="<?= $etudiant['nom']?>"><br>
    <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" required class="form-control" value="<?= $etudiant['prenom']?>"><br>
    <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" required value="<?= $etudiant['email']?>"><br>
    <label for="date_naissance" class="form-label">Date de naissance :</label><input type="date" name="date_naissance" id="date_naissance" required class="form-control" value="<?= $etudiant['date_naissance']?>"><br>
    <label for="tel">Telephone :</label><input type="number" name="tel" id="tel" class="form-control" min=1 required value="<?= $etudiant['tel']?>"><br>
    <label for="cin">CIN :</label><input type="number" name="cin" id="cin" class="form-control" min=1 required value="<?= $etudiant['cin']?>"><br>
    <label for="comptefb" class="form-label">Nom sur fb :</label><input type="text" name="comptefb" id="comptefb" required class="form-control" value="<?= $etudiant['comptefb']?>"><br>
    <label for="photo" class="form-label">Photo :</label><input type="file" name="photo" id="photo" required class="form-control" value="<?= $etudiant['photo']?>"><br>
    <label for="password" class="form-label">Password :</label><input type="password" name="password" id="password" required class="form-control" value="<?= $etudiant['password']?>"><br>
    <div class="text-center">
        <div class="mb-3">
        <button type="submit" name="add" class="btn btn-primary">Enregistrer</button>
        </div>
        <div class="col">
        <a href="/mine/PHP/index.php?page=Ctrl_etudiants" class="btn btn-dark">Liste des etudiants</a>
        </div>
    </div>
</form>
</div>