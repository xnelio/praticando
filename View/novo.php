<!DOCTYPE html>
<!--
Página para cadastro de novo contato na agenda.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Cadastro de Contatos</title>
    </head>
    <body>
        <h1>Cadastro de Contatos</h1>
        <?php
        session_start('EmailContato');

        if (isset($_SESSION['usuario'])) {// verifica se existe a varavel $_session
            $usuario = $_SESSION['usuario'];
            $msghor = $_SESSION['horario'];
            ?>
            <p><?php echo $msghor . ", " . $usuario . "!" ?></p>
            <p>Aqui &eacute; poss&iacute;vel cadastrar seus contatos de Email.</p>
            <form action="../Controller/controle.php?op=cad" method="post">
                <p><label for="nome">Nome:</label> <input name="nome" id="nome"/></p>
                <p><label for="email">E-mail:</label> <input name="email" id="email"/></p>
                <p><input type="submit" value="Salvar" name="submit"/></p>
            </form>
            <?php
        } else {

            echo("<p>Sess&atilde;o n&atilde;o autenticada</p>");
        }
        ?>

    </body>
</html>


