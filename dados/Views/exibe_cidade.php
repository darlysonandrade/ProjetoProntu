<?php

require_once '../Controller/UsuarioController.php';

$con = new  UsuarioController();
$con->cidades();

$id = $_GET["id"];

$sql = "SELECT * FROM cidades WHERE estados_cod_estados = '$id' ORDER BY nome";
$res = mysqli_query($con->db, $sql );


while ( $row = mysqli_fetch_assoc( $res ) ) {
    $nome = $row["nome"];
    $id = $row["cod_cidades"];
    echo '<option value="'.$id.'" class="cidades">'.utf8_encode($nome).'</option>';


}