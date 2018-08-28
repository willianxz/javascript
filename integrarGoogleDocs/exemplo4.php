
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
      <head>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Simple Mail Merge</title>
      </head>
    <body dir="ltr" class="ss-base-body">
       
            
                <form action="https://docs.google.com/a/chagbrasil.com/forms/d/e/1FAIpQLSf-jewzvZCc8v0-J5OqS16xKEwmK6gIL82pbW-DTSTAotYIOQ/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
                    <!--    
                    ATENÇÃO SEGUIR OS PASSOS ADIANTE PARA QUE TUDO DE CERTO!!!!
                    
                    1 - CRIAR UM NOVO FORMULARIO NO GOOGLE DOCS
                    2 - CRIAR A PLANILHA EXCEL
                    3 - IR NO FORMULARIO, COLOCAR NO MODO DE VISÃO ANTIGO(
                    
                    Entre no seu formulario no modo de edição e olhe um ponto de interrogação "?" no canto direito embaixo, clique nele, coloque
                    em voltar ao antigo formularios,Depois disso, coloque na aba Respostas e em obter URL já preenchido.
                    
                    Após essa parte de um inspect element nos campos e verifique qual é o name de cada input, esses são os verdadeiros names.
                    
                    OBS: se você utilizar a versão mais recente de visualização e tentar dar inspects elements nos inputs, os mesmos apresentaram
                    names errados relativos ao titulo do formulario,repetidos em todos os inputs.
                    Se tentar utilizar esses names dara errado e não será enviado os dados fornecidos!
                    )
                    
                    4 - RETORNE A VISÃO ATUAL E COPIE A URL DE VISUAÇIZAÇÃO DO SEU FORMULARIO (https://docs.google.com/a/chagbrasil.com/forms/d/e/1FAIpQLSe7TQNascWVfLMwStbGmKxawItIkcG8s_4OoQhAEpnnURb_Kw/viewform),
                    E SUBSTITUA APENAS O /viewform por /formResponse 
                    COLOQUE ESSA URL NO SEU CÓDIGO, NO <form action = "...."
                    
                    5 - COLOQUE AQUELES NAMES VERDADEIROS COPIADOS EM SEUS INPUTS, O NAME VERDADEIRO GERALMENTE É ALGO COMO "entry.2603195"
                    
                     OBS: PARA VOLTAR A VERSÃO MAIS RECENTE DO GOOGLE FORMS, APENAS CLIQUE EM CONHECER O NOVO FORMULARIO GOOGLE. 
                     OBS: SE ALGUM CAMPO NA HORA FICAR COMO VAZIU, É PORQUE PROVAVELMENTE FOI PULADO A PARTE DE PEGAR O NAME CORRETO E COLOCA-LO NO INPUT.
                    
                     url do formulario: https://docs.google.com/a/chagbrasil.com/forms/d/e/1FAIpQLSe7TQNascWVfLMwStbGmKxawItIkcG8s_4OoQhAEpnnURb_Kw/viewform
                     url da planilha:   https://docs.google.com/spreadsheets/d/1eu2Pbo4DEoYGOGBodXGEA2NHlUff77Ce_cCW4WIm0gE/edit#gid=848303812                
                      -->
                            <p>Nome:</p>
                                  <input type="text" name="entry.2603195" value="" class="ss-q-short" dir="auto"  aria-required="true" required="">
                            <p>Sobrenome:</p>         
                                  <input type="text" name="entry.2702611" value="" class="ss-q-short"  dir="auto" aria-required="true" required="">
                            <p>Email:</p>        
                                  <input type="text" name="entry.2446191" value="" class="ss-q-short"  dir="auto"  aria-required="true" required="">
                                        
                         <!-- 
                         
                         <input type="text" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="First Name" aria-describedby="i.desc.1828653807 i.err.1828653807" name="Simple Mail Merge" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">
                         <input type="text" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Last Name" aria-describedby="i.desc.1131516963 i.err.1131516963" name="Simple Mail Merge" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">
                         <input type="text" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Email Address" aria-describedby="i.desc.2020661577 i.err.2020661577" name="Simple Mail Merge" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">
                         OBS: OLHE COMO OS NAMES NA VERSÃO MAIS ATUAL DO GOOGLE ESTÃO ERRADOS COM O MESMO NAME, ESSES SÃO OS NAMES FALSOS!! (NÃO SERVEM PARA NADA!)
                         -->   
                            
                            <input type="submit" name="submit" value="Enviar" id="ss-submit" class="jfk-button jfk-button-action ">
                               

                </body>
            </html>