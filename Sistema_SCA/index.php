
<?php
session_start();
if (isset($_SESSION['usuario'])) {
    echo '<script>location.href = "una/sca/vista/principal.php";</script>';
} else {
    ?>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Login</title>
            <meta name="description" content="description">
            <meta name="author" content="Evgeniya">
            <meta name="keyword" content="keywords">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="una/sca/vista/plugins/bootstrap/bootstrap.css" rel="stylesheet">
            <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
            <link href="una/sca/vista/css/style.css" rel="stylesheet">
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
                            <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
                            <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
            <![endif]-->
            <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        </head>
        <body>
            <div class="container-fluid">
                <div id="page-login" class="row">
                    <div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="text-right">
                            <!--<a href="page_register.html" class="txt-default">Need an account?</a>-->
                        </div>
                        <div class="box">
                            <div class="box-content">
                                <!--<form id="login" method="POST" action="una/sca/controlador/servicioLogin.php">-->
                                <form method="POST" action="return false" onsubmit="return false">

                                    <div class="text-center">
                                        <h3 class="page-header">Login</h3>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Usuario</label>
                                        <input type="text" class="form-control" name="user" id="user" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Contraseña</label>
                                        <input type="password" class="form-control" name="pass" id="pass" required/>
                                    </div>
                                    </br>
                                    <div class="text-center">
                                        <p><button class="btn btn-primary" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">ENTRAR</button></p>
                                        <!--<button id="submit" class="btn btn-primary" value="Entrar" >Entrar</button>-->
                                      <!-- <input type="submit" class="btn btn-primary" value="Entrar" /> -->
                                    </div>
                                    <label id="errorMessage"></label>
                                    <div id="resultado"></div>
                                </form>
                                <script>
                                    function Validar(user, pass)
                                    {
                                        $.ajax({
                                            url: "una/sca/controlador/servicioLogin.php",
                                            type: "POST",
                                            data: "user=" + user + "&pass=" + pass,
                                            success: function (resp) {
                                                $('#resultado').html(resp).show(200).delay(2500).hide(200);
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

    <?php
}
?>