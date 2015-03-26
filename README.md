D-Card
======

This is a project in production season. It is a game to practice the english language or any other language through memory cards.

Organização das pastas:
* config: configurações da aplicação
* instalação: deve ser deletada após rodar pela primeira vez
* i: interface
* m: model
* v: view
* c: controller


Esquema de rotas:
Controladas pela classe /c/FrontController.php
O htacces passa qualquer URL acessada para o index.php. Este carrega dependencias iniciais e o FrontController, que é uma classe muito simples responsável por qualquer rota da aplicação.

Instalação:
* 1. Crie um BD no MySQL e insira suas informações na classe /config/Conexao.php
* 2. Execute o arquivo /instalacao/cria-banco.php no browser. Ele vai criar as tabelas da aplicação.
* 3. Acesse o endereço do projeto no browser.
