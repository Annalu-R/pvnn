<!DOCTYPE html>
<html lang="en">

<head >
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="<?= $data['base_path'] ?>/public/assets/styles/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $data['base_path'] ?>/public/assets/styles/blog.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

  <title><?= $data['titulo']  ?></title>
</head>

<body class="background">

  <div class="container">
    <header class="d-flex flex-column flex-md-row align-items-center py-4">

      <div class="logo">
        <a href="<?= $data['base_path'] ?>" class="d-flex align-items-center text-dark text-decoration-none">
          <img src="<?= $data['base_path'] ?>/public/imagens/logo.jpg" class="rounded float-start" width="150">
        </a>
      </div>


      <div class="titulo-subtitulo">
        <h1 class="titulo">Blog PVNN</h1>
        <h5 class="subtitulo">"Até que a última estrela se apague, estarei com você"</h5>
      </div><!-- /.titulo-subtitulo -->


      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-light text-decoration-none" class="nav-link active" href="<?= $data['base_path']?>"><i class="fa-solid fa-house fa-2xs"></i> Início </a>
        <a class="me-3 py-2 text-light text-decoration-none" class="nav-link active" href="<?= $data['base_path']?>/app/controllers/BlogController.php?action=page_autora"><i class="fa-solid fa-pen-fancy fa-2xs"></i> Autora </a>
        <a class="me-3 py-2 text-light text-decoration-none" class="nav-link active" href="<?= $data['base_path']?>/app/controllers/BlogController.php?action=page_book">Livro</a>
        <a class="me-3 py-2 text-light text-decoration-none" href="#">Perfil</a>
        <a class="me-3 py-2 text-light text-decoration-none" href="#">Contato</a>
        <a class="py-2 text-light text-decoration-none" href="<?= $data['base_path'] ?>/app/controllers/AdminController.php?action=index"> Admin </a>
      </nav>

    </header>
  </div><!--/.container -->