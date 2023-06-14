<?php
    include 'banco/banco.php';
    $id=$_POST['id'];
    $sql = "SELECT `codeve`, `nome_evento`, `rua`, `bairro`, `cidade`, `estado`, day(`data`) as dia,month(`data`) as mes, `hora`, `qtd_ingressos`, `atracao`, `valor`,`tipo_foto` FROM `tbevento` where codeve=$id";
    $consulta = $conexao->query($sql);
    $linha=$consulta->fetch_array(MYSQLI_ASSOC);
    echo "<div class='card' id='".$linha['codeve']."'>
    <button id='voltar_eventos' class='btn-lg btn-primary'><i class='fa fa-arrow-left'></i> Voltar</button>
    <div class='card-header header'>
      <div class='row'>
          <div class='col-md-5'>
            <img src='eventios/".$linha['codeve'].$linha['nome_evento'].".".$linha['tipo_foto']."' class='fotios2 m-1'>
          </div>
          <div class='col-md-1'></div>
          <div class='col-md-6 border-secondary'>
            <h1><b>".$linha['nome_evento']."</b></h1>
            <h3><b>Atração:</b> ".$linha['atracao']."</h3>
            <h3><b>Local:</b> ".$linha['rua']." /Bairro-".$linha['bairro']." /Cidade-".$linha['cidade']." /Estado-".$linha['estado']."</h3>
            <h3><b>Data:</b> ".$linha['dia']."/".$linha['mes']." as ".$linha['hora']."</h3>
          </div>
      </div>
    </div>
    <div class='card-body'>
    <div class='row'>
            <b>Benefícios de Meia-Entrada:</b>
            <p><b>ESTUDANTES</b> mediante apresentação da Carteira de Identificação Estudantil (CIE), emitida pela ANPG, UNE, Ubes, entidades estaduais e municipais, Diretórios Centrais dos Estudantes, Centros e Diretórios Acadêmicos, conforme modelo único nacionalmente padronizado. Os elementos indispensáveis da CIE são: I - nome completo e data de nascimento do estudante; II - foto recente do estudante; III - nome da instituição de ensino na qual o estudante esteja matriculado; IV - grau de escolaridade; e V - data de validade até o dia 31 de março do ano subsequente ao de sua expedição. Consulte também: www.documentodoestudante.com.br - conforme Lei Federal 12.933/13, Decreto Federal 8.537/15 e Medida Cautelar Provisória concedida pelo STF em 29/12/2015.</p>
            <p><b>IDOSOS</b> (pessoas com mais de 60 anos) mediante apresentação do documento de identidade oficial com foto. - conforme Lei Federal 10.741/03 e Decreto Federal 8.537/15.</p>
            <p><b>JOVENS PERTENCENTES A FAMÍLIAS DE BAIXA RENDA</b>, com idades de 15 a 29 anos, mediante apresentação da Carteira de Identidade Jovem que será emitida pela Secretaria Nacional de Juventude a partir de 31 de março de 2016, acompanhada de documento de identidade oficial com foto. - conforme Lei Federal 12.933/13 e Decreto Federal 8.537/15.</p>
            <p><b>PESSOAS COM DEFICIÊNCIA</b> e acompanhante quando necessário mediante apresentação do Cartão de Benefício de Prestação Continuada da Assistência Social da Pessoa com Deficiência ou de documento emitido pelo Instituto Nacional do Seguro Social - INSS que ateste a aposentadoria de acordo com os critérios estabelecidos na Lei Complementar nº 142, de 8 de maio de 2013. No momento de apresentação, esses documentos deverão estar acompanhados de documento de identidade oficial com foto. - conforme Lei Federal 12.933/13 e Decreto Federal 8.537/15.</p>
            <p><b>DIRETORES, COORDENADORES PEDAGÓGICOS, SUPERVISORES E TITULARES</b> de cargos do quadro de apoio das escolas das redes estadual e municipais mediante apresentação da Carteira funcional emitida pela Secretaria de Educação de São Paulo ou holerite acompanhado de documento oficial com foto. - conforme Lei Estadual n° 15.298/14.</p>
            <p><b>PROFESSORES</b> da rede pública estadual e das redes municipais de ensino mediante apresentação da Carteira funcional emitida pela Secretaria da Educação de São Paulo ou holerite acompanhado de documento oficial com foto. - conforme Lei Estadual n° 14.729/12.</p>
            <p>Ponto de venda sem taxa de conveniência: ".$linha['rua']." Bairro:".$linha['bairro']." Cidade:".$linha['cidade']." Estado:".$linha['estado'].".</p>
          </div>



          <div class='card-footer'>
          <b>valor:<E id='preco'>".$linha['valor']."</E></b><br>
          <div class='row'>
          <div class='col-sm-4'>
          <input type='range' id='num2' min='0' max='10' class='form-control' value='0'>
          </div>
          <div class='col-sm-2'>
          <b>Quantidade:<g id='qtd'></g></b>
          </div>
          <div class='col-sm-2'>
          <b>total:<g id='total'></g></b>
          </div>
          <div class='col-sm-3'>
            <button id='comprar' class='btn btn-success'>Comprar</button>
          </div>
        </div>
        </div>
        
  <div>
    
    
  </div>
  ";

?>