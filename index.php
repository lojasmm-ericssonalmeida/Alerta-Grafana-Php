<?php
    session_start();
    include("_env.php");
    include("conexao.php");
    $result = $row["COUNT"];
    header("refresh: 5;");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Abrir Dashboard</title>
    </head>
    <body>
        <a href="https://grafana.lojasmm.com.br/d/7M4VaHa4z/nexus-chamados-financeiro?orgId=1&refresh=5s" target="_blank">Abrir Dashboard</a>
        <?php include("alerta2.php"); include("alerta.php"); ?>
    </body>
</html>