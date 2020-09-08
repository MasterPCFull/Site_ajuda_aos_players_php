<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style/style.css">

</head>


<body>
<div class="centro">


<div class="logo">
    <img src="imagem/banner.png" alt="Projeto">
    <h1>Digital Masters World BR</h1>
</div>


<form action="index.php">
<div id="botao">
    <button>Inicio</button>
</div>
</form>

<div id="botao2">
    <button>Login</button>
</div>
<br>
<br>
<div>
    <h1>Faça seu login Aqui !!!!</h1>
</div>

<br>

<div class="container" >
    <form name="" method="post" action="">
        <label>Usuário</label>
        <input type="text" name="user" maxlength="50" />
    
        <label>Senha</label>
        <input type="password" name="pass" maxlength="50" />
    
        <input type="submit" name="submit" value="Logar" />
    </form>

    <?php
				/* Declaração de Variáveis */
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'player';
				$pass1 = '123';
				
				$user2 = 'player2';
				$pass2 = '123';
				
					/* Testa se o botão submit foi ativado */
                    if($submit){
					
                        /* Se o campo usuário ou senha estiverem vazios geramos um alerta */
                        if($user == "" || $pass == ""){
                            echo "<script:alert('Por favor, preencha todos os campos!');</script>";
                        }
                        /* Caso o campo usuario e senha não 
                            *estejam vazios vamos testar se o usuário e a senha batem 
                        *iniciamos uma sessão e redirecionamos o usuário para o painel */
                        else{
                            if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
                                session_start();
                                $_SESSION['usuario']=$user;
                                $_SESSION['senha']=$pass;
                                header("Location: control.php");
                            }
                            /* Se o usuario ou a senha não batem alertamos o usuario */
                            else{
                                echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
                            }
                        }
                    }
                ?>

</div>
</div>
</body>
</html>