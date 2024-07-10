<?php
namespace Crud\Controle; #Crud faz referência a pasta raiz 3-27... e o Controle a pasta atual.
use \Crud\Modelo\ModeloConfeitaria;
use \Crud\Database\DaoConfeitaria;
use \Crud\Visao\VisaoConfeitaria;


class ControleConfeitaria
{
    public function lista()
    {
        $dao = new DaoConfeitaria();
        $lista = $dao->select();
        $visao = new VisaoConfeitaria();
        $visao->mostrarLista($lista);
    }
    function digitarNovo() {
        $visao = new VisaoConfeitaria();
        $visao->mostrarFormCadastro();
    }
    public function novo()
    {
        $nome = filter_input(INPUT_POST, "input_nome", FILTER_SANITIZE_STRING);
        $tamanho = filter_input(INPUT_POST, "input_tamanho", FILTER_SANITIZE_STRING);
        $recheio = filter_input(INPUT_POST, "input_recheio", FILTER_SANITIZE_STRING);
        $cobertura = filter_input(INPUT_POST, "input_cobertura", FILTER_SANITIZE_STRING);
        $preco = filter_input(INPUT_POST, "input_preco", FILTER_SANITIZE_STRING);
        $v = new ModeloConfeitaria($nome, $tamanho, $recheio, $cobertura, $preco);
        $dao = new DaoConfeitaria();
        $visao = new VisaoConfeitaria();
        $mensagem = '';
        if ($dao->insert($v)) {
            $mensagem = 'Inclusão realizada!';
        } else {
            $mensagem = 'Erro ao realizar a inclusão!';
        }
        $visao->mostrarMensagem('Confeitarias', 'Cadastro', $mensagem);
    }
    public function exclui()
    {
        $id = filter_input(INPUT_POST, "input_id", FILTER_SANITIZE_NUMBER_INT);
        $dao = new DaoConfeitaria();
        $visao = new VisaoConfeitaria();
        $mensagem = '';
        if ($dao->delete($id)) {
            $mensagem = 'Deleção realizada!';
        } else {
            $mensagem = 'Erro ao realizar a deleção!';
        }
        $visao->mostrarMensagem('Confeitarias', 'Exclusão', $mensagem);
    }

    public function digitarEdicao(){
        $id = filter_input(INPUT_POST, "input_id", FILTER_SANITIZE_NUMBER_INT);
        $dao = new DaoConfeitaria();
        $visao = new VisaoConfeitaria();
        $dados = $dao->selectById($id);
        $visao->mostrarFormEdicao($dados);
  
    }

    public function altera()
    {
        $id = filter_input(INPUT_POST, "input_id", FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST, "input_nome", FILTER_SANITIZE_STRING);
        $tamanho = filter_input(INPUT_POST, "input_tamanho", FILTER_SANITIZE_STRING);
        $recheio = filter_input(INPUT_POST, "input_recheio", FILTER_SANITIZE_STRING);
        $cobertura = filter_input(INPUT_POST, "input_cobertura", FILTER_SANITIZE_STRING);
        $preco = filter_input(INPUT_POST, "input_preco", FILTER_SANITIZE_STRING);
        $v = new ModeloConfeitaria($nome, $tamanho, $recheio, $cobertura, $preco, $id);
        $dao = new DaoConfeitaria();
        $visao = new VisaoConfeitaria();
        $mensagem = '';
        if ($dao->update($v)) {
            $mensagem = 'Inclusão realizada!';
        } else {
            $mensagem = 'Erro ao realizar a inclusão!';
        }
        $visao->mostrarMensagem('Confeitarias', 'Edição', $mensagem);
    }
}