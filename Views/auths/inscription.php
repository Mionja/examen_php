<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/PHP/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/PHP/assets/css/signin.css">
    <title>Examen PHP</title>

</head>
<body>

<form action="/PHP/index.php?auth=i" method="POST" class="form-signin">
      <img class="mb-4" src="/PHP/assets/img/esti.jpg" alt="" width="72" height="72">
      
      <h4 class="h3 mb-3 font-weight-normal">Contactez l'administration pour s'inscrire</h4>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Votre email" required>
      <textarea type="text" name="message" class="form-control" placeholder="Votre message" required class="pt-3"></textarea>

      <button class="btn btn-lg btn-primary btn-block mt-5" type="submit">Envoyer</button>
      <a href="/PHP/index.php" class="btn btn-sm btn-outline-dark mt-2">Authentification</a>
      <p class="mt-5 mb-3 text-muted ml-5 pl-5">© 2021-2022</p>
    </form>

</body></html>