<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/js/bootstrap.js">
    <link rel="stylesheet" href="./assets/js/jquery.min.js">
    <link rel="stylesheet" href="./assets/js/popper.min.js">
    <link rel="stylesheet" href="./assets/css/font-awesome.css">
    <link rel="stylesheet" href="./assets/css/floating-labels.css">
    <link rel="stylesheet" href="./assets/css/offcanvas.css">
    <link rel="stylesheet" href="./assets/js/offcanvas.js">
    <title>Examen PHP</title>

</head>
<body style="background-color: #2e292a;">

<form action="./index.php" method="post" class="w-75 mt-5">
  <input type="hidden" name="auth" value="ok">
        <div class="container py-5 mt-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block" >
                    <img src="./assets/img/VECTOR.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <div>
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0"><img src="./assets/img/G_logo_esti.jpg" alt="" class="img-fluid mr-5" style="width:200px"></span>
                        </div>
                          <?php 
                            if (isset($err)) {
                               echo '<span class="text-danger h6 bold" style="font-weight: bold;">Erreur :</span> <code class="text-danger">'.$err.'</code>';
                            }
                          ?>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Se connecter sur votre compte</h5>
                        <div class="form-outline mb-4">
                        <div class="small text-muted">Votre status </div>
                          <select name="status" type="email" id="form2Example17" class="form-control form-control-lg">
                              <option value="admin">Administrateur</option>
                                <option value="prof">Prof</option>
                                <option value="etudiant">Etudiant</option>
                          </select>
                        </div>
                        <div class="form-outline mb-4">
                          <input name="login" type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Addresse email" required/>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input name="pass" type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Mot de passe" required/>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit" name="connect">Se connecter</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Mot de passe oublié?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Pas de compte?
                        <a href="#!" class="text-info">S'inscrire</a></p>
                        <a href="#!" class="small text-muted">Bienvenu à ESTI.</a>
                        
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

</body></html>


