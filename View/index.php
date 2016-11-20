
<?php
//iniciando a sessão
session_start('EmailContato');
$_SESSION ['usuario'] = "Prof Jane";

//registra mensagem na sessão
$hr = date(" H ");
if ($hr >= 5 && $hr < 12) {
    $_SESSION ['horario'] = "Bom dia";
} else if ($hr >= 12 && $hr < 18) {
    $_SESSION ['horario'] = "Boa tarde";
} else {
    $_SESSION ['horario'] = "Boa noite";
}
?>
<!DOCTYPE html>
<!--
Página principal.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Cadastro de Contatos</title>
    </head>
    <body>
        <h1>Cadastro de Contatos</h1>
        <p><a href="../Controller/controle.php?op=nv">Novo </a>
            |  <a href="../Controller/controle.php?op=lst">Listar </a>            
            |  <a href="../Controller/controle.php?op=lst">Mostra </a></p>
</p>
    </body>
</html>
