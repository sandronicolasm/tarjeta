<?php
require_once 'db.php'; //Conexion con la base de datos tarjetaroja

$query="SELECT comp_redes.link_rede FROM comp_redes INNER JOIN complejo ON comp_redes.id_comp=complejo.id_comp INNER JOIN redes ON comp_redes.id_rede=redes.id_rede WHERE comp_redes.id_comp=3 AND comp_redes.id_rede=1";
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