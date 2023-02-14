<?php
class PostsModel {
	
	private $idPosts;
	private $autor;
	private $titulo;
	private $texto;
	private $resumo;
	private $tag;
	private $data;

	
	public function getIdPosts(): int{
		return $this->idPosts;
	}
	
	public function setIdPosts(int $idPosts){
		$this->idPosts = $idPosts;
	}	
	
	public function getAutor(): string{
		return $this->autor;
	}
	
	public function setAutor(string $autor){
		$this->autor = $autor;
	}

	public function getTitulo(): string{
		return $this->titulo;
	}
	
	public function setTitulo(string $titulo){
		$this-> titulo = $titulo;
	}

	public function getTexto(): string{
		return $this->texto;
	}
	
	public function setTexto(string $texto){
		$this-> texto = $texto;
	}

	public function getResumo(): string{
		return $this->resumo;
	}
	
	public function setResumo(string $resumo){
		$this-> resumo = $resumo;
	}

	public function getTag(): string{
		return $this->tag;
	}
	
	public function setTag(string $tag){
		$this->tag = $tag;
	}
	
	public function getData(): string{
		return $this->data;
	}
	
	public function setData(string $data){
		$this->data = $data;
	}
}