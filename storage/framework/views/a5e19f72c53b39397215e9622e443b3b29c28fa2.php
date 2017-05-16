<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name')); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Material design -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .white-text {
              color: white;
            }
            .orange {
              background-color: orange;
            }
            .white {
              background-color: white;
            }
            .orange-border {
              border: 2px solid orange;
            }
            .image-background {
              background-image: url('../resources/assets/img/support.jpg')!important;
              background-repeat: no-repeat;
              background-size: cover;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .version {
                font-size: 0.4em;
                position: absolute;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height image-background">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>"><small class="white-text">Home</small></a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>"><small class="white-text">Iniciar sesión</small></a>
                        <a href="<?php echo e(url('/register')); ?>"><small class="white-text">Registrarse</small></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title white orange-border">
                    <?php echo e(config('app.name')); ?>

                    <?php
                        $packages = collect(json_decode(file_get_contents(base_path('composer.lock')))->packages);
                    ?>
                </div>
                <div class="links">
                  <a class="orange orange-border" href="//www.cife.edu.mx/mesa-de-ayuda"><small class="white-text">Mesa de ayuda</small></a>
                    <a class="orange orange-border" href="<?php echo e(url('/login')); ?>"><small class="white-text">Mis tickets</small></a>
                </div>
            </div>
        </div>
    </body>
</html>
