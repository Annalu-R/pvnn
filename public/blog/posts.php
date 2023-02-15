<?php include "header.php"; ?>

<div id="posts" class="container ">

  <div class="row">

    <div class="main-content col-9">

        
        <!-- CASO EXISTA CATEGORIA NA URL, ENTAO O TITULO DA PAGINA REFLETE ISSO -->
        <?php if (isset($_GET['category']) ) : ?>
          <h3 class="mb-5">Postagens da categoria "<?= $_GET['category'] ?>"</h3>
        <?php else: ?>
          <h3 class="mb-5">Postagens do Blog</h3>
        <?php endif; ?>


        <!-- CASO NÃO EXISTAM POSTAGENS, EXIBE A MSG -->
        <?php if (sizeof($data['posts']) < 1) : ?>
          <article class="blog-post" style="font-family: 'Times New Roman', Times, serif;">Nenhuma publicação cadastrada ou nenhuma postagem com essa categoria.</article>
        <?php endif; ?>

        <!-- REPETIR POSTAGENS -->
      <?php foreach ($data['posts'] as $post) : ?>

        <?php //print_r($post); ?>

        <?php $dataFormatada = new DateTime($post['data']); ?>

        <article class="blog-post">
          <div class="border rounded mb-4 p-4">

            <!-- ### author #### -->
            <h5 class="blog-post-title"><?= $post['titulo']; ?></h5>
    
            <!-- ### data e autor ### -->
            <p class="data-autor mb-3 text-muted">
                <?= $dataFormatada->format('d/M/Y'); ?> por 
                <a href="#" class="data-autor"><?= $post['autor']; ?></a>
            </p>
    
            <!-- ### resumo ### -->
            <?php if(isset($post['resumo'])): ?>
              <p><?= $post['resumo'] ?></p>
            <?php else: ?>
              <p><?= BlogController::resumir($post['texto'], 30) ?></p>
            <?php endif ?>

            <div class=".post-rodape mt-5 row">

              <div class="col-4">
                <a href="<?= $data['base_path'] ?>/app/controllers/BlogController.php?action=page_post&id_param=<?= $post['idPosts']?>" class="btn btn-outline-primary btn-round">
                  <i class="fa-thin fa-plus"></i> saiba mais</a>
              </div>

              <!--           
              <div class="col-8" style="text-align: right;">
                  <span class="float-right">tags...</span>
              </div> 
              -->

            </div>

          </div>

        </article>

      <?php endforeach; ?>
    
    </div>
    <!-- /.main-content .col-9-->

    <?php include "menu_lateral.php"; ?>

  </div>
  <!-- /.content .row -->

</div>
<!-- /.container -->


<?php include "footer.php"; ?>