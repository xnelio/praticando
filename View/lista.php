<!DOCTYPE html>
<!--
Lista os contatos cadastrados na agenda.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Cadastro de Contatos</title>
    </head>
    <body>
        <h1>Cadastro de Contatos</h1>

        <p>Essa &eacute; a lista de contatos de Email cadastrados.</p>
        <?php
        //verifica se o vetor está inicializado e possui contatos
        if (isset($result) && count($result) >= 1) {
            ?>
            <table border='1'>
                <caption>Tabela com contatos cadastrados</caption>
                <thead>                
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //navega pelos elementos do vetor e imprime suas propriedades
                foreach ($result as $contato) {

                    echo "<tr><td> " . $contato->getNome() . " </td>";
                    echo "<td> " . $contato->getEmail() . " </td></tr>";
                }
                ?>
            </tbody>
            <tfoot><tr>
                    <td colspan="2">Total de contatos: <?php echo count($result) ?></td>
                </tr>
            </tfoot>
        </table>
        <?php
    } else {
        echo "<p>- N&atilde;o h&aacute; contatos registrados </p>";
    }
    ?>
    <p><a href="../Controller/controle.php?op=nv">Novo</a>
        |  <a href="../Controller/controle.php?op=lst">Listar </a>
        |  <a href="../Controller/controle.php?op=out">Sair </a>            
        |  <a href="../Controller/controle.php?op=lst">Listar </a></p>
</p>
</body>
</html>
