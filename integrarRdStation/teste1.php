
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
      <head>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
       <title>Rd Station</title>
      </head>
    <body>
       <!-- GUIA: https://github.com/ResultadosDigitais/rdocs/blob/master/integracoes_html_puro.md -->
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
                             
                            
                            <!-- Requisito principal para fazer a integração: -->
                            <input type="hidden" name="token_rdstation" value="4f169dd77c9173b62c6ddc6c5b2061ca" />
                            <input type="hidden" name="identificador" value="formulario-site-com-resultado" />
                            <!-- ------------------------------------------------- --->
                           
                            <input type="hidden" name="redirect_to" value="https://www.google.com.br/?gfe_rd=cr&ei=SuG9V_3tLoSF8Qfzto7oCg" /><!-- Serve para enviar p/ qualquer url após o envio do formulário.-->
                            
                            <input type="submit"  value="Enviar" class="w3-btn">
                  </form>  
                 </div>
                </body>
            </html>