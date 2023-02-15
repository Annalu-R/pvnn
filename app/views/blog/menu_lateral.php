<div class="col-3">
  <nav class="menu-lateral rounded-1">
    <div class="pt-6">
      <ul class="nav column">


        <li class="nav-item">
          <a class="nav-link active" href="<?= $data['base_path'] ?>/app/controllers/BlogController.php?action=page_posts">
            <i class="fa-solid fa-file fa-2xs"></i>Posts
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">
            <i class="fa-solid fa-tag fa-2xs"></i>Categorias

            <ul class="sublist">
              <?php foreach ($data['categories'] as $category) : ?>

                <li>
                  <a href="<?= $data['base_path'] ?>/app/controllers/BlogController.php?action=page_posts_category&category=<?= $category['tag'] ?>">
                    <i class="fa-solid fa-tag fa-2xs"></i> <?= $category['tag'] ?>
                  </a>
                </li>

              <?php endforeach; ?>

            </ul>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>