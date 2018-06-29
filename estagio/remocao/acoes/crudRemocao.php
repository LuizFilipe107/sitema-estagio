<?php 
	include_once('../../classes/manipulaData.php');


	//Editar

if(@$_POST["txtLocal"] == "Editar"){
	$editar = new manipulaData();
	$salvar = new manipulaData();
	
	    $data_rem = date("d/m/Y");
		$id_cad         = $_POST["id_cad"];
		$novaNaj        = $_POST["txtNomeNaj"];
		$novaDefensoria = $_POST["txtNomeDefensoria"];
		$naj            = $_POST["naj"];
		$defensoria     = $_POST["defensoria"];
		$obs = $_POST['obs'];	
		$id_tipo_estagio = $_POST['id_tipo_estagio'];	


		$salvar->setTable("tb_remocao");
		$salvar->setCampos("
			id_naj,           
			id_defensoria,     
			id_cad,
			data_rem,            
			id_najNova,        
			id_defensoriaNova,
			obs,
			id_tipo_estagio
		");
		$salvar->setDados("
			'$naj',
			'$defensoria',
			'$id_cad',
			'$data_rem',
			'$novaNaj',
			'$novaDefensoria',
			'$obs',
			'$id_tipo_estagio'
		");
		$salvar->insert();

		$editar->setTable("tb_lotacao");
		$editar->setCampoId("id_cad");
		$editar->setValorId($_POST["id_cad"]);
		$editar->setCampos(" id_naj = '$novaNaj', id_defensoria = '$novaDefensoria'");		 
		$editar->update();


		

		echo "<script> window.location='../../index.php?url=remocao/lista_remocao'; alert('Alterado com Sucesso!'); </script>";

} elseif (@$_POST["txtLocal"] == "cancelar") {
	echo "<script> window.location='../../index.php?url=remocao/lista_remocao';  </script>";
} ?>