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
        <title>Ache o pokemon!</title>
    </head>
    <body>
       
        


<script>



function AdicionarGaradus(){
     
     document.getElementById("adicionarGaradus").innerHTML += "<img src='pokemons/garadus_normal.png'/>";
    
}



function ocultarPokemon(id){
    
    switch(id){
    case "picaxu":
            document.getElementById("picaxu").src = "pokemons/picaxu_sombra.png";
            document.getElementById("umpicaxu").innerHTML = "<h1 id='umpicaxu'></h1>";
            break;
     case "bulbasouro":
            document.getElementById("bulbasouro").src = "pokemons/bulbasouro_sombra.png";
            document.getElementById("umbulbasouro").innerHTML = "<h1 id='umbulbasouro'></h1>";
            break;
    case "garadus":
            document.getElementById("garadus").src = "pokemons/garadus_sombra.png";
            document.getElementById("umgaradus").innerHTML = "<h1 id='umgaradus'></h1>";
            break;
    case "mew":
            document.getElementById("mew").src = "pokemons/mew_sombra.png";
            document.getElementById("ummew").innerHTML = "<h1 id='ummew'></h1>";
            break;        
    
   }
   
}

</script>


        <header class="w3-center w3-teal ">
            <h1>Como os garadus se reproduzem!</h1>
        </header>
        <div class="w3-container">
            <div class="w3-row">
              <div class="w3-col m12 w3-green">
                  <div id="adicionarGaradus" class="w3-white w3-center" width="100%" height="300px" onmouseout="AdicionarGaradus()"> Garadus </div>
                  
              </div>              
            </div>
       </div>
    </body>
</html>
