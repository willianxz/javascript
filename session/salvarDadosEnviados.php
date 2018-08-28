<?php // COMO MANTER OS DADOS PREENCHIDOS APÓS ENVIAR O FORMULARIO (USANDO APENAS SESSÕES EM PHP)

session_start(); //Aqui startamos a sessão

if(!isset($_SESSION['nome'])){ //Verificamos se não foi setado uma sessão nome:
$_SESSION['nome'] = ''; // Como não foi setado, então setamos agora ela como vazia.
$_SESSION['sobrenome'] = ''; // Por fim setamos o restante como vaziu tambem.
$_SESSION['email'] = '';
}

if(isset($_GET['nome'])){ // Caso exista um GET['nome'], vamos setar a sessão com o que veio do Get
$_SESSION['nome'] = $_GET['nome']; //Sobrescrevemos a sessão com o que veio do GET['nome']
$_SESSION['sobrenome'] = $_GET['sobrenome'];// Sobrescrevemos as sessões restantes.
$_SESSION['email'] = $_GET['email'];  
}

$myArraySession[0] = $_SESSION['nome']; //Aqui apenas declaramos um array para melhor controle e exibição, recebendo 
$myArraySession[1] = $_SESSION['sobrenome'];//Nossas sessões.
$myArraySession[2] = $_SESSION['email'];


//OBS: Note que o que faz com que os digitos permaneção é poder sobrescrever as sessões quando existir um get e
// manter as sessões vazias quando ainda não foi enviado os GETs.


?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mantendo os dados preenchidos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        
        <script>
        
        function validar(){
            alert("Executou a função");
            var x = document.getElementById("formulario");
            var i;
            
            for (i = 0; i < (x.length)-1 ;i++) {  // O -1 ali é para não mostrar o alerta do botão, que sempre será o ultimo.            
                
                //alert(x.elements[i].value);
                if(x.elements[i].value == ""){
                   
                       alert("Preencha o campo "+x.elements[i].name + " por favor.");
                       x.elements[i] = "w3-hover-red";
                }
                
                
            }
        }
            
        </script>
        
        
    </head>
    <body>
        
       <div class="w3-container w3-blue w3-animate-opacity w3-center w3-text-shadow">
        <h2 class="w3-border">Formulario de Envio</h2>
        </div>

        <form class="w3-container" id="formulario">

        <p>
        <label>Nome</label>
        <input class="w3-input w3-hover-cyan" type="text" name="nome" value="<?php echo $myArraySession[0] ?>"></p>

        <p>
        <label>Sobrenome</label>
        <input class="w3-input w3-hover-cyan" type="text" name="sobrenome" value="<?php echo $myArraySession[1] ?>"></p>

        <p>
        <label>Email</label>
        <input class="w3-input w3-hover-cyan" type="text" name="email" value="<?php echo $myArraySession[2] ?>"></p></br>

        <button class="w3-btn w3-hover-cyan w3-xlarge w3-riple" onclick="validar()">Enviar</button>
        
        </form>

     
        
    </body>
</html>
