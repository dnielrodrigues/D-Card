<?php

abstract class SuperDao {

    protected $tabela;
    protected $modelo;
    
    public function excluir($obj) {
        $sql = "delete from " . $this->tabela . "
              where id = " . $obj->getId();

        return $this->executar($sql);
    }
    
    protected function executar($sql) {
        Conexao::getConnection();
        $res = mysql_query($sql);
        $rows = mysql_affected_rows();
        Conexao::closeConnection();

        if ($rows > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>