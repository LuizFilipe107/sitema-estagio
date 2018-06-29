<?php
include("../../classes/manipulaData.php");

if ( $_POST["txtLocal"] == 'Cadastrar'){




$list3 = new manipulaData();
$list3->setTable("tb_cadastro");
$list3->setCampos('id_cad');
$dados3 = $list3->ultimoID();
$reg = mysqli_fetch_object($dados3);


$data =explode("/", date("d/m/Y"));  


$matricula = $reg->ultimo + 1 ."-";  
$matricula .=$data[0];


$matricula = $matricula;
$nome = $_POST["nome"];
$filiacao = $_POST["filiacao"];
$nacionalidade = $_POST["nacionalidade"];
$naturalidade = $_POST["naturalidade"];
$email = $_POST["email"];
$data_nascimento = $_POST["data_nascimento"];
$estado_civil = $_POST["estado_civil"];
$sexo = $_POST["sexo"];
$identidade = $_POST["identidade"];
$uf = $_POST["uf"];
$orgao = $_POST["orgao"];
$CPF = $_POST["CPF"];
$zona = $_POST["zona"];
$secao = $_POST["secao"];
$OAB = $_POST["OAB"];
$titulo_eleitor = $_POST["titulo_eleitor"];
$data_cadastro = date("d/m/Y");
$data_desligamento = $_POST["data_desligamento"];
$id_situcacao = $_POST["txtSituacaoEstagio"];
$id_tipo_estagio = $_POST["txtTipoEstagio"];


$list = new manipulaData();
$list->setTable("tb_cadastro");


$list->setCampos("

matricula,
nome,
filiacao,
nacionalidade,
naturalidade,
email,
data_nascimento,
estado_civil,
sexo,
identidade,
uf_identidade,
orgao,
CPF,
zona,
secao,
OAB,
titulo_eleitor,
data_cadastro,
data_desligamento,
id_tipo_estagio,
id_situacao ");


$list->setDados("

'$matricula',
'$nome', 
'$filiacao', 
'$nacionalidade',
'$naturalidade',
'$email',
'$data_nascimento',
'$estado_civil', 
'$sexo',
'$identidade',
'$uf',
'$orgao', 
'$CPF',
'$zona',
'$secao',
'$OAB', 
'$titulo_eleitor',
'$data_cadastro', 
'$data_desligamento',
$id_tipo_estagio,
$id_situcacao");
$list->insert();
/*echo '<script language= "JavaScript">
location.href="../../index.php?url=cadastrar/cadastrar"
</script>'*/;
 // sO COPIAR A PORRA DA LINHA DE BAIXO
header("location:../../index.php?url=cadastrar/cadastrar");

}

if( $_POST["txtLocal"] == 'Salvar'){
	
	
	$nome = $_POST["nome"];
	$filiacao = $_POST["filiacao"];
	$nacionalidade = $_POST["nacionalidade"];
	$naturalidade = $_POST["naturalidade"];
	$email = $_POST["email"];
	$data_nascimento = $_POST["data_nascimento"];
	$estado_civil = $_POST["estado_civil"];
	$sexo = $_POST["sexo"];
	$identidade = $_POST["identidade"];
	$uf = $_POST["uf"];
	$orgao = $_POST["orgao"];
	$CPF = $_POST["CPF"];	
	$zona = $_POST["zona"];
	$secao = $_POST["secao"];
	$OAB = $_POST["OAB"];
	$titulo_eleitor = $_POST["titulo_eleitor"];
	$data_desligamento = $_POST["data_desligamento"];
	$id_situacao = $_POST["id_situacao"];
	$id_tipo_estagio = $_POST["id_tipo_estagio"];
	
	$list = new manipulaData();
	$list->setTable("tb_cadastro");
	$list->setCampoId("id_cad");
	$list->setValorId($_POST["id_cad"]);
	
	$list->setCampos("
	
	nome = '$nome',
	filiacao = '$filiacao',
	nacionalidade = '$nacionalidade',
	naturalidade = '$naturalidade',
	email = '$email',
	data_nascimento = '$data_nascimento',
	estado_civil = '$estado_civil',
	sexo = '$sexo',
	identidade = '$identidade',
	uf_identidade = '$uf',
	orgao = '$orgao', 
	CPF = '$CPF',		
	zona = '$zona',
	secao = '$secao',
	OAB = '$OAB', 
	titulo_eleitor = '$titulo_eleitor',
	data_desligamento = '$data_desligamento',
	id_situacao = '$id_situacao',
	id_tipo_estagio = '$id_tipo_estagio'");

	$list->update();
		
	$residencia = $_POST["residencia_end"];
	$CEP = $_POST["cep_end"];
	$complemento = $_POST["complemento_end"];
	$uf = $_POST["uf_end"];
	$bairro = $_POST["bairro_end"];
	$cidade = $_POST["cidade_end"];
	$obs = $_POST["observacoes_end"];
	
	$list2 = new manipulaData();
	$list2->setTable("tb_end");
	$list2->setCampoId("id_cad");
	$list2->setValorId($_POST["id_cad"]);
	
	$list2->setCampos("
	residencia = '$residencia',
	CEP = '$CEP',
	complemento = '$complemento',
	uf = '$uf',
	bairro = '$bairro',
	cidade = '$cidade',
	obs = '$obs'");

	$list2->update();
	
	$nomeInstituicao = $_POST["nome_inst"];
	$curso = $_POST["curso_inst"];
	$nivel = $_POST["nivel"];
	$periodo = $_POST["periodo"];
	$turno = $_POST["turno_inst"];
	$dataInicio = $_POST["data_inicio_inst"];
	$dataFim = $_POST["data_fim_inst"];
	
	$list3 = new manipulaData();
	$list3->setTable("tb_instituicao");
	$list3->setCampoId("id_cad");
	$list3->setValorId($_POST["id_cad"]);
	
	$list3->setCampos("
	nome_inst = '$nomeInstituicao',
	id_curso = '$curso',
	nivel = '$nivel',
	periodo = '$periodo',
	turno = '$turno',
	data_inicio = '$dataInicio',
	data_fim = '$dataFim'");

	$list3->update();
	

	
	$residencial = $_POST["tel_res"];
	$celular = $_POST["tel_cel"];
	$trabalho = $_POST["tel_trab"];
	
	$list4 = new manipulaData();
	$list4->setTable("tb_telefone");
	$list4->setCampoId("id_cad");
	$list4->setValorId($_POST["id_cad"]);
	
	$list4->setCampos("
	residencial = '$residencial',
	celular = '$celular',
	trabalho = '$trabalho'");

	$list4->update();

	
	$id_naj = $_POST["naj"];
	$id_defensoria = $_POST["defensoria"];
	
	$list5 = new manipulaData();
	$list5->setTable("tb_lotacao");
	$list5->setCampoId("id_cad");
	$list5->setValorId($_POST["id_cad"]);
	
	$list5->setCampos("
	id_naj = '$id_naj',
	id_defensoria = '$id_defensoria'");

	$list5->update();
	

	
	$nomeArquivo = $_POST["nome_arq"];
	$lugarArquivo = $_POST["lug_arq"];
	$numeroArquivo = $_POST["num_arq"];
	
	$list6 = new manipulaData();
	$list6->setTable("tb_arquivo");
	$list6->setCampoId("id_cad");
	$list6->setValorId($_POST["id_cad"]);
	
	$list6->setCampos("
	nome = '$nomeArquivo',
	lugar_arquivo = '$lugarArquivo',
	numero_arquivo = '$numeroArquivo'");

	$list6->update();


	
	$tipoDoc = $_POST["tipo_documento"];
	$nomeDoc = $_POST["nome_doc"];
	$dataDoc = $_POST["data_doc"];
	$arquivoAnexado = $_POST["input-file-preview"];
	
	$list7 = new manipulaData();
	$list7->setTable("tb_tipo_doc");
	$list7->setCampoId("id_cad");
	$list7->setValorId($_POST["id_cad"]);
	
	$list7->setCampos("
	tipo_doc = '$tipoDoc',
	nome = '$nomeDoc',
	data = '$dataDoc',
	arquivo_anexado = '$arquivoAnexado'");
	
	$list7->update();
	
	//header("location:../../index.php?url=pre_cadastro/lista_pre_cadastro");
	echo "<script> window.location='index.php?url=pre_cadastro/listapre_cad#edit_conf';</script>";
}
?>