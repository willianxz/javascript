
<?php 


function verificarPesquisa(){
    
    if(isset($_GET['q'])){
       
        $pesquisa = $_GET['q'];
        
        switch ($pesquisa) {
            case 'pesquisa':
                    
                echo "O que está digitado é: "."pesquisa, faça a sua pelo <a href='https://www.google.com.br/?gfe_rd=cr&ei=fku7V8S5NJKq8wfTzYPgAg'>google</a>.";
                break;
           
            case 'cachorro':
                echo "O que está digitado é: "."cachorro, eles são otimos animais de estimação!";
                break;
            
           case 'gato':
                echo "O que está digitado é: "."gato, eles miam muito...";
                break;
            
           case 'tigre':
                echo "O que está digitado é: "."tigre, CUIDADO CORRA!";
                break;
            
           case 'cobra':
                echo "O que está digitado é: "."cobra, espero que você não tenha sido picado, se não vá ao médico RAPIDO!";
                break;
            
           case 'ajuda':
                echo "O que está digitado é: "."ajuda, procure por um <a href='https://www.google.com.br/?gfe_rd=cr&ei=fku7V8S5NJKq8wfTzYPgAg'>manual</a> amigo!";
                break;

            default:
                echo 'Eu não possuo bola de cristal amigo.';
                break;
        }
        
    }
    
    
}

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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <title></title>
    </head>
    <body>
            <!-- CSS Styles -->
         <style>
           .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
           .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
           .speech img {float: right; width: 40px }
         </style>

         
         <div class="w3-container w3-margin-top">
         <!-- Search Form --> <!-- Para ficar no mesmo site, é só trocar o action pelo site e a resposta será enviada para o site em formato GET q=resposta -->
         <form id="labnol" method="get" action="">
           <div class="speech">
               <input type="text" name="q" id="transcript" placeholder="Speak" value="<?php if(isset($_GET['q'])){ echo $_GET['q'];}?>"/>
             <img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif" />
             <input type="submit" value="Enviar" class="w3-btn w3-ripple w3-hover-green w3-margin-top" width="100%"/>
           </div>
         </form>
         <?php verificarPesquisa();?>
         </div>
         
         
         
         
         
         
         
         
         
         
         

         <!-- HTML5 Speech Recognition API -->
         <script>
           function startDictation() {

             if (window.hasOwnProperty('webkitSpeechRecognition')) {

               var recognition = new webkitSpeechRecognition();

               recognition.continuous = false;
               recognition.interimResults = false;

               recognition.lang = "pt-br";
               recognition.start();

               recognition.onresult = function(e) {
                 document.getElementById('transcript').value
                                          = e.results[0][0].transcript;
                 recognition.stop();
                 document.getElementById('labnol').submit();
               };

               recognition.onerror = function(e) {
                 recognition.stop();
               };

             }
           }
         </script>
    </body>
</html>
