<?php
	$visualizar = new manipulaData();
	$visualizar->setTable( "tb_cadastro" );
	$visualizar->setCampoId( 'id_cad' );
	$visualizar->setValorId( $_GET[ 'id_cad' ] );
	$dados = $visualizar->getListEditar();
	$reg = mysqli_fetch_object( $dados );
?>


<head>
    <script type="text/javascript" src="bootstrap/js/jquery.maskedinput.js"></script>
    <script>
        removejscssfile("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", "js");
        removejscssfile("jquery/jquery.js", "js");
    </script>

</head>

<body>

<div class="container">

    <div class="right">
        <a href="index.php?url=pre_cadastro/listapre_cad">
            <button  class="btn btn-primary center-block" style="font-size: 15px; float: left;" >
                <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar
            </button>
        </a>
    </div>
    <br> <br>

<br>
    <form class="form-horizontal" method="post" action="index.php?url=pre_cadastro/acoes/crudPre_Cadastro" >

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Informações Pessoais</h3>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                    </div>
                    <div class="panel-body">

                           <!-- 1ª Linha -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Matrícula : </div>
                                    <div class="col-md-12">
                                        <input name="matricula" type="text" class="form-control" id="matricula" placeholder="Matricula" required="required" value="<?php echo $reg->matricula?>" disabled> <input name="txtLocal" value="Salvar" type="hidden">
                                        <input type="text" name="id_cad" id="id_cad" style="display:none;" value="<?php echo $reg->id_cad?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- 2ª Linha -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8"> Nome* : </div>
                                    <div class="col-md-12">
                                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" required="required" value="<?php echo $reg->nome?>" style="text-transform:uppercase;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8"> Filiação : </div>
                                    <div class="col-md-12">
                                        <input name="filiacao" type="text" class="form-control" id="filiacao" placeholder="Filiacao" required="required" value="<?php echo $reg->filiacao?>" style="text-transform:uppercase;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- 3ª Linha -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Nacionalidade : </div>
                                    <div class="col-md-12">
                                        <select id="nacionalidade" name="nacionalidade" class="form-control">
                                            <option></option>
                                            <?php
                                            $nacionalidadeCombo = array(
                                                "Brasileiro" => "Brasileiro"
                                            );

                                            $nacionalidade_selecionada = $reg->nacionalidade;

                                            foreach ($nacionalidadeCombo as $nacionalidade => $value):
                                                ?>

                                                <?php $selected = ($nacionalidade_selecionada == $nacionalidade) ? "selected=\"selected\"" : null; ?>

                                                <?php echo "<option value=\"$nacionalidade\" $selected>$value</option>"; ?>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Naturalidade: </div>
                                    <div class="col-md-12">
                                        <input name="naturalidade" type="text" class="form-control" id="naturalidade" required="required" value="<?php echo $reg->naturalidade?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Email
                                </div>
                                <div class="col-md-12">
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Email" required="required" value="<?php echo $reg->email?>">
                                </div>
                            </div>

                        </div>

                        </div>
                        <br>

                        <!-- 4ª Linha -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-10"> Data de Nascimento : </div>
                                    <div class="col-md-12">
                                        <input name="data_nascimento" type="date" class="form-control" id="data_nascimento" placeholder="" required="required" value="<?php echo $reg->data_nascimento?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Estado Civil : </div>
                                    <div class="col-md-12">
                                        <select id="estado_civil" name="estado_civil" class="form-control" required>
                                            <option></option>
                                            <?php
                                            $estadoCivilCombo = array(
                                                "Solteiro" => "Solteiro",
                                                "Casado" => "Casado",
                                                "Divorciado"  => "Divorciado"
                                            );

                                            $estadoCivil_selecionado = $reg->estado_civil;
                                            foreach ($estadoCivilCombo as $estadoCivil => $value):
                                                ?>
                                                <?php $selected = ($estadoCivil_selecionado == $estadoCivil) ? "selected=\"selected\"" : null; ?>
                                                <?php echo "<option value=\"$estadoCivil\" $selected>$value</option>"; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Sexo : </div>
                                    <div class="col-md-12">
                                        <select id="sexo" name="sexo" class="form-control" required >
                                            <option></option>
                                            <?php
                                            $sexoCombo = array(
                                                "Masculino" => "Masculino",
                                                "Feminino"  => "Feminino",
                                                "Indefinido"=>"Indefinido"
                                            );

                                            $sexo_selecionado = $reg->sexo;
                                            foreach ($sexoCombo as $sexo => $value):
                                                ?>
                                                <?php $selected = ($sexo_selecionado == $sexo) ? "selected=\"selected\"" : null; ?>
                                                <?php echo "<option value=\"$sexo\" $selected>$value</option>"; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- 5ª Linha -->
                        <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8"> CPF* : </div>
                                <div class="col-md-12">
                                    <input name="CPF" type="text" class="form-control" id="CPF" placeholder="CPF" required="required" value="<?php echo $reg->CPF?>" >
                                </div>
                            </div>
                        </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Identidade* : </div>
                                    <div class="col-md-12">
                                        <input name="identidade" type="text" class="form-control" id="identidade" placeholder="Identidade" required="required" value="<?php echo $reg->identidade?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Orgão Expedidor*:
                                </div>
                                <div class="col-md-12">
                                    <select id="orgao" name="orgao" class="form-control" required >
                                            <option></option>
                                            <?php
                                            $orgaoCombo = array(
												"SSP - Secretaria de Segurança Pública" => "SSP - Secretaria de Segurança Pública",
                                            "PM - Polícia Militar"  => "PM - Polícia Militar",
                                            "PC - Policia Civil"  => "PC - Policia Civil",
                                            "CNT - Carteira Nacional de Habilitação"  => "CNT - Carteira Nacional de Habilitação",
                                            "DIC - Diretoria de Identificação Civil"  => "DIC - Diretoria de Identificação Civil",
                                            "CTPS - Carteira de Trabaho e Previdência Social"  => "CTPS - Carteira de Trabaho e Previdência Social",
                                            "FGTS - Fundo de Garantia do Tempo de Serviço"  => "FGTS - Fundo de Garantia do Tempo de Serviço",
                                            "IFP - Instituto Félix Pacheco"  => "IFP - Instituto Félix Pacheco",
                                            "IPF - Instituto Pereira Faustino"  => "IPF - Instituto Pereira Faustino",
                                            "IML - Instituto Médico-Legal"  => "IML - Instituto Médico-Legal",
                                            "MTE - Ministério do Trabalho e Emprego"  => "MTE - Ministério do Trabalho e Emprego",
                                            "MMA - Ministério da Marinha"  => "MMA - Ministério da Marinha",
                                            "MAE - Ministério da Aeronáutica"  => "MAE - Ministério da Aeronáutica",
                                            "MEX - Ministério do Exército"  => "MEX - Ministério do Exército",
                                            "POF - Polícia Federal"  => "POF - Polícia Federal",
                                            "POM - Polícia Militar"  => "POM - Polícia Militar",
                                            "SES - Carteira de Estrangeiro"  => "SES - Carteira de Estrangeiro",
                                            "SJS - Secretaria da Justiça e Segurança"  => "SJS - Secretaria da Justiça e Segurança",
                                            "SJTS - Secretaria da Justiça do Trabalho e Segurança"  => "SJTS - Secretaria da Justiça do Trabalho e Segurança",
                                            "ZZZ - Outros (inclusive exterior) "=>"ZZZ - Outros (inclusive exterior) "
                                            );

                                            $orgao_selecionado = $reg->orgao;
                                            foreach ($orgaoCombo as $orgao => $value):
                                                ?>
                                                <?php $selected = ($orgao_selecionado == $orgao) ? "selected=\"selected\"" : null; ?>
                                                <?php echo "<option value=\"$orgao\" $selected>$value</option>"; ?>
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    UF*:
                                </div>
                                <div class="col-md-12">
                                    <select id="uf" name="uf" class="form-control" required >
                                            <option></option>
                                            <?php
                                            $ufCombo = array(
                                            "AC"  => "Acre",
                                            "AL"  => "Alagoas",
                                            "AP"  => "Amapá",
                                            "AM"  => "Amazonas",
                                            "BA"  => "Bahia",
                                            "CE"  => "Ceará",
                                            "DF"  => "Distrito Federal",
                                            "ES"  => "Espírito Santo",
                                            "GO"  => "Goiás",
                                            "MA"  => "Maranhão",
                                            "MT"  => "Mato Grosso",
                                            "MS"  => "Mato Grosso do Sul",
                                            "MG"  => "Minas Gerais",                                           
                                            "PA"  => "Pará",
                                            "PB"  => "Paraíba",
                                            "PR"  => "Paraná",
                                            "PE"  => "Pernambuco",
                                            "PI"  => "Piauí",
                                            "RJ"  => "Rio de Janeiro",
                                            "RN"  => "Rio Grande do Norte",
                                            "RS"  => "Rio Grande do Sul",
                                            "RO"  => "Rondônia",
                                            "RR"  => "Roraima",
                                            "SC"  => "Santa Catarina",
                                            "SP"  => "São Paulo",
                                            "SE"  => "Sergipe",
                                            "TO"  => "Tocantins"
                                            );

                                            $uf_selecionado = $reg->uf_identidade;
                                            foreach ($ufCombo as $uf => $value):
                                                ?>
                                                <?php $selected = ($uf_selecionado == $uf) ? "selected=\"selected\"" : null; ?>
                                                <?php echo "<option value=\"$uf\" $selected>$value</option>"; ?>
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <br>

                    <!-- 6ª Linha -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8"> Zona : </div>
                                <div class="col-md-12">
                                    <input name="zona" type="text" class="form-control" id="zona" placeholder="Zona" value="<?php echo $reg->zona?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8"> Seção: </div>
                                <div class="col-md-12">
                                    <input name="secao" type="text" class="form-control" id="secao" placeholder="Seção" value="<?php echo $reg->secao?>" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8"> OAB : </div>
                                <div class="col-md-12">
                                    <input name="OAB" type="text" class="form-control" id="OAB" placeholder="OAB" value="<?php echo $reg->OAB?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8"> Título de Eleitor: </div>
                                <div class="col-md-12">
                                    <input name="titulo_eleitor" type="text" class="form-control" id="titulo_eleitor" placeholder="Título de Eleitor" value="<?php echo $reg->titulo_eleitor?>" >
                                </div>
                            </div>
                        </div>
                    </div>
                        <br>

                        <!-- 7ª Linha -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Cadastro : </div>
                                    <div class="col-md-12">

                                        <input name="data_cadastro" type="text" class="form-control" id="data_cadastro" placeholder="" required="required" value="<?php echo $reg->data_cadastro?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Desligamento: </div>
                                    <div class="col-md-12">
                                        <input name="data_desligamento" type="date" class="form-control" id="data_desligamento" placeholder="" value="<?php echo $reg->data_desligamento?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Tipo Estágio : </div>
                                    <div class="col-md-12">
                                        <?php
                                        $vi = new manipulaData();
                                        $vi->setTable("tb_tipo_estagio");
                                        $dados2= $vi->getList();
                                        ?>
                                        <select id="tipo_estagio" name="id_tipo_estagio" class="form-control">
                                            <?php  while($tipoestagio = mysqli_fetch_object($dados2)){ ?>
                                                <option value="<?=$tipoestagio->id_tipo_estagio?>" <?php if($tipoestagio->id_tipo_estagio == $reg->id_tipo_estagio){echo "selected"; } ?> >
                                                    <?=$tipoestagio->tipo?>
                                                </option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Situação : </div>
                                    <div class="col-md-12">

                                        <?php
                                        $si = new manipulaData();
                                        $si->setTable("tb_situacao");
                                        $situac= $si->getList();
                                        ?>

                                        <select id="situacao" name="id_situacao" class="form-control">
                                            <?php  while($sit = mysqli_fetch_object($situac)){ ?>
                                                <option value="<?=$sit->id_situacao?>" <?php if($sit->id_situacao == $reg->id_situacao){echo "selected"; } ?> >
                                                    <?=$sit->situacao?>
                                                </option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim de informacoes -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Endereço</h3>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                    </div>
                    <div class="panel-body">

                        <legend>
                            <h3>Endereço</h3>
                        </legend>
                        <!-- 1ª Linha -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> CEP : </div>
                                    <div class="col-md-12">
                                        <?php
                                        $en = new manipulaData();
                                        $en->setTable("tb_end");
                                        $en->setCampoId('id_cad');
                                        $en->setValorId($reg->id_cad);
                                        $ender= $en->getListEditar();
                                        $end = mysqli_fetch_object($ender);
                                        ?>


                                        <input name="cep_end" type="text" class="form-control" id="CEP" placeholder="CEP" value="<?=$end->CEP?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- 2ª Linha -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8"> Residência: </div>
                                    <div class="col-md-12">
                                        <input name="residencia_end" type="text" class="form-control" id="residencia" placeholder="Residência" value="<?php echo $end->residencia?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- 3ª Linha -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Complemento: </div>
                                    <div class="col-md-12">
                                        <input name="complemento_end" type="text" class="form-control" id="complemento" placeholder="complemento" value="<?php echo $end->complemento?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- 4ª Linha -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-8"> UF : </div>
                                    <div class="col-md-12">
                                        <input name="uf_end" type="text" class="form-control" id="uf" placeholder="UF" value="<?=$end->uf?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- 5ª Linha -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-8"> Cidade : </div>
                                    <div class="col-md-12">
                                        <input name="cidade_end" type="text" class="form-control" id="cidade" placeholder="cidade" value="<?=$end->cidade?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- 6ª Linha -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8"> Bairro: </div>
                                    <div class="col-md-12">
                                        <input name="bairro_end" type="text" class="form-control" id="bairro" placeholder="Bairro" value="<?php echo $end->bairro?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- 7ª Linha -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8"> Observações: </div>
                                    <div class="col-md-12">
									<textarea name="observacoes_end" id="observacoes" cols="75 " rows="5">
										<?php echo $end->obs?>
									</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim de endereçoes -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Instituição</h3>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                    </div>

                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">
                                    <?php
                                    $list3 = new manipulaData();
                                    $list3->setTable("tb_instituicao");
                                    $list3->setCampoId('id_cad');
                                    $list3->setValorId($_GET['id_cad']);
                                    $dados3= $list3->getListEditar();;
                                    $cur = mysqli_fetch_object($dados3);
                                    ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nome_inst">Nome da Instituição</label>
                                                <input name="nome_inst" type="text" class="form-control" id="nome_inst" placeholder="@Centro Universitário" value="<?php echo $cur->nome_inst?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="curso">Curso</label>
                                        <select id="curso" name="curso_inst" class="form-control">
                                            <?php
                                            $curso = new manipulaData();
                                            $curso->setTable("tb_curso");
                                            $curso->setCampoId('id_curso');
                                            $curso->setValorId($cur->id_curso);
                                            $cursos= $curso->getList();
                                            ?>


                                            <option></option>
                                            <?php while($curs = mysqli_fetch_object($cursos)){ ?>
                                                <option value="<?=$curs->id_curso?>"
                                                    <?php if($curs->id_curso == $cur->id_curso){echo "selected"; } ?>>
                                                    <?=$curs->descricao?>
                                                </option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="curso">Nível Escolaridade</label>
                                        <select class="form-control" name="nivel" id="nivel">
                                            <option></option>
                                            <?php
                                            $nivelCombo = array(
                                                "Nivel Medio"=> "Nivel Medio",
                                                "Nivel Superior"=> "Nivel Superior"
                                            );
                                            $nivel_selecionado = $cur->nivel;

                                            foreach ($nivelCombo as $nivel => $value):
                                                $selected = ($nivel_selecionado == $nivel) ? "selected=\"selected\"" : null;
                                                echo "<option value=\"$nivel\" $selected>$value</option>";
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="turno">Turno</label>
                                        <select class="form-control" name="turno_inst" id="turno">
                                            <option></option>
                                            <?php
                                            $turnoCombo = array(
                                                "Matutino"=> "Matutino",
                                                "Vespertino"=> "Vespertino",
                                                "Noturno"=> "Noturno"
                                            );
                                            $turno_selecionado = $cur->turno;

                                            foreach ($turnoCombo as $turno => $value):
                                                $selected = ($turno_selecionado == $turno) ? "selected=\"selected\"" : null;
                                                echo "<option value=\"$turno\" $selected>$value</option>";
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="periodo">Período </label>
                                        <select class="form-control" name="periodo" id="periodo">
                                            <option></option>
                                            <?php
                                            $periodoCombo = array(
                                                "1º Semestre/Ano"=> "1º Semestre/Ano",
                                                "2º Semestre/Ano"=> "2º Semestre/Ano",
                                                "3º Semestre/Ano"=> "3º Semestre/Ano",
                                                "4º Semestre"=> "4º Semestre",
                                                "5º Semestre"=> "5º Semestre",
                                                "6º Semestre"=> "6º Semestre",
                                                "7º Semestre"=> "7º Semestre",
                                                "8º Semestre"=> "8º Semestre",
                                                "9º Semestre"=> "9º Semestre",
                                                "10º Semestre"=> "10º Semestre"
                                            );
                                            $periodo_selecionado = $cur->periodo;

                                            foreach ($periodoCombo as $periodo => $value):
                                                $selected = ($periodo_selecionado == $periodo) ? "selected=\"selected\"" : null;
                                                echo "<option value=\"$periodo\" $selected>$value</option>";
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- 2ª Linha -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="data_inicio">Data de Inicio</label>
                                        <input name="data_inicio_inst" type="date" class="form-control" id="data_inicio" value="<?php echo $cur->data_inicio?>">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="data_fim">Data Fim</label>
                                        <input name="data_fim_inst" type="date" class="form-control" id="data_fim" value="<?php echo $cur->data_fim?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim de instituição -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Telefone</h3>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                    </div>
                    <div class="panel-body">
                        <?php
                        $telefone = new manipulaData();
                        $telefone->setTable( "tb_telefone" );
                        $telefone->setCampoId('id_cad');
                        $telefone->setValorId( $_GET['id_cad']);
                        $tele = $telefone->getListEditar();
                        $tel = mysqli_fetch_object( $tele );
                        ?>
                        <!-- 1ª Linha -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-8"> Telefone Residencial: </div>
                                    <div class="col-md-12">
                                        <input type="text" name="tel_res" class="form-control" id="telefone1" value="<?php echo $tel->residencial?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-8"> Telefone Celular: </div>
                                    <div class="col-md-12">
                                        <input type="text" name="tel_cel" class="form-control" id="telefone2" value="<?php echo $tel->celular?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-8"> Telefone do Trabalho: </div>
                                    <div class="col-md-12">
                                        <input type="text" name="tel_trab" class="form-control" id="telefone3" value="<?php echo $tel->trabalho?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fim telefone -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Lotação</h3>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                    </div>
                    <div class="panel-body">
                        <?php
                        $lotacao = new manipulaData();
                        $lotacao->setTable( "tb_lotacao" );
                        $lotacao->setCampoId( 'id_cad' );
                        $lotacao->setValorId( $_GET[ 'id_cad' ] );
                        $lota = $lotacao->getListEditar();
                        $lot = mysqli_fetch_object( $lota );
                        ?>
                        <!-- 1ª Linha -->
                        <!--<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Nome: </div>
								<div class="col-md-12">
									<input name="nome_naj" type="text" class="form-control" id="nomeNaj" placeholder="Nome" value="<?php echo $lot->nome?>">
								</div>
							</div>
						</div>
					</div>
					<br>

					<!-- 2ª Linha -->
                        <!--<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<div class="col-md-8"> Endereço: </div>
								<div class="col-md-12">
									<input name="endereco_naj" type="text" class="form-control" id="enderecoNaj" placeholder="Endereço" value="<?php echo $lot->endereco?>">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Telefone: </div>
								<div class="col-md-12">
									<input name="telefone_naj" type="text" class="form-control" id="telefoneNaj" placeholder="Telefone" value="<?php echo $lot->telefone?>">
								</div>
							</div>
						</div>
					</div>-->


                        <!-- NAJ -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-8"> NAJ: </div>
                                    <div class="col-md-12">
                                        <select id="naj" name="naj" class="form-control">
                                            <?php
                                            $lot= new manipulaData();
                                            $lot->setTable("tb_lotacao");
                                            $lot->setCampoId('id_cad');
                                            $lot->setValorId($_GET['id_cad']);
                                            $lot= $lot->getListEditar();
                                            $lot = mysqli_fetch_object($lot);

                                            $najs= new manipulaData();
                                            $najs->setTable("tb_naj");
                                            //$najs->setCampoId('id_naj');
                                            //$najs->setValorId($lot->id_naj);
                                            $naj= $najs->getList();
                                            ?>


                                            <?php  while($naj1 = mysqli_fetch_object($naj)){ ?>
                                                <option value="<?=$naj1->id_naj?>"
                                                    <?php if($naj1->id_naj == $lot->id_naj){echo "selected"; } ?>>
                                                    <?=$naj1->nome?>
                                                </option>
                                            <?php  } ?>
                                        </select>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fim NAJ -->

                        <!-- Defensoria 
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-8"> Defensoria: </div>
                                    <div class="col-md-12">
                                        <?php
                                        $defen= new manipulaData();
                                        $defen->setTable("tb_defensoria");
                                        //$defen->setCampoId('id_defensoria');
                                        //$defen->setValorId($lot->id_defensoria);
                                        $def= $defen->getList();
                                        ?>

                                        <select id="defensoria" name="defensoria" class="form-control">
                                            <?php  while($def1 = mysqli_fetch_object($def)){ ?>
                                                <option value="<?=$def1->id_defensoria?>"
                                                    <?php if($def1->id_defensoria == $lot->id_defensoria){echo "selected"; } ?>
                                                >
                                                    <?=$def1->nome?>
                                                </option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <!--fim defensoria -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Arquivo</h3>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                    </div>
                    <div class="panel-body">
                        <?php
                        $arquivo = new manipulaData();
                        $arquivo->setTable( "tb_arquivo" );
                        $arquivo->setCampoId( 'id_cad' );
                        $arquivo->setValorId( $_GET[ 'id_cad' ] );
                        $arqui = $arquivo->getListEditar();
                        $arq = mysqli_fetch_object( $arqui );
                        ?>
                        <!-- 1ª Linha -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-8"> Nome: </div>
                                    <div class="col-md-12">
                                        <input name="nome_arq" type="text" class="form-control" id="nomeArquivo" placeholder="Arquivo" value="<?php echo $arq->nome?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- 2ª Linha -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-8"> Lugar do Arquivo: </div>
                                    <div class="col-md-12">
                                        <input name="lug_arq" type="text" class="form-control" id="lugarArquivo" placeholder="Lugar do Arquivo" value="<?php echo $arq->lugar_arquivo?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-8"> Número do Arquivo: </div>
                                    <div class="col-md-12">
                                        <input name="num_arq" type="text" class="form-control" id="numeroArquivo" placeholder="Numero do Arquivo" value="<?php echo $arq->numero_arquivo?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim arquivo -->

        <!--<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
						Documentos</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
				</div>
				<div class="panel-body">
					<?php
        $documento = new manipulaData();
        $documento->setTable("tb_tipo_doc");
        $documento->setCampoId('id_cad');
        $documento->setValorId($_GET['id_cad']);
        $docu= $documento->getListEditar();
        $doc = mysqli_fetch_object($docu);
        ?>-->

        <!-- 1ª Linha -->
        <!--<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Tipo Documento: </div>
								<div class="col-md-12">
									<select id="tipo_documento" name="tipo_documento" class="form-control">
										<option></option>
										<?php
        $tipoCombo = array(
            "Imagem"=>"Imagem",
            "PDF"=>"PDF"
        );

        $tipo_selecionado = $doc->tipo_doc;
        foreach ($tipoCombo as $tipo => $value):
            ?>
										<?php $selected = ($tipo_selecionado == $tipo) ? 	"selected=\"selected\"" : null; ?>
										<?php echo "<option value=\"$tipo\" $selected>$value</option>"; ?>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
					</div>-->
        <br>

        <!-- 2ª Linha -->
        <!--<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<div class="col-md-8"> Nome do Documento: </div>
								<div class="col-md-12">
									<input name="nome_doc"  type="text" class="form-control" id="nome_documento" placeholder="Nome do Documento" value="<?php echo $doc->nome?>">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Data do Documento: </div>
								<div class="col-md-12">
									<input name="data_doc" type="date" class="form-control" id="data_documento" placeholder="" value="<?php echo $doc->data?>">
								</div>
							</div>
						</div>
					</div>
					<br> -->

        <!-- 3ª Linha -->
        <!--<div class="row">
						<div class="container">
							<div class="row">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-6 col-md-offset col-sm-8 col-sm-offset">
											<div class="input-group image-preview">
												<input type="text" class="form-control image-preview-filename" disabled="disabled" value="<?php echo $doc->arquivo_anexado?> ">
												<span class="input-group-btn">
													<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove" ></span> Clear </button>

													<div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">

												<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
													Documento</span>

													</div>
												</span>
											</div>-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- fim documentos -->
</div>
<!-- BOTÕES -->
<center>
    <div class="btn-group">
        <button id="btsalvar"  type="submit"  class="btn btn-primary">Salvar</button>
    </div>
</center>
</form>


</body>
