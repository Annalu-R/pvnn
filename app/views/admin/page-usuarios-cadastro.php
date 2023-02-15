<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>PVNN</title>

  <!-- vendor css -->
  <link href="<?= $data['base_path'] ?>/public/admin/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= $data['base_path'] ?>/public/admin/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= $data['base_path'] ?>/public/admin/lib/typicons.font/typicons.css" rel="stylesheet">

  <!-- azia CSS -->
  <link rel="stylesheet" href="<?= $data['base_path'] ?>/public/admin/css/azia.css">

  <style>
    .az-column-signup-left {
      background: url("https://i.pinimg.com/originals/31/c3/3c/31c33c2a5209e8301532bd87ef9ad8df.jpg") no-repeat center center fixed;
      background-size: cover;
    }
  </style>

</head>

<body class="az-body">

  <div class="az-signup-wrapper">
    
    <div class="az-column-signup-left">
    </div><!-- az-column-signup-left -->
    
    <div class="az-column-signup">
      <h1 class="az-logo">PVNN</h1>
      <div class="az-signup-header">
        <h2>Cadastre-se</h2>
        <h4>Leverá apenas um minuto!</h4>

        <form method="post" action="<?= $data['base_path'] ?>/app/controllers/UserController.php?action=create">
          
          <div class="form-group">
            <label>nome completo</label>
            <input name="campo_nome" type="text" class="form-control">
          </div><!-- form-group -->

          <div class="form-group">
            <label>username</label>
            <input name="campo_username" type="text" class="form-control">
          </div><!-- form-group -->
          
          <div class="form-group">
            <label>email</label>
            <input name="campo_email" type="mail" class="form-control">
          </div><!-- form-group -->
          
          <div class="form-group">
            <label>senha</label>
            <input name="campo_senha" type="password" class="form-control">
          </div><!-- form-group -->
          
          <button class="btn btn-az-primary btn-block">criar conta</button>

        </form>
      </div><!-- az-signup-header -->
      <div class="az-signup-footer">
        <p>Já possui uma conta? <a href="<?= $data['base_path'] ?>/app/controllers/LoginController.php?action=page_login">Logar!</a></p>
      </div><!-- az-signin-footer -->
    </div><!-- az-column-signup -->
  </div><!-- az-signup-wrapper -->


</body>

</html>