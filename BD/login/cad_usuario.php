<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD - Cadastrar</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        
    </head>
    <body class="body-cadastro">
        
        <div class="cadastro-box">
            <h1>Cadastrar Usuário</h1>
            <h2><a href="index.php">← Voltar para o Login</a></h2>
            
            <?php
            if(isset($_SESSION['msg'])){
                echo '<div class="msg-alerta">' . $_SESSION['msg'] . '</div>';
                unset($_SESSION['msg']);
            }
            ?>
            
            <form method="POST" action="proc_cad_usuario.php">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Digite o seu Nome" required>
                
                <label>Sobrenome:</label>
                <input type="text" name="sobrenome" placeholder="Digite o seu Sobrenome" required>
                
                <label>E-mail:</label>
                <input type="email" name="email" placeholder="Digite o seu melhor e-mail" required>
                
                <label>Endereço:</label>
                <input type="text" name="endereco" placeholder="Digite o seu Endereço" required>
                
                <label>Senha:</label>
                <input type="password" name="pass" placeholder="Digite a sua Senha" required>
                
                <label>Comentário:</label>
                <textarea name="comentario" placeholder="Deixe seu comentário aqui" rows="4"></textarea>
                
                <input type="submit" value="Cadastrar">
            </form>
        </div>
        
    </body>
</html>