<?php
namespace Crud\Database;
use \PDO;
use \Crud\Modelo\ModeloConfeitaria;

class DaoConfeitaria
{
    public function select()
    {
        $sql = "select * from confeitaria;";
        $pst = Conexao::getPrepareStatement($sql);
        if (!$pst) {
            exit("Erro ao preparar");
        }
        $pst->execute();
        $result = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function selectById($id)
    {
        $sql = "select * from confeitaria where id = ?;";
        $pst = Conexao::getPrepareStatement($sql);
        if (!$pst) {
            exit("Erro ao preparar");
        }
        $pst->bindValue(1, $id);
        $pst->execute();
        $result = $pst->fetchAll(PDO::FETCH_ASSOC)[0];
        return $result;
    }

    public function insert(ModeloConfeitaria $v)
    {
        $sql = "insert into confeitaria (nome, tamanho, recheio, cobertura, preco) values (?,?,?,?,?);";
        $pst = Conexao::getConnection()->prepare($sql);
        $pst->bindValue(1, $v->getnome(), PDO::PARAM_STR);
        $pst->bindValue(2, $v->gettamanho(), PDO::PARAM_STR);
        $pst->bindValue(3, $v->getrecheio(), PDO::PARAM_STR);
        $pst->bindValue(4, $v->getcobertura(), PDO::PARAM_STR);
        $pst->bindValue(5, $v->getpreco(), PDO::PARAM_STR);

        if ($pst->execute()) {
            // echo $pst->errorInfo();
            return true;
        }
        return false;
    }

    public function delete($id)
    {
        $sql = "delete from confeitaria where id = ?;";
        $pst = Conexao::getConnection()->prepare($sql);
        $pst->bindValue(1, $id, PDO::PARAM_INT);
        if ($pst->execute()) {
            return true;
        }
        return false;
    }

    public function update(ModeloConfeitaria $v)
    {
        $sql = "update confeitaria set nome = ?, tamanho = ?, recheio = ?, cobertura = ?, preco = ? where id = ?;";
        $pst = Conexao::getConnection()->prepare($sql);
        $pst->bindValue(1, $v->getnome(), PDO::PARAM_STR);
        $pst->bindValue(2, $v->gettamanho(), PDO::PARAM_STR);
        $pst->bindValue(3, $v->getrecheio(), PDO::PARAM_STR);
        $pst->bindValue(4, $v->getcobertura(), PDO::PARAM_STR);
        $pst->bindValue(5, $v->getpreco(), PDO::PARAM_STR);
        $pst->bindValue(6, $v->getId(), PDO::PARAM_INT);
        if ($pst->execute()) {
            return true;
        }
        return false;
    }
}
