<?php require_once __DIR__ . "/header.php"; ?>

<div class="az-content-body pd-lg-l-40 pt-4 d-flex flex-column">
  
  <div class="az-content-breadcrumb">
    <span>Posts</span>
    <span>Listar</span>
  </div>

  <h2 class="az-content-title">Listagem de Posts</h2>

  <div class="table-responsive">
    <table class="table table-bordered mg-b-0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Autor</th>
          <th>Data</th>
          <th>Categoria</th>
          <th>#</th>
  
        </tr>
      </thead>
      <tbody>

      <?php foreach($data['posts'] as $post): ?>
        <tr>
          <th scope="row"><?= $post['idPosts'] ?></th>
          <td><?= $post['titulo']?></td>
          <td><?= $post['autor']?></td>
          <td><?= $post['data']?></td>
          <td><?= $post['tag']?></td>
          <td>
            <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=page_posts_editar&id=<?= $post['idPosts']; ?>">editar</a> 
            <a href="#" onclick="return confirm('Deseja excluir?');">excluir</a>
          </td>
        </tr>
      <?php endforeach; ?>
        
      </tbody>
    </table>
  </div><!-- table-responsive -->

  <div class="ht-40"></div>

</div><!-- az-content-body -->

<?php require_once __DIR__ . "/footer.php"; ?>