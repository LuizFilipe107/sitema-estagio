
<?php 
  include("../classes/manipulaData.php");

  $visualizar = new manipulaData();
  $visualizar->setTable( "tb_lotacao" );
  $visualizar->setCampoId( 'id_cad' );
  $visualizar->setValorId( $_GET[ 'id_cad' ] );
  $dados = $visualizar->getListEditar();
  $reg = mysqli_fetch_object( $dados );

  $list = new manipulaData();
  $list->setCampos("*");
  $list->setTable("tb_naj");
  $dados= $list->getList();

  $list2 = new manipulaData();
  $list2->setCampos("*");
  $list2->setTable("tb_defensoria");
  $dados2= $list2->getList();

  $visualizar2 = new manipulaData();
  $visualizar2->setTable("tb_cadastro");
  $visualizar2->setCampoId( 'id_cad' );
  $visualizar2->setValorId( $_GET[ 'id_cad' ] );
  $dados5= $visualizar2->getListEditar();
  $reg5 = mysqli_fetch_object( $dados5 );

?>
<div class="right"><a href="index.php?url=remocao/lista_remocao"><button  class="btn btn-primary center-block" style="font-size: 15px; float: left;" ><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</button></a></div> <br> <br> <br>

<div class="container">
  <form class="form-horizontal" method="post" action="remocao/acoes/crudRemocao.php" enctype="multipart/form-data">
  <input name="txtLocal" type="hidden" class="form-control" value="Editar">
    <input type="hidden" name="id_cad" value="<?=$reg->id_cad?>">
  <div class="row">
    <div> 
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="lotacao">
          <legend>
            <h3>Remoção Estagiário</h3>
          </legend>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <div class="col-md-8"> Nome Estagiário: </div>
                <div class="col-md-12">
                  <input name="" type="text" class="form-control" id="nomeNaj"  value="<?=$reg5->nome?>" disabled>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="col-md-12"> Matrícula: </div>
                <div class="col-md-8">
                  <input name="" type="text" class="form-control" id="nomeNaj"  value="<?=$reg5->matricula?>" disabled>
                </div>
              </div>
            </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12"> Data Remoção: </div>
                                <div class="col-md-8">
                                    <?php  $data= date("d/m/Y")?> 
                        <input name="remocao" type="text" class="form-control" value="<?=$data?>" disabled>
                                </div>
                            </div>
                        </div>
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <div class="col-md-8"> NAJ: </div>
                <div class="col-md-12">
                  <?php $naj = new manipulaData();
                    $naj->setTable("tb_naj");
                    $naj->setCampoId( 'id_naj' );
                    $naj->setValorId($reg->id_naj);
                    $najnome= $naj->getListEditar();
                    $naj =  mysqli_fetch_object($najnome)
                  ?>
                                    <input name="naj" type="hidden" class="form-control" value="<?=$naj->id_naj?>">
                  <input name="" type="text" class="form-control" id="nomeNaj"  value="<?=$naj->nome?>" disabled>
                </div>
              </div>
            </div>
<!--
            <div class="col-md-5">
              <div class="form-group">
                <div class="col-md-8"> Defensoria: </div>
                <div class="col-md-12">
                  <?php $defensoria = new manipulaData();
                    $defensoria->setTable("tb_defensoria");
                    $defensoria->setCampoId( 'id_defensoria' );
                    $defensoria->setValorId($reg->id_defensoria);
                    $nomedefensoria= $defensoria->getListEditar();
                    $defensoria =  mysqli_fetch_object($nomedefensoria)
                  ?>
                                    <input name="defensoria" type="hidden" class="form-control" value="<?=$defensoria->id_defensoria?>">
                  <input name="" type="text" class="form-control" id="nomeDefensoria"  value="<?=$defensoria->nome?>" disabled>
                </div>
              </div>
            </div>
-->
          </div>
          <br>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <div class="col-md-8"> Nova NAJ: </div>
                <div class="col-md-12">
                  <select id="" name="txtNomeNaj" class="form-control">
                  <?php  while($reg = mysqli_fetch_object($dados)){ ?>
                  <option value="<?=$reg->id_naj?>">
                  <?=$reg->nome?>
                  </option>
                  <?php  } ?>
                  </select>
                </div>
              </div>
            </div>
<!--
            <div class="col-md-5">
              <div class="form-group">
                <div class="col-md-8"> Nova Defensoria: </div>
                <div class="col-md-12">
                  <select id="" name="txtNomeDefensoria" class="form-control">
                  <?php  while($reg2 = mysqli_fetch_object($dados2)){ ?>
                  <option value="<?=$reg2->id_defensoria?>">
                  <?=$reg2->nome?>
                  </option>
                  <?php  } ?>
                  </select>
                </div>
              </div>
            </div>
          -->
          </div>
                                  <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="col-md-8"> Observação </div>
                                    <div class="col-md-12">
                                        <textarea name='obs' class="form-control" rows='5' cols="20"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

        </div>
      </div>
      <br>
      
      <center>
        <div class="btn-group">
          <button id="btlimpar" name="txtLocal" value="cancelar" class="btn btn-danger">Cancelar</button>
        </div>
        <div class="btn-group">
          <button id="btsalvar" name="txtLocal" value="Editar"  class="btn btn-success">Salvar</button>
        </div>
      </center>
    </div>
  </div>
