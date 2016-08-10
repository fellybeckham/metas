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
               <a class="navbar-brand" href="#">Liga MX</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
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
        <h1>Panel de administracion</h1>
        <h4>Avisos</h4>
         <form action="Administracion/ActualizarAviso" method="POST">
            <div class="form-group">
                <label for="actualizar avisos"></label>
                    <textarea id="avisos" name="avisos" class="form-control" rows="3"></textarea>
                        </div>
                            <input type="submit" name="Actualizar_aviso" value="Actualizar_aviso" class="btn btn-primary">
         </form>
         </br>
         <h4>Equipos</h4>
           <li><a href="Administracion/ver_equipos">Mostrar la lista de equipos</a></li> 
           <li><a href="Administracion/add">Agregar un nuevo equipo</a></li>
          <!-- <li><a href="Administracion/editar">Editar un equipo</a></li>-->
          <!--<li><a href="Administracion/#">Eliminar un equipo</a></li>-->
        <!-- Large modal -->

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Ver equipos</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content container">
                     <!-- adc-->
                        <div class="table-responsive">
                           <table class="table">
                                <tr>
                                    <td>Id</td>
                                    <td>Equipo</td>
                                </tr>
                                    <?php
                                        if($enlaces != FALSE)
                                        {
                                            foreach ($enlaces->result() as $row)
                                            {
                                                echo ' <tr>';
                                                echo '<td class="active">'.$row->Id.'</td>';
                                                echo '<td class="active">'.$row->Equipo_contrincante.'</td>';
                                                 echo "<td><a href= 'Administracion/editar/$row->Id'>Editar</a> | ";
                                                 echo "<a href='Administracion/eliminar/$row->Id'>Eliminar</a></td>";
                                                echo '</tr>';
                                            }
                                        }
                                        else
                                        {
                                            echo '<td> no hay enlaces</td>';
                                        }
                                    ?>
                           </table>
                        </div>
                     </div>      
                 </div>
            </div>

        </div>
        <script src="<?=base_url()?>static/js/flat-ui.min.js"></script>
    </body>
</html>


