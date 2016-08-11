<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?=base_url()?>static/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>static/css/flat-ui.min.css">
        
        <script src="<?=base_url()?>static/js/vendor/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
        <header>
            <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">METAS</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <!--<li><a href="#fakelink">Menu Item<span class="navbar-unread">1</span></a></li>-->
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>-->
                <li><a href="#fakelink">Equipos y posiciones</a></li>
                <li><a href="#fakelink">Galeria</a></li>
                <li><a href="#fakelink">Noticias</a></li>
                <li><a href="#fakelink">Historia</a></li>
                <?php if($this->session->userdata('usuario')): ?>
                <li><a href="<?=site_url('login/logout')?>">Salir</a></li>    
                <?php else :?>
                    <li><a href="login">Administracion</a></li>
                <?php endif;?>
               </ul>
               <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                  </div>
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </nav>
        </header>        
        <h1>Bienvenido a la liga de torneos</h1>
        <p class="bg-success"><?php print $aviso->Aviso; ?></p>
        </div>
        <script src="<?=base_url()?>static/js/flat-ui.min.js"></script>
    </body>
 
 <!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
</html>


