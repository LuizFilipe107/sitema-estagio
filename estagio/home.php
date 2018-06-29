
 
 
 <div class="container"> 

       <div class="row">
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="index.php?url=pre_cadastro/listapre_cad">
                 <div class="ssb-icon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></div>
                 <h2 class="ssb-title">ESTAGIÁRIO/COLABORADOR</h2>  
                </a>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="https://app.powerbi.com/view?r=eyJrIjoiNDhlMmNhNmMtZjUyZi00ZWVmLTgwYjUtYWI4ZjIyYmYxYzljIiwidCI6ImMyMDMzZjM2LWM5ZTgtNDNhMy1iNmNkLTVkNWUwZjMyZmI4NyJ9" target="blanck">
                 <div class="ssb-icon"> <i class="glyphicon glyphicon-file" aria-hidden="true"></i> </div>
                 <h2 class="ssb-title">RELATÓRIOS GERAIS</h2>  
               </a>
            </div>
          </div>
         
          <div class="col-md-3">
            <div class="square-service-block">
               <a href="index.php?url=remocao/lista_remocao">
                 <div class="ssb-icon"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></div>
                 <h2 class="ssb-title">ENCAMINHAMENTO</h2>  
               </a>
            </div>
          </div>
          
          
          <div class="col-md-3">
            <div class="square-service-block">
              <?php if ($_SESSION["PERFIL"] == "Administrador" || $_SESSION["PERFIL"] == "Super Administrador") {?>
               <a href="index.php?url=usuario/listar_usuario">
                 <div class="ssb-icon"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i></div>
                 <h2 class="ssb-title">USUÁRIOS</h2>  
               </a><?php  $_SESSION["PERFIL"];} ?>
            </div>
 </div>          