</form>
</div>
<br><br><br>

  <div class="container">
  
  <div class="row">
    <div> 
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="lotacao">
          <legend>
            <h3>Histórico</h3>
          </legend>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <div class="col-md-8"> NAJ Atual: </div>
                <div class="col-md-12">
                  <?php  
                    $lot= new manipulaData();
                    $lot->setTable("tb_lotacao");
                    $lot->setCampoId('id_cad');
                    $lot->setValorId($_GET['id_cad']);
                    $lot= $lot->getListEditar();
                    $lot = mysqli_fetch_object($lot);

                    

                    $najs= new manipulaData();
                    $najs->setTable("tb_naj");
                    $najs->setCampoId('id_naj');
                    $najs->setValorId($lot->id_naj);
                    $naj= $najs->getListEditar();
                    $naj1 = mysqli_fetch_object($naj);
                  ?>
                  
                  <input name="naj" type="text" class="form-control" id="naj" placeholder="naj" value="<?php echo $naj1->nome?>" readonly>
                </div>
              </div>
            </div>
          </div> <br>


                    <?php
                    $id_cad = $_GET['id_cad'];
                    $inicio= new manipulaData();
                    $inicio->setTable("tb_remocao");
                    $inicio->setCampoId('id_cad');
                    $inicio->setValorId($id_cad);
                    $inicio_f= $inicio->getListEditar();
                    $inicio1 = mysqli_fetch_object($inicio_f);

                    //echo "<script> alert('$reg->data_cadastro'); </script>";

                    ?>






                    <br>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="col-md-8"> Histórico:</div>
                <div class="col-md-12">
                  <table class="table table-dark" style="font-size:85%;">
                    <thead class="thead-dark">
                                    <tr>
                                    <th>Encaminhado</th>
  
                                    <th>Unidade</th>
  
                                    <th>Início</th>
  
                                    <th>Final</th>
  
                                    <th>Função</th>
  
                                    <th>Total de Horas</th>
  
                                    <th>Situação</th>
                                  </tr>
  
                                  </thead>
                                  
                              <tbody>
                              <?php
                              $contador=0;

                               while ($inicio1 = mysqli_fetch_object($inicio_f)) { 


                                  $id_naj_1 = $inicio1->id_naj;
                                  //echo "<script>alert('$id_naj_1')</script>";
                                  $inicio2= new manipulaData();
                                $inicio2->setTable("tb_naj");
                                $inicio2->setCampoId('id_naj');
                                $inicio2->setValorId($id_naj_1);
                                $inicio_f2= $inicio2->getListEditar();
                                $inicio2 = mysqli_fetch_object($inicio_f2);

                              ?>
                                <tr>
                                  <td><input class="form-control" value="<?php echo $reg5->data_cadastro?>"  readonly type="text"></td>

                                  <td><input class="form-control" value="<?php echo $inicio2->nome ?>"  readonly type="text"></td>

                                  <td><input class="form-control inicio_d" value="<?php echo $inicio1->data_rem ?>"  readonly type="text"></td>

                                  <td><input class="form-control final_d" value="<?php echo $proximo['data_rem'] ?>"  readonly type="text"></td>

                                  <td><input class="form-control" value="<?php echo $tipoestagio->tipo ?>" type="text" readonly></td>

                                  <td><input class="form-control total" type="text" readonly></td>

                                  <td><input class="form-control" value="<?php echo $sit->situacao ?>" type="text" readonly></td>
                                </tr>

                                <?php 

                              $contador++; 
                              } ?>
                                
                              </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>

                    <?php

                        echo "

                                <script> 
                                /*
                                    var data = new Date('$inicio1->data_rem');
                                    data.setMonth(data.getMonth() + 6);
                                    var dia = data.getDate() + 1;
                                    var mes = data.getMonth() + 1;
                                    
                                     if(dia.toString().length==1){
                                        dia=\"0\"+dia.toString();
                                     }
                                     if(mes.toString().length==1){
                                        mes=\"0\"+mes.toString();
                                     }
                                    
                                    var data_str = data.getFullYear()+'-'+mes+'-'+dia;
                                    //alert(data_str);
                                    document.getElementById('seis_meses_depois').value = data_str;
                                    */


                                    inicios = $('.inicio_d');
                  fins = $('.final_d');
                  for(var i=0; i<= inicios.length; i++ ){
                    fins.eq(i).val(inicios.eq(i+1).val());
                    
                  }

                  var oneDay = 24*60*60*1000;

                  var total = $('.total');
                  for(var i=0; i<= total.length; i++ ){
                    var data1 = fins.eq(i).val();
                    var data2 = inicios.eq(i).val();

                    data1 = new Date(data1);

                    data2 = new Date(data2);

                    var dif_d = Math.round(Math.abs(((data1.getTime() - data2.getTime())/(oneDay))));
                    var dif_s = Math.round(dif_d/7);
                    var dif_horas_trab = dif_s*4*5;
                    if(isNaN(dif_horas_trab)){
                      dif_horas_trab= '-';
                    }
                    total.eq(i).val(dif_horas_trab);
                    
                  }







                                </script>
                                
                            ";

                        ?>


        </div>
      </div>
      <br>
      

    </div>
  </div>
</form>
</div>