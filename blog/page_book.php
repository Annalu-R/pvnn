<?php include "header.php"; ?>

<div class="container">

  <div class="row">

    <div class="main-content home col-9">

      <div class="side1">
        <a href="<?= $data['base_path'] ?>" class="justify-content: space-between text-dark text-decoration-none">
          <img src="<?= $data['base_path'] ?>/public/imagens/side1.jpg" class="rounded float-start" width="200">
        </a>
      </div>

      <div class="col-9 mt-5 btn-link">
        <a href="https://docs.google.com/document/d/12PnG256hrfQ95FttNL4QmItsdiYasBGsvc5omiAD4U0/edit?usp=sharing" class="btn btn-outline-secundary btn-round"> Leia agora! </a>
      </div>

      <div class="side2">
        <a href="<?= $data['base_path'] ?>" class="justify-content: space-between text-dark text-decoration-none">
          <img src="<?= $data['base_path'] ?>/public/imagens/side2.jpg" class="rounded float-start" width="200">
        </a>
      </div>

    </div>
    <!-- /.main-content .col-9-->

    <?php include "menu_lateral.php"; ?>

  </div>
  <!-- /.content .row -->

</div>
<!-- /.container -->


<?php include "footer.php"; ?>