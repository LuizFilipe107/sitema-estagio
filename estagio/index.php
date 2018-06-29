<!-- teste git -->
<?php 
header ('Content-type: text/html; charset=iso-8859-1');
header ('Content-type: text/html; charset=utf-8');
include ("classes/manipulaData.php");
include ("classes/verUrl.php");
session_start();
 if(isset($_SESSION["LOGADO"])){

 ?> 

<!DOCTYPE html>
<html lang="pt_BR"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Departamento de Estagio</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="tema/csstema.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/blocos.css">
<link rel="stylesheet" type="text/css" href="pre_cadastro/csspre/csspre.css">
<link rel="stylesheet" type="text/css" href="cadastrar/csscad/jscad.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/estilho_thommy.css">
             <script
                     src="https://code.jquery.com/jquery-3.3.1.js"
                     integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                     crossorigin="anonymous"></script>
         <script src="bootstrap/js/sweet_alert.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>


<div id="wrapper" class="active" >

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="container" style="top: 0px; font-size: 110%;">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                    <li style="padding-top: 10%" class="sidebar-brand">
                        <a href="index.php"><span class="fa fa-home solo">Home</span></a>
                    </li>
                    <li style="padding-top: 5%; padding-bottom: 5%;" >
                        <a href="index.php?url=pre_cadastro/listapre_cad" data-scroll>
                            <span class="fa fa-user-circle-o" >Estagiários</span>
                        </a>
                    </li>
                    <li style="padding-top: 5%;padding-bottom: 5%;">
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNDhlMmNhNmMtZjUyZi00ZWVmLTgwYjUtYWI4ZjIyYmYxYzljIiwidCI6ImMyMDMzZjM2LWM5ZTgtNDNhMy1iNmNkLTVkNWUwZjMyZmI4NyJ9" target="blanck" data-scroll>
                            <span class="fa fa-file-text ">Relatórios</span>
                        </a>
                    </li>
                    <li style="padding-top: 5%; padding-bottom: 5%;">
                       <?php if ($_SESSION["PERFIL"] == "Administrador" || $_SESSION["PERFIL"] == "Super Administrador") {?><a href="index.php?url=cad_tipo/lista_cad_tipo" data-scroll>
                            <span class="fa fa-users ">Área Admin</span>
                        </a> <?php  $_SESSION["PERFIL"];} ?>  
                    </li>
                    <li style="padding-top: 5%; padding-bottom: 5%;">
                        <a  href="http://10.223.1.126/glpi/" target="blanck" data-scroll>
                            <span class="fa fa-sitemap ">GLPI</span>
                        </a>
                    </li>
                    <li style="padding-top: 5%; padding-bottom: 5%;">
                        
                         <a href="classes/autentica.php?txtLocal=logout" target="blanck" data-scroll>
                            <span class="fa fa-sign-out ">Sair</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        


        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
                <h1 id="home">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                       
                    </a>
                    DEPARTAMENTO DE ESTÁGIO
                </h1>
            </div>

            <div class="page-content inset" data-spy="scroll" data-target="#spy">
             
                <div class="row">
                    <div class="col-md-12 well">
                        <legend id="anch1">SISTEMA ESTÁGIO - BEM VINDO <?php echo $_SESSION["NOME"];?></legend>
                       
                       
                       <?php 
                          $link = new verUrl();
                          @$link->trocarURL($_GET["url"]);
                       ?>
                       
  
                    </div>
                
                
                </div>
<br><br>
                <div class="navbar navbar-default navbar-static-bottom">
                    <p class="navbar-text pull-left">   
                      <center>
        <span class="text-muted"><b>Subsecretaria de Inovação, Tecnologia da Informação e Comunicação - SITIC </b></span><br>
        <span class="text-muted">Telefone: 4391/ 4335</span>
      </center>                   </p>
                </div>
            </div>

        </div>

    </div>






<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="tema/jstema.js"></script>


<script src="pre_cadastro/csspre/jspre.js"></script>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="datatable/js/databalbetradutor.js"></script>
<script src="jquery/buscaEnd.js"></script>


<script src="bootstrap/js/validação.js"></script>
<script src="bootstrap/js/alerts.js"></script>
</body>
</html>
<?php  }else{
    session_destroy();
    session_unset();
    header("Location: login.php");  
}?> 

