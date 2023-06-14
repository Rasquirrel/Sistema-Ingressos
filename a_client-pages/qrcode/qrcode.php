<?php
//Namespace usando para nomear as classe e evitar conflito de classe iguais
namespace chillerlan\QRCodeExamples;

//Estamos usando a classe QRCode do namespace QRCodeExamples
use chillerlan\QRCode\{QRCode, QROptions};

//Incluir Composer
include 'vendor/autoload.php';

include '../banco/banco.php';

//URL que será utilizada para gerar o QR
$qtd = $_POST['qtd'];
$url = $_POST['url'];
$id_cli= $_POST['cli'];

$sql = "SELECT `codeve`, `nome_evento`, `rua`, `bairro`, `cidade`, `estado`, day(`data`) as dia,month(`data`) as mes, `hora` FROM `tbevento` where codeve=$url";

$consulta = $conexao->query($sql);
$linha=$consulta->fetch_array(MYSQLI_ASSOC);


$sql_cli = "SELECT `codcli`, `nome`, `cpf`, `email`, `nasc` FROM `tbcliente` WHERE codcli=$id_cli";

$consulta_cli = $conexao->query($sql_cli);
$linha_cli=$consulta_cli->fetch_array(MYSQLI_ASSOC);


//Configurações do QRCode
$options = new QROptions([
	'version'    => 5,
	'outputType' => QRCode::OUTPUT_MARKUP_SVG,
	'eccLevel'   => QRCode::ECC_L,
]);

//invoca uma nova instância QRCode
$qrcode = new QRCode($options);

function random_string($length) {
	$str = random_bytes($length);
	$str = base64_encode($str);
	$str = str_replace(["+", "/", "="], "", $str);
	$str = substr($str, 0, $length);
	return $str;
      }






	  while ($qtd > 0) {
    $vali = true;

    while ($vali) {
        $conteudo = random_string(15);
        $sql_codi = "select * from tbingresso where cod='$conteudo'";
        $consulta_codi = $conexao->query($sql_codi);
        if ($consulta_codi) {
            if ($consulta_codi->num_rows > 0) {
                $vali = true;
            } else {
                $vali = false;

                $sql_ing = "INSERT INTO `tbingresso`(`cod`, `codeve`, `codcli`, `nome_evento`, `rua`, `bairro`, `cidade`, `estado`, `dia`, `mes`, `hora`, `nome`, `cpf`, `email`, `nasc`) VALUES ('$conteudo','" . $linha['codeve'] . "','" . $linha_cli['codcli'] . "','" . $linha['nome_evento'] . "','" . $linha['rua'] . "','" . $linha['bairro'] . "','" . $linha['cidade'] . "','" . $linha['estado'] . "','" . $linha['dia'] . "','" . $linha['mes'] . "','" . $linha['hora'] . "','" . $linha_cli['nome'] . "','" . $linha_cli['cpf'] . "','" . $linha_cli['email'] . "','" . $linha_cli['nasc'] . "')";

                $consulta_ing = $conexao->query($sql_ing);

                // Gerar a imagem e salvar a imagem do QR no servidor
                $qrcode->render($conteudo, 'imgqrcode/curso-de-php-' . $qtd . '.svg');

                echo "
                <div class='card bg-primary m-3'>
                    <div class='card-header'>
                        <h5 class='card-title'>Ingresso</h5>
                    </div>
                    <div class='card-body'>
                        <h4 class='card-subtitle mb-2'><b>" . $linha['nome_evento'] . "</b></h4>
                        <p class='card-text'><b>Data:</b> " . $linha['dia'] . " do " . $linha['mes'] . "</p>
                        <p class='card-text'><b>Horário:</b> " . $linha['hora'] . "</p>
                        <p class='card-text'><b>Local:</b> " . $linha['rua'] . " /Bairro-" . $linha['bairro'] . " /Cidade-" . $linha['cidade'] . " /Estado-" . $linha['estado'] . "</p>
                        <hr>
                        <div class='text-center'>
                            <img src='qrcode/imgqrcode/curso-de-php-" . $qtd . ".svg' width='200'>
                        </div>
                    </div>
                    <div class='card-footer'>
                        <b class='text-muted text-center'>Apresente este ingresso na entrada</b>
                    </div>
                </div>";

                $qtd = $qtd - 1;
            } //fim else
        }
    } //fim while de verificação
} //fim while