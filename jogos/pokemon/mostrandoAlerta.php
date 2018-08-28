<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Mostrando alertas com Javascript</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		
        <!-- Optional theme -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/boostrap/3.3.1/css/bootstrap-theme.min.css"


        <!-- Latest compiled and minifield javaScript -->
        <script src="https//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
        
        <script type="text/javascript"></script>
        <script>
            
            alerta1();
            
            function alerta1(){
                window.alert('Bem vindo ao site!');
            }
            
            function alerta2(){
                var x;
                if (confirm("Você deseja prosseguir?") == true) {
                    x = "<hr/><p style='color: red'>Você clicou no botão para prosseguir!</p>";
                } else {
                    x = "<hr/><p style='color: green'>Você decidiu não prosseguir!</p>";
                }
                document.getElementById("alerta").innerHTML = x;
            }
            
       </script>
    </head>
    <body>
        
        
       <div class="container">
            
           <h1>Preencha o formulario para o cadastro do cliente: </h1>
	   <label>Nome: </label>
	   <input id="txtNome" class="form-control" type="text"/>
	   <label>Cidade: </label>
	   <input id="txtCidade" class="form-control" type="text"/>
	   <label>UF: </label>
	   <input id="txtUF" class="form-control" type="text"/>
	   <label>Senha: </label>
           <input id="txtSenha" class="form-control" type="password"/></br>
	   
           <input id="btnConfirmar" class="btn btn-primary" type="submit" value="Confirmar" onclick="alerta2()">
           
          
          <div id="alerta"></div>
        </div>
    </body>
</html>
