<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Usuários</title>
    	<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>

		<div class="conteudo">
			<div class="tabela">
				<div class="row header">
					<div class="cell">ID</div>
					<div class="cell">Nome</div>
					<div class="cell">Sobrenome</div>
					<div class="cell">Usuário</div>
					<div class="cell">E-mail</div>
				</div>
        
				<?php
				foreach ($users as $id => $user){
					$id = $user -> id;
					$nome = $user -> nome;
					$sobrenome = $user -> sobrenome;
					$usuario = $user -> usuario;
					$email = $user -> email;
					
					echo "<div class='row'>\n";
					echo "	<div class='cell'>$id</div>\n";
					echo "	<div class='cell'>$nome</div>\n";
					echo "	<div class='cell'>$sobrenome</div>\n";
					echo "	<div class='cell'>$usuario</div>\n";
					echo "	<div class='cell'>$email</div>\n";
					
					echo "</div>\n";
				}
				?>

			</div>
		</div>
	</body>
</html>