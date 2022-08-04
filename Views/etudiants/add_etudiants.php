<p>repudiandae explicabo consequatur veritatis dolores fuga consequuntur maxime. Quisquam excepturi voluptates dicta illo, doloribus nesciunt pariatur asperiores ratione consectetur non perferendis nostrum nisi dolorem aut quibusdam aliquam consequuntur? Adipisci cum consequuntur officiis neque cupiditate necessitatibus. Nesciunt odio molestias deleniti tenetur atque iure laudantium quas architecto alias. Fugit officia tempora hic dicta atque illo id, laboriosam, molestias quibusdam, dolorem totam eos laudantium voluptatum at ut alias. Corporis nobis modi, temporibus animi, quisquam consequuntur autem odit fugiat dicta deserunt pariatur assumenda itaque, repudiandae doloribus. Perspiciatis facilis molestiae optio quia necessitatibus minus atque. Rem commodi, placeat repudiandae officiis quia ea quos voluptas consequatur adipisci culpa qui impedit incidunt, non neque quisquam rerum necessitatibus tempora corporis, similique vel exercitationem dolorum illum! Amet, quo? Dolorum, assumenda illum! Provident quasi nulla nihil, officia a eaque dolorum rerum officiis itaque repellat quibusdam iste, totam sapiente recusandae. Quasi explicabo nobis voluptatibus quae sapiente aliquam tempore quisquam consectetur ipsa aliquid nulla repellendus iure ad aspernatur voluptates repudiandae dignissimos, recusandae, laudantium nesciunt totam quos perspiciatis asperiores veniam pariatur. Veritatis, aut ipsa quos tempora eveniet cupiditate distinctio deserunt. Numquam corporis earum eaque exercitationem aliquid fuga nisi quo dolore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quae temporibus at magnam. Sint nisi odit doloribus rerum assumenda id! Deleniti adipisci, repellat nam quisquam at ex? Dolor dolore nam ad sunt amet explicabo minima sapiente. Iste non, quas tempora a quod sit atque debitis accusamus dolores ut in deserunt soluta magni! Nostrum delectus dignissimos vero? Illum a magnam dolorem perferendis quidem rerum commodi vero officia? Debitis sed, iste earum sit cumque a, labore quaerat quibusdam atque, vitae nostrum unde voluptas. Sunt veniam debitis dolorem repellat voluptate perspiciatis beatae, nam, at deleniti impedit non! At iusto libero cupiditate odit ipsa natus incidunt sequi ab saepe, placeat accusamus? Voluptates, aperiam. Esse aliquid sapiente voluptatum amet illo? Possimus obcaecati dignissimos culpa minima aperiam eos, architecto perspiciatis officiis fugit amet quae animi aut est quo mollitia omnis voluptatum totam beatae sunt veritatis! Corrupti, ipsa possimus? Quae a magni, assumenda illo doloribus nostrum consequuntur praesentium beatae ducimus iusto! Autem harum quis quaerat molestias exercitationem. Perferendis eveniet, harum, officia vero ullam voluptatibus debitis optio nesciunt quibusdam ipsum dolorem? Mollitia similique a, iusto aperiam reiciendis nam nesciunt ipsum necessitatibus doloremque voluptatem velit numquam, asperiores, id architecto praesentium vel impedit iste cupiditate pariatur eius. </p>
<h2 class="text-center font-weight-light text-uppercase mt-5 pt-5">Nouveau etudiant</h2>
<hr>
<?php 
      if (isset($err)) {
        echo '<span class="text-danger h6 bold" style="font-weight: bold;">Erreur :</span> <code class="text-danger">'.$err.'</code>';
      }   
?>
<div class="container w-75">
<form action="./index.php?page=Ctrl_etudiants&action=add" method="post" class="form" enctype="multipart/form-data">
    <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
    <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" required class="form-control"><br>
    <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" required><br>
    <label for="date_naissance" class="form-label">Date de naissance :</label><input type="date" name="date_naissance" id="date_naissance" required class="form-control"><br>
    <label for="tel">Telephone :</label><input type="number" name="tel" id="tel" class="form-control" min=1 required><br>
    <label for="cin">CIN :</label><input type="number" name="cin" id="cin" class="form-control" min=1 required><br>
    <label for="comptefb" class="form-label">Nom sur fb :</label><input type="text" name="comptefb" id="comptefb" required class="form-control"><br>
    <label for="photo" class="form-label">Photo :</label><input type="file" name="photo" id="photo" required class="form-control"><br>
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