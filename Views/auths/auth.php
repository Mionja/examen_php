<h2>Connexion</h2>
<form action="../../index.php?auth=test" method="post">

    Choisir votre status<select class="form-select" aria-label="Default select example" name="status">
            <option value="prof">Prof</option>
            <option value="etudiant">Etudiant</option>
    </select>

    <label for="login">Login</label><input type="text" name="login">
    <label for="pass">Mots de passe</label><input type="text" name="pass">
    <button type="submit">Se connecter</button>
</form>