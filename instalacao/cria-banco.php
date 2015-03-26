<?php

	//CLASSE CONECTAR BANCO
	include '../config/Conexao.php';

	//RETORNA ERRO DE UMA QUERY SQL
	function testarQuery($res){
		if (!$res) {
            echo "</br><strong>Erro na consulta MySQL: </strong></br>" . mysql_error() . "</br>";
        }
	}

	//FUNCAO EXCUTAR SQL
	function executarSql($sql){
        Conexao::getConnection();
        $res = mysql_query($sql);
        Conexao::closeConnection();
        testarQuery($res);
        if(mysql_affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }

    //CRIA A TABELA USUARIOS SE ELA NAO EXISTIR
    $sql = '
		CREATE TABLE IF NOT EXISTS usuarios (
		    id serial,
		    email character varying(120) NOT NULL,
			login character varying(32) NOT NULL,
			senha character varying(8) NOT NULL,
			nome character varying(120) NOT NULL,
			cpf character varying(11) NOT NULL,
			foto character varying(120),
			telefone character varying(120),
			nascimento character varying(120),
			ativo bool NOT NULL,
			admin bool NOT NULL
		)
	';
	executarSql($sql);

	//CRIA A TABELA DECKS SE ELA NAO EXISTIR
	$sql = '
		CREATE TABLE IF NOT EXISTS decks (
		    id serial,
		    nome character varying(120) NOT NULL,
			descricao character varying(250) NOT NULL,
			ativo bool NOT NULL,
			usuario int NOT NULL
		)
	';
	executarSql($sql);

	//CRIA A TABELA CARTOES SE NAO EXISTIR
	$sql = '
		CREATE TABLE IF NOT EXISTS cartoes (
		    id serial,
		    frente text NOT NULL,
			verso text NOT NULL,
			ativo bool NOT NULL,
			deck int NOT NULL
		)
	';
	executarSql($sql);

	//USUARIOS DE EXEMPLO
	$sql = '
		INSERT INTO usuarios VALUES(
			NULL,
			"danielrodrigues.a113@gmail.com",
			"admin",
			"123456",
			"Usuário master do sistema",
			"12345678910",
			NULL,
			NULL,
			NULL,
			true,
			true
		)
	';
	executarSql($sql);
	$sql = '
		INSERT INTO usuarios VALUES(
			NULL,
			"contato@danielrodrigues.net.br",
			"teste",
			"123456",
			"Test User 2",
			"12345678910",
			NULL,
			NULL,
			NULL,
			true,
			false
		)
	';
	executarSql($sql);
	$sql = '
		INSERT INTO usuarios VALUES(
			NULL,
			"daniel@danielrodrigues.net.br",
			"teste-2",
			"123456",
			"Usuário Teste 1",
			"12345678910",
			NULL,
			NULL,
			NULL,
			true,
			false
		)
	';
	executarSql($sql);

	//DECK DE EXEMPLO
	$sql = '
		INSERT INTO decks VALUES(
			NULL,
		    "Ipsum Loren Doren",
			"deck de exemplo de conteúdo",
			1,
			2
		)
	';
	executarSql($sql);
	$sql = '
		INSERT INTO decks VALUES(
			NULL,
		    "Doren Loren Ipsum",
			"segundo deck de exemplo de conteúdo",
			1,
			2
		)
	';
	executarSql($sql);

	//CARTOES DE EXEMPLO
	$sql = '
		INSERT INTO cartoes VALUES(
			NULL,
			"Ipsum Loren Doren",
			"Significado qualquer",
			1,
			1
		)
	';
	executarSql($sql);
	$sql = '
		INSERT INTO cartoes VALUES(
			NULL,
			"Ipsum Loren Doren",
			"Significado qualquer",
			1,
			1
		)
	';
	executarSql($sql);

?>










