<?php require_once __DIR__ . "/header.php"; ?>

<div class="az-content-body pd-lg-l-40 pt-4 d-flex flex-column">
  
  <div class="az-content-breadcrumb">
    <span>Categorias</span>
    <span>Cadastrar</span>
  </div>

  <h2 class="az-content-title">Cadastro de Categorias</h2>

  <form method="POST" action="<?= $data['base_path']?>/app/controllers/AdminController.php?action=categorias_cadastrar">

    <div class="row mb-4">
      <div class="col-lg">
        <input class="form-control" placeholder="Tag" type="text" name="campo_tag">
      </div><!-- col -->
    </div>
    
    <div class="row mb-4">
      <div class="col">
        
      </div><!-- col -->
    </div><!-- row -->

    <hr class="mg-y-10">

    <div class="row row-sm">
      <div class="col-sm-7 col-md-6 col-lg-4">
        <button class="btn btn-block btn-az-primary">Salvar cadastro</button>
      </div>
    </div>



  </form>

  <div class="ht-40"></div>

</div><!-- az-content-body -->

<?php require_once __DIR__ . "/footer.php"; ?>