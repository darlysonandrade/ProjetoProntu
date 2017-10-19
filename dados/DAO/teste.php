<?php include "../ConexaoModel/ConexaoCidades.php" ?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <script type="text/javascript" src="../jss/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../jss/funcao.js"></script>
</head>
<body>

<form action="" method="post" id="form_cidade" >

<label for="estados">Estado:</label>
<select name="estados" id="estados">
    <option value=""></option>
    <?php
    $con = new  conexaoCidades();
    $con->conect();

    $sql = "SELECT cod_estados, sigla FROM estados ORDER BY sigla";
    $res = mysqli_query($con->db, $sql );
    while ( $row = mysqli_fetch_assoc( $res ) ) {
        echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
    }
    ?>
    </option></select>

<label for="cidades">Cidade:</label>
<select  name="cidades" id="cidades">
    <option value="">Escolha um estado</option>
</select>

</form>

</body>

</html>