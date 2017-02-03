<?php
require_once 'db.php'; //Conexion con la base de datos tarjetaroja

$query="SELECT servicio.name_serv,servicio.prec_serv FROM comp_serv INNER JOIN complejo ON comp_serv.id_comp=complejo.id_comp INNER JOIN servicio ON comp_serv.id_serv=servicio.id_serv WHERE comp_serv.id_comp=3";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
}

# JSON-encode the response
echo $json_response = json_encode($arr);
?>