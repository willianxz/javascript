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



function mostrarPokemon(id){
    
    switch(id){
    case "picaxu":
            document.getElementById("picaxu").src = "pokemons/picaxu_normal.png";
            document.getElementById("umpicaxu").innerHTML = "<h1 id='umpicaxu'>É um picachu!</h1>";
            break;
     case "bulbasouro":
            document.getElementById("bulbasouro").src = "pokemons/bulbasouro_normal.png";
            document.getElementById("umbulbasouro").innerHTML = "<h1 id='umbulbasouro'>É um Bulbasouro!</h1>";
            break;
     case "garadus":
            document.getElementById("garadus").src = "pokemons/garadus_normal.png";
            document.getElementById("umgaradus").innerHTML = "<h1 id='umgaradus'>É um Garadus!</h1>";
            break;
     case "mew":
            document.getElementById("mew").src = "pokemons/mew_normal.png";
            document.getElementById("ummew").innerHTML = "<h1 id='ummew'>É um Mew!</h1>";
            break;
   }
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
            <h1>Descubra os pokemons!</h1>
        </header>
        <div class="w3-container">
            <div class="w3-row">
              <div class="w3-col m3 w3-green">
                  <img id="picaxu" src="pokemons/picaxu_sombra.png" width="100%" height="300px" onmouseover="mostrarPokemon('picaxu');" onmouseout= "ocultarPokemon('picaxu');">
                  <h1 id="umpicaxu"></h1>
              </div>
              <div class="w3-col m3 w3-red ">
                <img id="bulbasouro" src="pokemons/bulbasouro_sombra.png" width="100%" height="300px" onmouseover="mostrarPokemon('bulbasouro');" onmouseout= "ocultarPokemon('bulbasouro');">
                <h1 id="umbulbasouro"></h1>
              </div>
              <div class="w3-col m3 w3-yellow ">
                <img id="garadus" src="pokemons/garadus_sombra.png" width="100%" height="300px" onmouseover="mostrarPokemon('garadus');" onmouseout= "ocultarPokemon('garadus');">
                <h1 id="umgaradus"></h1>
              </div>
               <div class="w3-col m3 w3-indigo ">
                <img id="mew" src="pokemons/mew_sombra.png" width="100%" height="300px" onmouseover="mostrarPokemon('mew');" onmouseout= "ocultarPokemon('mew');">
                <h1 id="ummew"></h1>
               </div>
            </div>
       </div>
    </body>
</html>
