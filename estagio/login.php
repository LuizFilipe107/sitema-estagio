 <?php  
session_start();

if(!isset($_SESSION["LOGADO"])){

?> 
  
  
   <!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema Departamento Estágio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
	
	<script src="https://use.typekit.net/ayg4pcz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/login.css">
        
        

    <div class="container">
    <center><img src="img/logo.png"  height="100" width="100"></center>

    <h1 class="welcome text-center">BEM-VINDO<br>SISTEMA DE CADASTRO DE ESTAGIÁRIOS</h1>
        <div class="card card-container">
        <h2 class='login_title text-center'>LOGIN</h2>
        <hr>
            
            
            <form class="form-signin" method="post" action="classes/autentica.php">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Login</p>
                <input type="text" id="inputEmail" class="login_box" placeholder="Login" required autofocus name="login">
                   <input type="hidden" name="txtLocal" value="logar">
                <p class="input_title">Senha</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="Senha" required name="senha">
                <div id="remember" class="checkbox">
                    <label>
                        
                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">ENTRAR</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    
    </body>


   
</html>
<?php }else {

  echo $_SESSION["verificar"];
	unset ($_SESSION['verificar']);
	
} ?>
