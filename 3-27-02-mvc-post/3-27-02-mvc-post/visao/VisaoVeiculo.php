<?php
final class VisaoVeiculo
{
    function mostrarLista($lista) {
        $titulo = 'Veículos';
        $subtitulo = 'Listagem';
        $dadosPraTabela = '';
        foreach ($lista as $linha) {
            $dadosPraTabela .= '<tr>';

            $dadosPraTabela .= '<td>' . $linha['id'] . '</td>';
            $dadosPraTabela .= '<td>' . $linha['fabricante'] . '</td>';
            $dadosPraTabela .= '<td>' . $linha['modelo'] . '</td>';
            
            $dadosPraTabela .= '<td>';            
            $dadosPraTabela .= '<form action="/index.php?mod=veiculo&acao=exclui" method="post">';
            $dadosPraTabela .= '<input type="hidden" name="input_id" value="' . $linha['id'] . '">';
            $dadosPraTabela .= '<button>Exc</button>';
            $dadosPraTabela .= '</form>';
            $dadosPraTabela .= '</td>';

            $dadosPraTabela .= '<td>';
            $dadosPraTabela .= '<form action="/index.php?mod=veiculo&acao=digitaredicao" method="post">';
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

    function mostrarFormCadastro()  {
        $titulo = 'Veículos';
        $subtitulo = 'Cadastro';
        $form = file_get_contents(__DIR__ . '/templates/fragmentos/form.html');
        $form = str_replace(
            ['{{act}}', '{{id}}', '{{fab}}', '{{mod}}'],
            ['/index.php?mod=veiculo&acao=novo'],
            $form
        );
        $conteudo = $form;
        require_once __DIR__ . '/templates/main.php';
    }

    function mostrarFormEdicao($dados) {
        $titulo = 'Veículos';
        $subtitulo = 'Edição';
        $form = file_get_contents(__DIR__ . '/templates/fragmentos/form.html');
        $form = str_replace(
            ['{{act}}', '{{id}}', '{{fab}}', '{{mod}}'],
            [
                '/index.php?mod=veiculo&acao=altera',
                $dados['id'],
                $dados['fabricante'],
                $dados['modelo']
            ],
            $form
        );
        $conteudo = $form;
        require_once __DIR__ . '/templates/main.php';
    }

    function mostrarMensagem($tit, $sub, $msg) {
        $titulo = $tit;
        $subtitulo = $sub;
        $conteudo = $msg;
        require_once __DIR__ . '/templates/main.php';
    }
}
