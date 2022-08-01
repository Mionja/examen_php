<header class="mb-5 pb-5">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">  
    <ul class="navbar-nav">
        <li class="nav-item">
        <a href="/mine/PHP/index.php?page=Ctrl_acceuils" class="nav-link text-light" style="font-size: 20px;">Acceuil</a>
        </li>
        <li class="nav-item ml-3">
        <a class="nav-link text-light" href="index.php?page=Ctrl_modules" style="font-size: 20px;">Modules</a>
        </li>
        <?php if ($_SESSION["status"] != 'etudiant') {?>
        <li class="nav-item ml-3">
        <a class="nav-link text-light" href="index.php?page=Ctrl_profs" style="font-size: 20px;">Profs</a>
        </li>
        <?php } ?>
        <li class="nav-item ml-3">
        <a class="nav-link text-light" href="index.php?page=Ctrl_etudiants" style="font-size: 20px;">Etudiants</a>
        </li>
        <li class="nav-item ml-3">
        <a class="nav-link text-light" href="index.php?page=Ctrl_contacts" style="font-size: 20px;">Contact</a>
        </li>
       
    </ul>
    <div class="col">
        <a href="/mine/PHP/index.php?auth=1&dec=1" class="float-right btn btn-sm btn-outline-warning">Deconnexion</a>
    </div>
    </nav>
</header>

<div class="tete">

<h1 style="margin-top: 70px;"></h1>  

 <section class="mb-5">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <img src="/mine/PHP/assets/img/esti.jpg" class="img-fluid" style="width:100px" alt="logo">
        </div>
      </div>

      <div class="col-md-12">
        <h1>
          Bienvenue à 
        </h1>

        <p class="tagline">
        ESTI
        </p>
        <a class="btn btn-dark rounded" href="#features">Accedez au menu</a>
      </div>
    </div>
  </section>

</div>

<section class="features" id="features">
    <div class="container">
      <h2 class="text-center">
        MENU
      </h2>

      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center border-dark">
            <div>
            <a href="index.php?page=Ctrl_etudiants" class="text-dark">
              <div class="feature-icon">
              <img class="bg-dark rounded-circle mt-1" src="/mine/PHP/assets/img/Nos_etudiant.png" alt="img" style="width: 80px;">
              </div>
            </div>
            <div>
              <h3>
                NOS ETUDIANTS 
              </h3></a>
              <p>
                Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center border-warning">
            <div>
            <a <?php if ($_SESSION["status"] != 'etudiant') {?>href="index.php?page=Ctrl_profs" class="text-dark"<?php } else { ?> class="text-muted"<?php } ?>>
              <div class="feature-icon">
              <img class="bg-dark rounded-circle mt-1" src="/mine/PHP/assets/img/Nos_prof.png" alt="img" style="width: 80px;">
              </div>
            </div>
            <div>
            <h3>NOS PROFS</h3></a>
              <p <?php if ($_SESSION["status"] != 'etudiant') {?>class="text-dark"<?php } else { ?> class="text-muted"<?php } ?>>
                Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center border-danger">
              <div>
                <a href="index.php?page=Ctrl_modules" class= "text-dark">
                <div class="feature-icon">
                    <img class="bg-dark rounded-circle mt-1" src="/mine/PHP/assets/img/Nos_module.png" alt="img" style="width: 80px;">
                </div>
              </div>
                <div>
                    <h3>  
                    NOS MODULES
                    </h3>
                </a>
                    <p>
                        Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                    </p>
                </div>
          </div>
        </div>
      </div>
</section>




