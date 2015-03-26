<?php include "topo.php"; ?>

<div class="container">
	<form class="form-login"
		action="<?php echo raiz(); ?>/autentica/login" 
		method="post"
	>
		<h1>Cadastro de Usuário</h1>

		<div class="input-group form-group">
	        <span class="input-group-addon">Nome Completo</span>
	        <input type="text" class="form-control" placeholder="Digite seu Nome" name="nome">
	    </div>

		<div class="input-group form-group">
	        <span class="input-group-addon">Email</span>
	        <input type="text" class="form-control" placeholder="Digite seu Email" name="email">
	    </div>

		<div class="input-group form-group">
	        <span class="input-group-addon">Nome de Usuário</span>
	        <input type="text" class="form-control" placeholder="Nome de Usuário Único" name="login">
	    </div>

		<div class="input-group form-group">
	        <span class="input-group-addon">CPF</span>
	        <input type="text" class="form-control" placeholder="Digite CPF" name="cpf">
	    </div>

	    <div class="input-group form-group">
	        <span class="input-group-addon">Foto</span>
	        <input type="file" class="form-control" placeholder="Usuário ou Email" name="login">
	    </div>

		<div class="input-group form-group">
	        <span class="input-group-addon">Senha</span>
	        <input type="text" class="form-control" placeholder="Sua senha" name="senha">
	    </div>
		
		<button type="submit" class="btn btn-primary">Enviar</button>
		<a class="btn btn-primary" href="<?php echo raiz(); ?>/usuario/cadastrar">Cadastre-se</a>
	</form>
</div>

<?php include "rodape.php"; ?>