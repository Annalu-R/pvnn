<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../repository/PostsRepository.php";
require_once __DIR__ . "/../repository/CategoryRepository.php";

class BlogController {

    private $base_path;
    private $postRepository;
    private $categoryRepository;

	function __construct(){

        $this->postRepository = new PostsRepository();
        $this->categoryRepository = new CategoryRepository();

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
			$this->page_home();
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
        $this->loadView("admin/page-usuarios-login.php", null, null);
    }

    private function page_usuarios_cadastro(){
        $this->loadView("admin/page-usuarios-cadastro.php", null, null);
    }

    private function page_posts_listar(){

        $posts = $this->postRepository->findAll();
       
        $data['base_path'] = $this->base_path;
        $data['posts'] = $posts;

        $this->loadView("admin/page-posts-listar.php", $data , null);
    }

    private function page_posts_editar() {

        $id = $_GET['id'];

        $post = $this->postRepository->findPostById($id);

        $data['base_path'] = $this->base_path;
        $data['categories'] = $this->categoryRepository->findAll();
        $data['post'] = $post;

        $this->loadView("admin/page-posts-editar.php", $data ,null);
    }

    private function page_posts_cadastrar(){

        $data['base_path'] = $this->base_path;
        $data['categories'] = $this->categoryRepository->findAll();

        $this->loadView("admin/page-posts-cadastrar.php", $data ,null);
    }

    private function posts_cadastrar(){
        
        $posts = new PostsModel();

		$posts->setAutor($_POST["campo_autor"]);
        $posts->setResumo($_POST["campo_resumo"]);
        $posts->setTitulo($_POST["campo_titulo"]);
		$posts->setTexto($_POST["campo_texto"]);
        $posts->setTag($_POST["campo_tipoPostagem"]);
        $posts->setData(date("Y/m/d"));

        $postsRepository = new PostsRepository();
        $idPosts = $postsRepository->create($posts);

        // if($idPosts){
		// 	$msg = "Registro inserido com sucesso.";
		// }else{
		// 	$msg = "Erro ao inserir o registro no banco de dados.";
		// }

        $this->page_posts_listar();
    }

    private function posts_atualizar(){
        $posts = new PostsModel();

		$posts->setIdPosts($_POST["campo_idPosts"]);
		$posts->setAutor($_POST["campo_autor"]);
        $posts->setTitulo($_POST["campo_titulo"]);
		$posts->setTexto($_POST["campo_texto"]);
		$posts->setResumo($_POST["campo_resumo"]);
        $posts->setTag($_POST["campo_categoria"]);
        $posts->setData(date("Y/m/d"));

        $postsRepository = new PostsRepository();
        $atualizou = $postsRepository->update($posts);
        
        if($atualizou){
			$msg = "Registro atualizado com sucesso.";
		}else{
			$msg = "Erro ao atualizar o registro no banco de dados.";
		}
		// include_once "cadastrar.php";

        //$this->findAll($msg);    
        $this->page_posts_listar();
    
    }

    private function preventDefault() {
        print "Ação indefinida...";
    }

    public static function resumir($phrase, $max_words) {
        $phrase_array = explode(' ',$phrase);
        if(count($phrase_array) > $max_words && $max_words > 0)
          $phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
        return $phrase;
      }
}

$post = new BlogController();
