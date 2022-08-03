
<div class="tete">

<h1 style="margin-top: 70px;"></h1>  

 <section class="mb-5">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <img src="/mine/PHP/assets/img/esti.jpg" class="img-fluid mt-5 pt-5" style="width:100px" alt="logo">
        </div>
      </div>

      <div class="col-md-12">
        <h1>
          Bienvenue à
        </h1>
        <img src="/mine/PHP/assets/css/WAVES.svg" alt="img_sgv" class="mt-3 text-light">
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
