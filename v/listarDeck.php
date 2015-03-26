<?php

	include "topo.php";

?>

<div class="container tabela">
	<table class="table">
	    <tr class="tit-tabela">
	        <th>Decks</th>
	        <th></th>
	        <th class="text-center">
	        	<a href="<?php echo raiz(); ?>/deck/inserir">
            		<span class="glyphicon glyphicon-plus-sign"></span>
            	</a>
	        </th>
	    </tr>

	    <?php
	    foreach ($lista as $obj) {
	        ?>    
	        <tr>
	            <td class="coluna-principal">
	            	<a href="<?php echo raiz(); ?>/cartao/listar/<?php echo $obj->getId() ?>">
	            		<span class="glyphicon glyphicon-folder-open"></span>
	            		<span class="deck"><?php echo $obj->getNome() ?></span>
	            	</a>
	            </td>
	            <td class="text-center">
	                <a href="<?php echo raiz(); ?>/cartao/editar/<?php echo $obj->getId(); ?>">
	                	<span class="glyphicon glyphicon-pencil"></span>
	                </a>
	            </td>
	            <td class="text-center">
	                <a href="<?php echo raiz(); ?>/cartao/excluir/<?php echo $obj->getId(); ?>">
	                	<span class="glyphicon glyphicon-trash"></span>
	                </a>
	            </td>
	        </tr>
	        <?php
	    }
	    ?>
	</table>
</div>

<?php include "rodape.php"; ?>