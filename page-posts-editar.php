<?php require_once __DIR__ . "/header.php"; ?>

<div class="az-content-body pd-lg-l-40 pt-4 d-flex flex-column">

  <div class="az-content-breadcrumb">
    <span>Posts</span>
    <span>Editar</span>
  </div>

  <h2 class="az-content-title">Editar Post</h2>

  <?php //print_r($data['post']); ?>

  <form method="POST" action="<?= $data['base_path']?>/app/controllers/AdminController.php?action=posts_atualizar">

    <input type="hidden" name="campo_idPosts" value="<?= $data['post']->getIdPosts(); ?>">

    <div class="row mb-4">
      <div class="col-lg">
        <input class="form-control" placeholder="Autor" type="text" name="campo_autor" value="<?= $data['post']->getAutor(); ?>"
 readonly>
      </div><!-- col -->
    </div>

    <div class="row mb-4">
      <div class="col-lg">
        <input class="form-control" placeholder="Titulo" type="text" required name="campo_titulo" value="<?= $data['post']->getTitulo(); ?>"
>
      </div><!-- col -->
    </div>

    <div class="row mb-4">
      <div class="col-lg">
        <textarea rows="3" class="form-control" placeholder="Resumo" name="campo_resumo"><?= $data['post']->getResumo(); ?></textarea>
      </div><!-- col -->
    </div>
    

    <div class="row mb-4">
      <div class="col-lg">
        <textarea rows="10" class="form-control" name="campo_texto"><?= $data['post']->getTexto(); ?></textarea>
      </div><!-- col -->
    </div>
    
    <div class="row mb-4">
      <div class="col">
      

      <select required class="form-control select2-no-search" name="campo_categoria">
        
        <option value="<?= $data['post']->getTag(); ?>"><?= $data['post']->getTag(); ?></option>

        <?php foreach($data['categories'] as $category): ?>
          <option value="<?= $category['tag'] ?>"><?= $category['tag'] ?></option>
        <?php endforeach; ?>

      </select>

      </div><!-- col -->
    </div><!-- row -->

    <hr class="mg-y-10">

    <div class="row row-sm">
      <div class="col-sm-7 col-md-6 col-lg-4">
        <button class="btn btn-block btn-az-primary">Salvar edição</button>
      </div>
    </div>



  </form>

  <div class="ht-40"></div>

</div><!-- az-content-body -->

<?php require_once __DIR__ . "/footer.php"; ?>