<?php
//Namespace usando para nomear as classe e evitar conflito de classe iguais
namespace chillerlan\QRCodeExamples;

//Estamos usando a classe QRCode do namespace QRCodeExamples
use chillerlan\QRCode\{QRCode, QROptions};

//Incluir Composer
include 'vendor/autoload.php';

include '../banco/banco.php';

$cli= $_POST['cli'];

//Configurações do QRCode
$options = new QROptions([
	'version'    => 5,
	'outputType' => QRCode::OUTPUT_MARKUP_SVG,
	'eccLevel'   => QRCode::ECC_L,
]);

//invoca uma nova instância QRCode
$qrcode = new QRCode($options);


        $sql_codi = "select * from tbingresso where codcli='$cli'";
        $consulta_codi = $conexao->query($sql_codi);
            if ($consulta_codi->num_rows > 0) {
                $qtd=1;
                while($linha=$consulta_codi->fetch_array(MYSQLI_ASSOC)){

                // Gerar a imagem e salvar a imagem do QR no servidor
                $qrcode->render($linha['cod'], 'imgqrcode/curso-de-php-' . $qtd . '.svg');

                echo "
                <div class='card bg-primary m-3'>
                    <div class='card-header'>
                        <h5 class='card-title'>Ingresso</h5>
                    </div>
                    <div class='card-body infs'>
                        <h4 class='card-subtitle mb-2'><b>" . $linha['nome_evento'] . "</b></h4>
                        <p class='card-text'><b>Data:</b> " . $linha['dia'] . " do " . $linha['mes'] . "</p>
                        <p class='card-text'><b>Horário:</b> " . $linha['hora'] . "</p>
                        <h5><b>Local:</b> " . $linha['rua'] . " /Bairro-" . $linha['bairro'] . " </h5><h5>/Cidade-" . $linha['cidade'] . " /Estado-" . $linha['estado'] . "</h5>
                        <hr>
                        <div class='text-center'>
                            <img src='qrcode/imgqrcode/curso-de-php-" . $qtd . ".svg' width='200'>
                        </div>
                    </div>
                    <div class='card-footer'>
                        <b class='text-muted text-center'>Apresente este ingresso na entrada</b>
                    </div>
                </div>";
                        $qtd+=1;
        }//fim while 
    }//if num_rows