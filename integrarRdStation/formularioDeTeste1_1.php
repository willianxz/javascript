

<?php
//https://github.com/ResultadosDigitais/rdocs/blob/master/rdstation_js_integration.md
// Importando o arquivo com a classe RD_Station
require_once("RD_Station.php");


 if(isset($_POST['email'])){

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $empresa = $_POST['empresa'];
    
    $meusDados = array(

        'email' => $email,
        'nome' => $nome,
        'cargo' => $cargo,
        'empresa' => $empresa

    );






    // Instanciando a classe RD_Station
    $rdstation = new RD_Station($meusDados);//Pode ser que você esteja recebendo os dados de outra forma ao invés da variável $_POST. Sem problemas, 
    //desde que seja um array.

    // Passando o meu token RD Station
    $rdstation->token = '4f169dd77c9173b62c6ddc6c5b2061ca'; //Um desses parâmetros obrigatórios é o seu token público do RD Station:

    // Identificador do formulário
    $rdstation->identifier = 'formulario-site-com-resultado';//Você também precisa passar um identificador para este formulário, 
    //dessa forma você sempre saberá o formulário de origem do lead.



    //Ignorar campos do formulário
    //Não é recomendável enviar senhas ou captcha para o seu RD Station, por exemplo. Para evitar que esses campos sejam enviados, 
    //basta você informar à classe que eles devem ser ignorados. Insira o name desses campos em um array, como no exemplo abaixo:
    //Ignorando campos desnecessários
    //$rdstation->ignore_fields = array('campodesnecessario1', 'campodesnecessario2', 'campodesnecessario3');


    //Redirecionamentos
    //Seu formulário em PHP deve possuir algum lugar para onde ele redireciona o usuário caso tudo ocorra bem ou caso ocorra algum erro. 
    //Passe estes redirecionamentos para a instância do RD Station


    // Redirecionamento caso tudo esteja ok
    $rdstation->redirect_success = 'https://www.google.com.br/?gfe_rd=cr&ei=BNi9V6nlD4SF8Qfzto7oCg';

    // Redirecionamento caso ocorram erros
    $rdstation->redirect_error = 'http://linkdesejadoaqui.com.br';


    //Criando o lead
    //A última coisa que você precisa fazer, é chamar a função que cria o lead. Se você passou todos os parâmetros corretamente, 
    //os leads irão aparecer no seu RD Station quando o seu formulário for enviado.
    $rdstation->createLead(); // Identificador: formulario-site-com-resultado
    //Email cliente;

    }

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
      <head>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
       <title>Rd Station</title>
      </head>
    <body>
       
                <div class="w3-container">
                  <form action="https://www.rdstation.com.br/api/1.2/conversions" method="POST">
                    
                            <p>Nome:</p>
                            <input type="text" name="nome" class="w3-input">
                            <p>Email:</p>         
                            <input type="email"  name="email" class="w3-input">
                            <p>Cargo:</p>         
                                  <input type="text"  name="cargo" class="w3-input">
                            <p>Empresa:</p>         
                            <input type="text" name="empresa" class="w3-input"> 
                            
                            <input type="hidden" name="token_rdstation" value="4f169dd77c9173b62c6ddc6c5b2061ca" />
                            <input type="hidden" name="identificador" value="formulario-site-com-resultado" />
                                 
                            <input type="submit"  value="Enviar" class="w3-btn">
                  </form>  
                 </div>
                </body>
            </html>