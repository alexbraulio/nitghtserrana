 <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
             <p>Copyright &copy; NightSerrana 2016 &nbsp&nbsp 
              <a href="/privacidade.php">Política de Privacidade </a>
              <a href="http://www.nightserrana.com.br">&nbsp&nbsp Nightserrana. </a>
              &nbsp&nbsp <?php
$arquivo = "contador.txt";
// Este é o arquivo de texto que mantemos na nossa contagem

$handle = fopen($arquivo, 'r+') ;
/*
Aqui vamos definir o arquivo, as permissões para ler e escrever, por isso utilizamos o r+ (ler e escrever no arquivo)
*/

$data = fread($handle, 512) ;
//Obtem a contagem atual do arquivo

$contador = $data + 1;
//Adiciona + 1
print "Número de acessos ".$contador;
//Exibe na tela o resultado encontrado no TXT

fseek($handle, 0);

fwrite($handle, $contador) ;
// Salva o valor da variavel contador no arquivo

fclose($handle) ;
// Fecha o arquivo
?>

          </div>
         
        </div>

      </div>


    </footer>