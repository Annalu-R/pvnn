<div id="coluna-lateral-esquerda" class="az-content-left az-content-left-components p-0  pl-4 pt-4">
    <div class="component-item">
        <label>Posts</label>
        <nav class="nav flex-column">
            <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=page_posts_listar" class="nav-link">Listar</a>
            <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=page_posts_cadastrar" class="nav-link">Cadastrar</a>
        </nav>
        
        <label>Categorias</label>
        <nav class="nav flex-column">
        <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=page_categorias_listar" class="nav-link">Listar</a>
            <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=page_categorias_cadastrar" class="nav-link">Cadastrar</a>
        </nav>
        <label>Usuários</label>
        <nav class="nav flex-column">
        <a href="<?= $data['base_path']?>/app/controllers/AdminController.php?action=page_usuarios_listar" class="nav-link">Listar</a>
        </nav>
    </div><!-- component-item -->

</div><!-- az-content-left -->