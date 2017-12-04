<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
    <title>Login - Prontuário Medico</title>

    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
    .telalogin{

        background-image: url('../img/hospital4.png');
        background-repeat: no-repeat;
        background-size: 100%;


    }
</style>
<body>

<div  class="w3-container">
    <a class="header"  href="http://localhost:63342/prontu/app/views/telalogin.php" style="text-decoration:none" > Prontuário Medico </a>
</div>


    <section class="container login-form">
        <form method="post" action="../Controller/ControllerLogin.php" id="formlogin" role="login">
            <center class="boneco">
                <img src="../img/boneco1.png" style="height:150px;">
            </center>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                    <input type="text" name="nome_login" placeholder="Escreva seu nome" required class="form-control input-lg" />
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                    <input type="password" name="senha_login"  placeholder="Insira sua senha" required class="form-control input-lg" />
                </div>
            </div>

            <button type="submit" name="botaocad" value="usuarioadm" class="btn btn-lg btn-block btn-success">Login</button>
            <section>
                Registre-se agora! <a href="cadastrologin.php"><span>&rarr;</span> Clique aqui</a>
            </section>
        </form>
    </section>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>