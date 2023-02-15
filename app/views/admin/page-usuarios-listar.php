<?php require_once __DIR__ . "/header.php"; ?>

<div class="az-content-body pd-lg-l-40 pt-4 d-flex flex-column">
  
  <div class="az-content-breadcrumb">
    <span>Usuários</span>
    <span>Listar</span>
  </div>

  <h2 class="az-content-title">Listagem de Usuários</h2>

  <div class="table-responsive">
    <table class="table table-bordered mg-b-0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Username</th>
          <th>E-mail</th>
          <th>Data de nascimento</th>
          <th>Tipo de usuário</th>
          <th>#</th>
  
        </tr>
      </thead>
      <tbody>

      <?php foreach($data['usuarios'] as $user): ?>
        <tr>
          <th scope="row"><?= $user['id'] ?></th>
          <td><?= $user['nome']?></td>
          <td><?= $user['username']?></td>
          <td><?= $user['email']?></td>
          <td><?= $user['dataNascimento']?></td>
          <td><?= $user['tipoUsuario']?></td>
          <td>
            <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=page_usuarios_editar&id=<?= $user['id']; ?>">editar</a> 
            <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=usuarios_excluir&id=<?= $user['id']; ?>" onclick="return confirm('Deseja excluir?');">excluir</a>
          </td>
        </tr>
      <?php endforeach; ?>
        
      </tbody>
    </table>
  </div><!-- table-responsive -->

  <div class="ht-40"></div>

</div><!-- az-content-body -->

<?php require_once __DIR__ . "/footer.php"; ?>