<?php
include("../classes/manipulaData.php");

$card = new manipulaData();
$card->setTable("tb_cadastro");
$card->setCampoId("id_cad");
$card->setValorId($_GET["id_cad"]);
$dados = $card->getListEditar();
$reg = mysqli_fetch_object($dados);

$card3 = new manipulaData();
$card3->setTable("tb_lotacao");
$card3->setCampoId("id_cad");
$card3->setValorId($_GET["id_cad"]);
$dados4 = $card3->getListEditar();
$reg2 = mysqli_fetch_object($dados4);

$list3 = new manipulaData();
$list3->setTable("tb_defensor order by id_defensor DESC");
$dados3 = $list3->getList();
$list3 = mysqli_fetch_object($dados3);

$perfil = new manipulaData();
$perfil->setCampoId("id_tipo_estagio");
$perfil->setTable("tb_tipo_estagio");
/*
$card2  = new manipulaData();
$card2->setTable("tb_defensoria");
$card2->setCampoId("id_defensoria");
$card2->setValorId($reg2->id_defensoria); 
$dados2= $card2->getListEditar();
$defensoria = mysqli_fetch_object($dados2); 

	*/

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="print1.css" media="print">

</head>
<body>
	<div class="container">
		<div class="row">
			<section class="content">
	  
				<div class="col-md-8 col-md-offset-3">
					<fieldset>
						<div class="col-md-8">
							<div class="borda" id="yesprint">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="table-container">
											<table class="table table-filter">
												<tbody >
													<tr class="logo" >
														<th class="img"  colspan="2">
															<center >
																<center><img src="../img/logo_dpdf_Easy.jpg"></center> 
																<?php
																$perfil->setValorId("$reg->id_tipo_estagio");
																$dados2 = $perfil->getList1();
																$tipo = mysqli_fetch_object($dados2);

																if ($tipo->id_tipo_estagio == $reg->id_tipo_estagio) {
																	echo "$tipo->tipo";
																}
																?>
																
															</center>
														</th>
													</tr>
													<tr class="espaco">
														<td colspan="2" align= "center">
															<table class="tracejado">
																<tr>
																	<td class="img" height= "200px"  width= "150px" align= "center" valign= "center">
																		<div>
																			FOTO 3x4 
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="espaco">
														<td class="input1" colspan="2">
															<div >
																Nome:
															</div>
															<div >
																<input  type="text" class="form-control" id="nome" placeholder="Nome" value="<?=$reg->nome?>">
															</div>
														</td>															
													</tr>
													<tr class="espaco">	
														<td class="input">
															<div >
																Matrícula:
															</div>
															<div >
																<input  type="text" class="form-control" id="matricula" placeholder="Matrícula" value="<?=$reg->matricula?>">
															</div>
														</td>
														
														<td class="input">
															<div >
																Lotação:
															</div>
															<div >

												<input  type="text" class="form-control" id="lotacao" placeholder="Lotação" name="defensoria">			
														</div>
														</td>
													</tr>
													<tr class="espaco">	
														<td class="input">
															<div >
																RG:
															</div>
															<div >
																<input  type="text" class="form-control" id="rg" placeholder="RG" value="<?=$reg->identidade?>">
															</div>
														</td>
														<td class="input">
															<div >
																CPF:
															</div>
															<div >
																<input  type="text" class="form-control" id="cpf" placeholder="CPF" value="<?=$reg->CPF?>">
															</div>
														</td>
													</tr>
													<tr class="espaco">	
														<td class="input">
															<div >
																Data de Expedição:
															</div>
															<div >
																<input  type="text" class="form-control" id="data_documento"  value="<?=$reg->data_cadastro?>">
															</div>
														</td>
														<td class="input">
															<div >
																Validade:
															</div>
															<div >
																<input  type="date" class="form-control" id="data_documento" placeholder="" value="<?=$reg->data_desligamento?>">
															</div>
														</td>
													</tr>
													<tr >
														<td  colspan="2">
			
															<center>
												<center>
					
<br> 
<b><?= $list3->nome?> </b>

									

																	
																	
                                
               </center>
											
							<center> <b><?= $list3->cargo?></b></center>
															</center>
														</td>
													</tr>
												</tbody>
											</table>	

																				
										</div>
									</div>
								</div>
							</div>
							<br><br>
							<center id="notprint"><img src="../img/impressora.png" class="botao " width="40px" a href="#" onClick="window.print(); "/> </center><br><br>
						</div>
					</fieldset>
				</div>
			</section>
		</div>
	</div>
</body>

</html>

  <style type="text/css">
		.tracejado {
		border-width: 2px;
		border-style: dashed;
		border-color: #000;

			@page {
			   size: 7in 9.25in;
			   margin: 27mm 16mm 27mm 16mm;
			}
		}
		
		.borda {
		border-width: 6px;
		border-style: dashed;
		border-color: #008000;

			@page {
			   size: 7in 9.25in;
			   margin: 27mm 16mm 27mm 16mm;
			}
		}
		

	</style>