<!DOCTYPE html>
<!--
Mostra uma mensagem indicando se o contato foi salvo ou não na agenda.
-->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Cadastro de Contatos</title>
    </head>
    <body>
        <h1>Cadastro de Contatos</h1>
        <?php
        if (isset($_SESSION['usuario'])) {// verifica se existe a varavel session
            $usuario = $_SESSION['usuario'];
            $msghor = $_SESSION['horario'];
            ?>
            <p><?php echo $msghor . ", " . $usuario . "!" ?></p>
            <?php
            if (isset($msg)) {
                echo '<p>' . $msg . '<p>';
            }
            else
                echo '<p>sem msg</p>';
            ?>
            <p><a href="../Controller/controle.php?op=nv">Novo </a>
                |  <a href="../Controller/controle.php?op=lst">Listar </a></p>
            <?php
        } else {

            echo("<p>Sess&atilde;o n&atilde;o autenticada</p>");
        }
        ?>
    </body>
</html>

