<?php
namespace Crud\Modelo;

class ModeloConfeitaria
{
    private $id;
    private $nome;
    private $tamanho;
	private $recheio;
	private $cobertura;
	private $preco;

    public function __construct($f, $m, $a, $co, $t, $c = null ) {
        $this->id = $c;
        $this->nome = $f;
        $this->tamanho = $m;
		$this->recheio = $a;
		$this->cobertura = $co;
		$this->preco = $t;
    }

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTamanho() {
		return $this->tamanho;
	}
	
	/**
	 * @param mixed $tamanho 
	 * @return self
	 */
	public function setTamanho($tamanho): self {
		$this->tamanho = $tamanho;
		return $this;
	}

		/**
	 * @return mixed
	 */
	public function getRecheio() {
		return $this->recheio;
	}
	
	/**
	 * @param mixed $recheio 
	 * @return self
	 */
	public function setRecheio($recheio): self {
		$this->recheio = $recheio;
		return $this;
	}

		/**
	 * @return mixed
	 */
	public function getCobertura() {
		return $this->cobertura;
	}
	
	/**
	 * @param mixed $cobertura 
	 * @return self
	 */
	public function setCobertura($cobertura): self {
		$this->cobertura = $cobertura;
		return $this;
	}

		/**
	 * @return mixed
	 */
	public function getPreco() {
		return $this->preco;
	}
	
	/**
	 * @param mixed $preco 
	 * @return self
	 */
	public function setPreco($preco): self {
		$this->preco = $preco;
		return $this;
	}
}
