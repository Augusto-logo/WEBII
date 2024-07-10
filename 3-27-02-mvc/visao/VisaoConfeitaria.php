<?php
namespace Crud\Visao;
final class VisaoConfeitaria
{
    function mostrarLista($lista)
    {
        $titulo = 'Confeitaria';
        $subtitulo = 'Listagem';
        $dadosPraTabela = '';
        foreach ($lista as $linha) {
            $dadosPraTabela .= '<tr>';

            $dadosPraTabela .= '<td>' . $linha['id'] . '</td>';
            $dadosPraTabela .= '<td>' . $linha['nome'] . '</td>';
            $dadosPraTabela .= '<td>' . $linha['tamanho'] . '</td>';
            $dadosPraTabela .= '<td>' . $linha['recheio'] . '</td>';
            $dadosPraTabela .= '<td>' . $linha['cobertura'] . '</td>';
            $dadosPraTabela .= '<td>' . $linha['preco'] . '</td>';

            //Botão Exclui
            $dadosPraTabela .= '<td>';
            $dadosPraTabela .= '<form action="/confeitaria/exclui" method="post">';
            $dadosPraTabela .= '<input type="hidden" name="input_id" value="' . $linha['id'] . '">';
            $dadosPraTabela .= '<button>Exc</button>';
            $dadosPraTabela .= '</form>';
            $dadosPraTabela .= '</td>';

            //Botão Edit
            $dadosPraTabela .= '<td>';
            $dadosPraTabela .= '<form action="/confeitaria/digitarEdicao" method="post">';
            $dadosPraTabela .= '<input type="hidden" name="input_id" value="' . $linha['id'] . '">';
            $dadosPraTabela .= '<button>Edit</button>';
            $dadosPraTabela .= '</form>';
            $dadosPraTabela .= '</td>';

            $dadosPraTabela .= '</tr>';
        }
        $fragmento = file_get_contents(__DIR__ . '/templates/fragmentos/tabela.html');
        $conteudo = str_replace('{{tbody}}', $dadosPraTabela, $fragmento);
        require_once __DIR__ . '/templates/main.php';
    }

    function mostrarFormCadastro()
    {
        $titulo = 'Confeitaria';
        $subtitulo = 'Cadastro';
        $form = file_get_contents(__DIR__ . '/templates/fragmentos/form.html');
        $form = str_replace(
            ['{{act}}', '{{id}}', '{{nome}}', '{{tam}}', '{{rec}}', '{{cob}}', '{{preco}}'],
            ['/confeitaria/novo', '', '', '', '', '', ''],
            $form
        );
        $conteudo = $form;
        require_once __DIR__ . '/templates/main.php';
    }

    function mostrarFormEdicao($dados)
    {
        $titulo = 'Veículos';
        $subtitulo = 'Edicao';
        $form = file_get_contents(__DIR__ . '/templates/fragmentos/form.html');
        $form = str_replace(
            ['{{act}}', '{{id}}', '{{nome}}', '{{tam}}', '{{rec}}', '{{cob}}', '{{preco}}'],
            [
                '/confeitaria/altera', $dados['id'], $dados['nome'], $dados['tamanho'], $dados['recheio'], $dados['cobertura'], $dados['preco']
            ],
            $form
        );
        $conteudo = $form;
        require_once __DIR__ . '/templates/main.php';
    }



    function mostrarMensagem($tit, $sub, $msg)
    {
        $titulo = $tit;
        $subtitulo = $sub;
        $conteudo = $msg;
        require_once __DIR__ . '/templates/main.php';
    }
}
