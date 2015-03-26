<?php include "topo.php"; ?>

<div class="container tabela">
	<table class="table">
	    <tr class="tit-tabela">
	        <th>Cartões</th>
	        <th></th>
	        <th></th>
	        <th class="text-center">
	        	<a href="<?php echo raiz(); ?>/deck/inserir">
            		<span class="glyphicon glyphicon-plus-sign"></span>
            	</a>
	        </th>
	    </tr>

	    <?php
	    if ($lista != false) {
	    	foreach ($lista as $obj) {
		        ?>    
		        <tr>
		            <td class="coluna-principal">
		            	<a href="<?php echo raiz(); ?>/cartao/listar/<?php echo $obj->getId() ?>">
		            		<span class="glyphicon glyphicon-folder-open"></span>
		            		<span class="deck"><?php echo $obj->getFrente() ?></span>
		            	</a>
		            </td>
		            <td>
		            	<a href="<?php echo raiz(); ?>/cartao/listar/<?php echo $obj->getId() ?>">
		            		<span class="glyphicon glyphicon-folder-open"></span>
		            		<span class="deck"><?php echo $obj->getVerso() ?></span>
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
	    } else {
	    	?>
	        <tr>
	            <td class="coluna-principal">
	            	<a href="<?php echo raiz(); ?>/cartao/listar/<?php echo $obj->getId() ?>">
	            		<span class="glyphicon glyphicon-folder-open"></span>
	            		<span class="deck">Cadastre cartões</span>
	            	</a>
	            </td>
	        </tr>
	        <tr></tr>
	        <tr></tr>
	        <tr></tr>
		    <?php
	    }
	    ?>
	    
	</table>
</div>

<?php include "rodape.php"; ?>