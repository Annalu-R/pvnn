<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/PostsRepository.php";
require_once __DIR__ . "/../repository/CategoryRepository.php";
require_once __DIR__ . "/../repository/UserRepository.php";

class LoginController {

    private $base_path;
    private $postRepository;
    private $categoryRepository;
    private $userRepository;

	function __construct(){

        $this->postRepository = new PostsRepository();
        $this->categoryRepository = new CategoryRepository();
        $this->userRepository = new UserRepository();

        // ALTERAR PARA O CAMINHO DO SEU COMPUTADOR
        $this->base_path = "http://localhost:8080/pvnn";
		
        if(isset($_POST["action"])){
			$action = $_POST["action"];
		}else if(isset($_GET["action"])){
			$action = $_GET["action"];
		}

		if(isset($action)){
			$this->callAction($action);
		} else {
			$this->page_login();
		}
	}

    public function callAction(string $functionName = null){

        if (method_exists($this, $functionName)) {
            $this->$functionName();
        
        } else if(method_exists($this, "preventDefault")) {
            $met = "preventDefault";
            $this->$met();
        
        } else {
            throw new BadFunctionCallException("Usecase not exists");
        }
    }

    public function loadView(string $path, array $data = null, string $msg = null){
        $caminho = __DIR__ . "/../views/" . $path;
 
        if(file_exists($caminho)){
             include $caminho;
        } else {
            print "Erro ao carregar a view";
        }
    }

    private function page_login(){
        
        $data['base_path'] = $this->base_path;

        $this->loadView("admin/page-usuarios-login.php", $data, null);
    }

    private function page_usuarios_cadastro(){
        
        $data['base_path'] = $this->base_path;
        
        $this->loadView("admin/page-usuarios-cadastro.php", $data, null);
    }

    public function logar(){
        
        $data['base_path'] = $this->base_path;

        $user = new UserModel();

        $user->setEmail($_POST['campo_email']);
        $user->setSenha($_POST['campo_senha']);

        $user = $this->userRepository->userLogin($user);

        if($user == false || sizeof($user) < 1){
            $this->loadView("admin/page-usuarios-login.php", $data, "usuário ou senha inválidos");
        } else {

            $_SESSION["esta_logado"] = true;
            $_SESSION["usuario"]     = $user;

            header("location: " . $this->base_path . "/app/controllers/AdminController.php?action=page_posts_listar");
        }
    }


    public function logout(){

        unset($_SESSION['esta_logado']);
        unset($_SESSION['usuario']);

        session_destroy();

       $this->page_login();
        
    }

    private function preventDefault() {
        print "Ação indefinida...";
    }
}

$login = new LoginController();
