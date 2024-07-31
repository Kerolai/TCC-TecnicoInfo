<?php
    $conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');
    $id = $_GET['idUsuario'];
    $busca = "SELECT * FROM usuarios WHERE idUsuario = '$id'";
    $sql = mysqli_query($conexao, $busca);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="imagens/logoCortada.png">
    <meta charset="utf-8">
    <title>TekMind | Editar Usuário</title>
    <link rel="stylesheet" type="text/css" href="estiloGeral.css">
    <style type="text/css">
        /*CAIXA DE CONTORNO*/
            fieldset {
                border: 4px solid #4B0082;
                width: 30%;
                border-radius: 25px;
                padding-bottom: 1%;
                padding-top: 1%;
            }

            .caixa {
                border-radius: 15px;
                border: 1px solid black;
                font-size: 13pt;
                padding: 10px 30px;
                outline: none;
                color: black;
                margin: 2%;
            }

        /*botão*/
            .bt {
                border: none;
                outline: none;
                border: 1px solid black;
                height: 50px;
                width: 110px;
                margin-left: 80px;
                color: #000000;
                border-radius: 10px;
                cursor: pointer;
                transition: 0.2s;
                font-weight: bold;
                font-size: 14px;
            }
            .bt:hover{ background: #4B0082; color: white; }
    </style>
</head>
<body>
    <!--TÍTULO-->
    <div class="titulo" style="position: fixed; z-index: 1;">
        <font id="fonte1" style="margin: 2%; left: 32%; font-family: Courier New; font-size: 65px;">Alterar Dados</font>

        <!--MENU SUPERIOR-->
            <nav>
                <ul class="menu">
                    <li><a href="tabelaUsuarios.php" type="submit">Voltar</a></li>
                    <li><a href="index.php" type="submit">Sair</a></li>
                </ul>
            </nav>
         <!--LOGO-->
             <img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
    </div>
    <br><br><br><br><br><br><br><br><br>

    <?php 
        while($registro = mysqli_fetch_array($sql)){

            $nome = $registro['nomeUsuario'];
            $email = $registro['emailUsuario'];
            $endereco = $registro['enderecoUsuario'];
            $cpf = $registro['cpfUsuario'];

            echo ("
                <center>
                <fieldset>
                    <table border='0' cellpadding='0' cellspacing='2' align='center'>
                        <form action='editUsuario2.php' method='POST'>
                            <tr><td>
                                <input class='caixa' type='hidden' name='idUsuario' value = '" . $id . "'/>
                            </td></tr>

                            <tr><td>
                                <font size='4'>Nome</font><br>
                                <input class='caixa' type='text' name='nomeUsuario' value = '" . $nome . "'/>
                            </td></tr>

                            <tr><td>
                                <font size='4'>E-mail</font><br>
                                <input class='caixa' type='email' name='emailUsuario' value = '" . $email . "'/>
                            </td></tr>

                            <tr><td>
                                <font size='4'>Endereço</font><br>
                                <input class='caixa' type='text' name='enderecoUsuario' value = '" . $endereco . "'/>
                            </td></tr>

                            <tr><td>
                                <font size='4'>CPF</font><br>
                                <input class='caixa' type='text' maxlength='12' name='cpfUsuario' value = '" . $cpf . "'/><br><br>
                            </td></tr>
                            
                            <tr><td>
                                <input class='bt' type='submit' value='Alterar'>
                            </td></tr>
                        </form>
                    </table>
                </fieldset>
                </center>
            ");
        }
    ?>
    <!--CRÉDITOS-->
        <div class="div" style="position: fixed;">
            <p class="cred">Elisângela e Kerolai ® 2021</p>
        </div>
</body>
</html>