<div class="table-responsive">
                  <table class="table">
                   <tr>
                     <td class="success">Id</td>
                     <td class="success">Equipo</td>
                     <td class="success"></td>
                   </tr>
                   <?php
                   //print $enlaces;
                   if($enlaces != FALSE){
                    foreach ($enlaces->result() as $row){
                       echo '<tr>';
                            echo '<td class="active">'.$row->Id.'</td>';
                            echo '<td class="active">'.$row->Equipo_contrincante.'</td>';
                            echo "<td><a href= 'editar/$row->Id'>Editar</a> | ";
                            echo "<a href='eliminar/$row->Id'>Eliminar</a></td>";
                              //echo '<td class="active"><a href="#">Editar</a></td>';
                       echo '</tr>';
                   }
                   }else{
                       echo 'no hay enlaces';
                   }
                   ?>
                  </table>
                 </div>
