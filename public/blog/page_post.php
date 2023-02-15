<?php include "header.php"; ?>

<div id="post" class="container ">

  <div class="row">

    <div class="main-content col-9 ">

      <div class="border p-4 blog-post rounded-1"> 

        <!-- CASO NÃO EXISTAM POSTAGENS, EXIBE A MSG -->
        <?php if (false) : ?>
          <article class="blog-post rounded-1" style="text-align: center;">Nenhuma publicação cadastrada.</article>
        <?php endif; ?>

        <h2><?= $data['post']->getTitulo(); ?></h2>
        
        <?php $dataFormatada = new DateTime($data['post']->getData()); ?>

        <p class="data-autor mb-3 mt-3 text-muted">
                <?= $dataFormatada->format('d/M/Y'); ?> por 
                <a href="#" class="data-autor"><?= $data['post']->getAutor() ?></a>
        </p>

        <div class="conteudo-post">
          <?= $data['post']->getTexto(); ?>
        </div>


        <hr />

        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
        
      </div>
    
    </div>
    <!-- /.main-content .col-9-->

    <?php include "menu_lateral.php"; ?>

  </div>
  <!-- /.content .row -->

</div>
<!-- /.container -->


<?php include "footer.php"; ?>