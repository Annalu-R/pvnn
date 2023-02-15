<!DOCTYPE html>
<html lang="en">
  <head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PVNN</title>

    <!-- azia CSS -->
    <link rel="stylesheet" href="<?= $data['base_path'] ?>/public/admin/css/azia.css">
    
    <style>
      body {
        background: url("https://i.pinimg.com/originals/31/c3/3c/31c33c2a5209e8301532bd87ef9ad8df.jpg") no-repeat center center fixed;
        background-size: cover;
      }

      .az-card-signin {
        background: #fff;
      }

      .az-card-signin {
        height: 450px;
      }

      .warning {
        color: red;
      }

    </style>

  </head>
  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        
        <!-- <h1 class="az-logo">PVNN</h1>-->        
        <div class="az-signin-header">
          <h2>Bem vindo novamente!</h2>

          <div class="warning my-3"><?= isset($msg)? $msg : "" ?></div>
          
          <form method="POST" action="<?= $data['base_path'] ?>/app/controllers/LoginController.php?action=logar">
            
            <div class="form-group">
              <label>e-mail</label>
              <input type="text" name="campo_email" class="form-control" placeholder="Informe seu e-mail">
            </div><!-- form-group -->
            
            <div class="form-group">
              <label>senha</label>
              <input type="password" name="campo_senha" class="form-control" placeholder="Informe sua senha">
            </div><!-- form-group -->

            <button class="btn btn-az-primary btn-block">logar</button>
            
          </form>
        </div><!-- az-signin-header -->
        
        <div class="az-signin-footer">
          <p>Não tem uma conta? <a href="<?= $data['base_path'] ?>/app/controllers/LoginController.php?action=page_usuarios_cadastro">Criar uma conta agora!</a></p>
        </div><!-- az-signin-footer -->

      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

  </body>
</html>
