<?php
class ModeloVeiculo
{
    private $codigo;
    private $fabricante;
    private $modelo;
	private $ano;
	private $cor;
	private $tipo;

    public function __construct($f, $m, $a, $co, $t, $c = null ) {
        $this->codigo = $c;
        $this->fabricante = $f;
        $this->modelo = $m;
		$this->ano = $a;
		$this->cor = $co;
		$this->tipo = $t;
    }

	/**
	 * @return mixed
	 */
	public function getCodigo() {
		return $this->codigo;
	}
	
	/**
	 * @param mixed $codigo 
	 * @return self
	 */
	public function setCodigo($codigo): self {
		$this->codigo = $codigo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFabricante() {
		return $this->fabricante;
	}
	
	/**
	 * @param mixed $fabricante 
	 * @return self
	 */
	public function setFabricante($fabricante): self {
		$this->fabricante = $fabricante;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getModelo() {
		return $this->modelo;
	}
	
	/**
	 * @param mixed $modelo 
	 * @return self
	 */
	public function setModelo($modelo): self {
		$this->modelo = $modelo;
		return $this;
	}

		/**
	 * @return mixed
	 */
	public function getAno() {
		return $this->ano;
	}
	
	/**
	 * @param mixed $ano 
	 * @return self
	 */
	public function setAno($ano): self {
		$this->ano = $ano;
		return $this;
	}

		/**
	 * @return mixed
	 */
	public function getCor() {
		return $this->cor;
	}
	
	/**
	 * @param mixed $cor 
	 * @return self
	 */
	public function setCor($cor): self {
		$this->cor = $cor;
		return $this;
	}

		/**
	 * @return mixed
	 */
	public function getTipo() {
		return $this->tipo;
	}
	
	/**
	 * @param mixed $tipo 
	 * @return self
	 */
	public function setTipo($tipo): self {
		$this->tipo = $tipo;
		return $this;
	}
}
