<!DOCTYPE html>
<!--
Mostra mensagens de erro.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Cadastro de Contatos</title>
    </head>
    <body>
        <h1>Cadastro de Contatos - Falha</h1>
        <?php
        if (isset($msg)) {
            echo '<p>' . $msg . '</p>';
        }
        ?>
        <p><a href="javascript:history.back();" >Voltar</a></p>
    </body>
</html>
