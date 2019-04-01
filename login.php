<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="css/entrar.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
        
    </head>
    <body class="text-center">
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        
        <form  class="form-signin" method="post" action="validar.php">
            <img src="img/Hospital.png" widht="100" height="100">
            <h2 class="h3 mb-3 font-weight-normal">Area de login</h2>
            <label for="login" class="sr-only">Usuario</label>
            <input type="text" name="login"  class="form-control" placeholder="Login" required autofocus>
            <br>
            <label for="password" class="sr-only">Senha</label>
            <input type="password" name="password" class="form-control" placeholder="Senha" required>
            <input type="submit" class="btn btn-lg btn-primary btn-block" name="btn-login" value="Entrar">
            <p class="mt-5 mb-3 text-muted">&copy; 2019 Genisson Ferreira</p>
        </form>
            
    </body>
</html>

