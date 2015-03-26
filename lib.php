<?php
	//RETORNA URL RAIZ
	function raiz(){
		//URL RAIZ
        $urlRaiz = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
        $urlRaiz = str_replace("/index.php", "", $urlRaiz);
        
		return $urlRaiz;
	}

	//RETORNA ERRO DE UMA QUERY SQL
	function testarQuery($res){
		if (!$res) {
            echo "</br><strong>Erro na consulta MySQL: </strong></br>" . mysql_error()."</br>";
        }
	}
?>