<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ingresa al sistema</title>
        
        <link rel="stylesheet" href="<?=base_url()?>static/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>static/css/flat-ui.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h2>Login</h2>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="usuario"></label>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                        </div>
                        
                        <div class="form-group">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" value="Ingresar" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

