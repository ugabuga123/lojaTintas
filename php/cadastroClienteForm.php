<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style/cadastroCliente.css">
</head>
<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Ja existe Usuario com esse nome, por favor tente outro Usuario !</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Houve algum erro ao se cadastrar !  </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  
    <?php } else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>U</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php } ?>
</div>
<body>
        <form  action="cadastroClientes.php" method="POST" class="formUser">
            <div class="info">
                <h1>Cadastro</h1>
                <br>
                <label class="label" >Usuário</label>
                <br>
                <input required type="text" class="input">
                <br>
                <label class="label" >CPF</label>
                <br>
                <input type="text" class="input">
                <br>
                <label class="label" >Senha</label>
                <br>
                <input type="password" class="input">
                <br>
                <label class="label" >Nome Completo</label>
                <br>
                <input type="password" class="input">
                <br>
                <button type="submit" class="btn">
                    Enviar
               </button>
                </div>
        </form>

                <p>Já tem uma conta?<a href="../php/loginForm.php"> Faça Login</a></p>
                
                

    </html>
</body>
</html>