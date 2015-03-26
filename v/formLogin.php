<?php include "topo.php"; ?>

<div class="container">
	<form class="form-login"
		action="<?php echo raiz(); ?>/autentica/login" 
		method="post"
	>
		<h1>Login</h1>

		<div class="input-group form-group">
	        <span class="input-group-addon">Login</span>
	        <input type="text" class="form-control" placeholder="Usuário ou Email" name="login">
	    </div>

		<div class="input-group form-group">
	        <span class="input-group-addon">Senha</span>
	        <input type="text" class="form-control" placeholder="Sua senha" name="senha">
	    </div>
		
		<button type="submit" class="btn btn-primary">Enviar</button>
		<a class="btn btn-primary" href="<?php echo raiz(); ?>/autentica/cadastrar">Cadastre-se</a>
	</form>
</div>

<?php include "rodape.php"; ?>