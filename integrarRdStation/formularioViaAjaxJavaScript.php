<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
      <head><!-- https://github.com/ResultadosDigitais/rdocs/blob/master/js_post.md  -->
      <meta http-equiv="Content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
       <title>Rd Station</title>
      </head>
           <body>
              <!-- conteúdo da sua página -->
              <form id="conversion-form" method="post" action="https://www.rdstation.com.br/api/1.2/conversions">
                <input type="hidden" id="token_rdstation" name="token_rdstation" value="4f169dd77c9173b62c6ddc6c5b2061ca">
                <input type="hidden" id="identificador" name="identificador" value="formulario-site-com-resultado">

                            <p>Nome:</p>
                            <input type="text" name="nome" class="w3-input">
                            <p>Email:</p>         
                            <input type="email"  name="email" class="w3-input">
                            <p>Cargo:</p>         
                                  <input type="text"  name="cargo" class="w3-input">
                            <p>Empresa:</p>         
                            <input type="text" name="empresa" class="w3-input">    

                <input type="submit" id="submit-button" value="Enviar" />
              </form>

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
              <script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>

              <script type="text/javascript">
                var form = $('#conversion-form');

                form.on('submit', function(ev) {
                  var inputs = form.find(':input');

                  RdIntegration.post(inputs.serializeArray());
                });
              </script>
          </body>
     </html>