<?php
//Conexao com banco para buscar os dados 
$user = $DB_USER;
$password = $DB_PASS;
$database = $DB_NAME ;
$host = $DB_HOST;
$use_utf8mb4 = true;       
$allow_myisam = false;       
$allow_datetime = false;       
$allow_signed_keys = false;
$conn = mysqli_connect($host,$user,$password,$database);
//Função caso a conexao com o banco de erro 
if (!$conn) {
    die("Connection failed: "  . mysqli_connect_error());
}
// SQL para buscar no banco de dados numero de chamados abertos
mysqli_select_db($conn, "glpi10");
$sql = "SELECT COUNT(gt.id) as COUNT FROM glpi_tickets gt
        INNER JOIN glpi_groups_tickets ggt
        ON gt.id = ggt.tickets_id
        WHERE gt.status = 1
        AND ggt.groups_id = 6
        AND ggt.type= 3 ";
$result = $conn->query($sql);
//Função para armazenar os dados retornados do banco 
foreach ($result as $row ) {
    $row["COUNT"];
}
mysqli_close($conn);
?>