<!DOCTYPE html>
<html>
    
    <head>
         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
<body>

<p>Open link in a new window or tab: <a href="http://www.w3schools.com" target="_self">ENVIAR FORMULARIO</a></p>

<script type="text/javascript">
	var submitted=false;
</script>


<form action="https://docs.google.com/a/chagbrasil.com/forms/d/e/1FAIpQLSe7TQNascWVfLMwStbGmKxawItIkcG8s_4OoQhAEpnnURb_Kw/formResponse" method="post" 
      onsubmit="submitted=true;" target="hidden_iframe">

Nome:
<input type="text" name="entry.1731401486" value="" class="w3-input" dir="auto"  aria-required="true" required=""></br>

Sobrenome:
<input type="text" name="entry.533710775" value="" class="w3-input" dir="auto"  aria-required="true" required=""></br>

Email:
<input type="text" name="entry.697717484" value="" class="w3-input" dir="auto"  aria-required="true" required=""></br>

Telefone:
<input type="text" name="entry.577023870" value="" class="w3-input" dir="auto"  aria-required="true" required=""></br>

<!-- todos os campors-->

<input type="submit" value="Enviar"/></br>
</form>



<iframe name="hidden_iframe" id="hidden_iframe" style="width: 100%; height:400px; display: none;" onload="if(submitted) {document.getElementById('hidden_iframe').innerHTML = 'New text!';}"></iframe>





</body>
</html>

