<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/UserRepository.php";

$cUsuario = new UserController();

class UserController{

    private $base_path;

	function __construct(){


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
			$msg = "Nenhuma acao a ser processada...";
            print_r($msg);
			//include_once "index.php";
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
        // echo("msg=");
        // print_r($msg);
 
        if(file_exists($caminho)){
             require $caminho;
        } else {
            print "Erro ao carregar a view";
        }
    }

    private function create(){
        
        $user = new UserModel();

		$user->setNome($_POST["campo_nome"]);
        $user->setUsername($_POST["campo_username"]);
		$user->setEmail($_POST["campo_email"]);
        $user->setSenha($_POST["campo_senha"]);
        
        //$user->setDataNascimento($_POST["dataNascimento"]);
        $user->setDataNascimento(date("Y/m/d"));
        $user->setTipoUser("comum");

        $userRepository = new UserRepository();
        $id = $userRepository->create($user);

        if($id){
			$msg = "Registro inserido com sucesso.";
		}else{
			$msg = "Erro ao inserir o registro no banco de dados.";
		}

        header("location: ". $this->base_path. "/app/controllers/LoginController.php?action=page_login");
    }

    private function loadFormNew(){
        $this->loadView("users/formCadastroUser.php", null,"teste");
    }    

    private function findAll(string $msg = null){
        
        $userRepository = new UserRepository();

        $user = $userRepository->findAll();

        $data['titulo'] = "listar usu??rios";
        $data['usuarios'] = $user;

        $this->loadView("users/Userlist.php", $data, $msg);
    }

    private function findUserById(){
        $idParam = $_GET['id'];

        $userRepository = new UserRepository();
        $user = $userRepository->findUserById($idParam);

        print "<pre>";
        print_r($user);
        print "</pre>";
    }

    private function deleteUserById(){
        $idParam = $_GET['id'];
        $userRepository = new UserRepository();    

        $qt = $userRepository->deleteById($idParam);
        if($qt){
			$msg = "Registro exclu??do com sucesso.";
		}else{
			$msg = "Erro ao excluir o registro no banco de dados.";
		}
        $this->findAll($msg);
    }

    private function edit(){
        $idParam = $_GET['id'];
        $userRepository = new UserRepository(); 
        $user = $userRepository->findUserById($idParam);
        $data['user'] = $user;

        $this->loadView("users/formEditaUser.php", $data);
    }

    private function update(){
        $user = new UserModel();

		$user->setId($_GET["id"]);
		$user->setNome($_POST["nome"]);
		$user->setEmail($_POST["email"]);
        $user->setSenha($_POST["senha"]);
        $user->setUsername($_POST["userame"]);
        $user->setDataNascimento($_POST["dataNascimento"]);
        $user->setTipoUser($_POST["tipoUser"]);

        $userRepository = new UserRepository();
        //print_r($user);
        $atualizou = $userRepository->update($user);
        
        if($atualizou){
			$msg = "Registro atualizado com sucesso.";
		}else{
			$msg = "Erro ao atualizar o registro no banco de dados.";
		}
		// include_once "cadastrar.php";

        $this->findAll($msg);        
    }

    private function preventDefault() {
        print "A????o indefinida...";
    }
}
