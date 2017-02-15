<?php
require_once 'db.php'; //Conexion con la base de datos tarjetaroja

$query="SELECT COUNT(cancha.id_comp) AS 'cantidad' FROM cancha INNER JOIN complejo ON cancha.id_comp=complejo.id_comp WHERE cancha.id_comp=3" ;
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