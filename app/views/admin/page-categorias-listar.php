<?php require_once __DIR__ . "/header.php"; ?>

<div class="az-content-body pd-lg-l-40 pt-4 d-flex flex-column">
  
  <div class="az-content-breadcrumb">
    <span>Categorias</span>
    <span>Listar</span>
  </div>

  <h2 class="az-content-title">Listagem de Categorias</h2>

  <div class="table-responsive">
    <table class="table table-bordered mg-b-0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tag</th>
          <th>#</th>
  
        </tr>
      </thead>
      <tbody>

      <?php foreach($data['categories'] as $category): ?>
        <tr>
          <th scope="row"><?= $category['idCategory'] ?></th>
          <td><?= $category['tag']?></td>
          <td>
            <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=page_categorias_editar&id=<?= $category['idCategory']; ?>">editar</a> 
            <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=categorias_excluir&id=<?= $category['idCategory']; ?>" onclick="return confirm('Deseja excluir?');">excluir</a>
          </td>
        </tr>
      <?php endforeach; ?>
        
      </tbody>
    </table>
  </div><!-- table-responsive -->

  <div class="ht-40"></div>

</div><!-- az-content-body -->

<?php require_once __DIR__ . "/footer.php"; ?>