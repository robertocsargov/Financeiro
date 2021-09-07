<?php
require_once("config.php")
?>


<!DOCTYPE html>
<html>
<head>
<link href="img/logo.ico" rel="shortcut icon" type="image/x-icon">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="css/estilo-login.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
<title><?php echo $nome_sistema ?></title>
</head>
<body class="bg-light">

<div class="container">
    <div class="row">
        <div class="">
            <div class="account-wall">
                <img class="profile-img" src="img/logo.png" alt="">
                <form class="form-signin" method="post" action="autenticar.php">
                <input type="email" class="form-control mb-2" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Senha" required>
                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary" type="submit">
                            Entrar
                        </button>
                    </div>    
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>