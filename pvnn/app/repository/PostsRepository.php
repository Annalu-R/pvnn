<?php 

    require_once __DIR__ . "/../connection/Connection.php";
    require_once __DIR__ . "/../models/PostsModel.php";

    class PostsRepository {

        public $conn;

        function __construct()
        {
            $this->conn = Connection::getConnection();
        }

        public function create(PostsModel $posts) : int {
            try {
                $query = "INSERT INTO postagens (idPosts, autor, titulo, texto, resumo, tipoPostagem, data) VALUES (:idPosts, :autor, :titulo, :texto, :resumo, :tipoPostagem, :data)";
                $prepare = $this->conn->prepare($query);

                $prepare->bindValue(":autor", $posts->getAutor());
                $prepare->bindValue(":titulo", $posts->getTitulo());
                $prepare->bindValue(":texto", $posts->getTexto());
                $prepare->bindValue(":resumo", $posts->getResumo());
                $prepare->bindValue(":tipoPostagem", $posts->getTipoPostagem());
                $prepare->bindValue(":data", $posts->getData());
                $prepare->execute();
                
                return $this->conn->lastInsertId();
                
            } catch(Exception $e) {
                    print("Erro ao inserir postagem no banco de dados");
            }
        }

        public function findAll(): array {
            $table = $this->conn->query("SELECT * FROM postagens");
            $posts  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $posts;
        }

        public function findLastFive(): array {
            $table = $this->conn->query("SELECT * FROM postagens AS p
                JOIN categorias AS c ON p.idCategoria = c.idCategory 
                ORDER BY idPosts DESC LIMIT 5");
            $posts  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $posts;
        }

        public function findPostsByCategory($category): array {
            $query = "SELECT * FROM postagens AS p
                JOIN categorias AS c ON p.idCategoria = c.idCategory 
                WHERE c.tag = :category";
            
            $prepare = $this->conn->prepare($query);

            $prepare->bindValue(":category", $category);
            
            $prepare->execute();

            $posts  = $prepare->fetchAll(PDO::FETCH_ASSOC);

            return $posts;
        }

        

        public function findPaged($limit, $page): array {

            $offsetCalculed = ($page - 1) * $limit;

            $table = $this->conn->query("SELECT * FROM postagens LIMIT $limit OFFSET $offsetCalculed");
            $posts  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $posts;
        }

        public function findPostById(int $id) {
            $query = "SELECT * FROM postagens WHERE idPosts = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(1, $id, PDO::PARAM_INT);

            if($prepare->execute()){
                $posts = $prepare->fetchObject("PostsModel");
            } else {
                $posts = null;
            }
            return $posts;
        }

        public function update(PostsModel $posts) : bool {
            $query = "UPDATE postagens SET autor = ?, titulo = ?, texto = ?, resumo = ?, tipoPostagem = ?, data = ? WHERE idPost = ?";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(1, $posts->getAutor());
            $prepare->bindValue(2, $posts->getTitulo());
            $prepare->bindValue(3, $posts->getTexto());
            $prepare->bindValue(4, $posts->getResumo());
            $prepare->bindValue(5, $posts->getTipoPostagem());
            $prepare->bindValue(6, $posts->getData());
            $prepare->bindValue(7, $posts->getIdPosts());
            $result = $prepare->execute();
            //$result = $prepare->rowCount();
            //var_dump($result);
            return $result;
        }

        public function deleteByIdPost( int $idPosts) : int {
            $query = "DELETE FROM postagens WHERE idPosts = :idPosts";
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":idPosts", $idPosts);
            $prepare->execute();
            $result = $prepare->rowCount();
            //var_dump($result);
            return $result;
        }
    }

