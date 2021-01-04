//Tutorial: https://www.benlcollins.com/apps-script/api-tutorial-for-beginners/

//Quando abrir execute a planilha faça o seguinte: (substitui pelo acionador, para que não execute duas vezes).
//function onOpen(e){
  //someOtherName();  
//}

function someOtherName() {
  Utilities.sleep(2 * 1000)
  callDatas();
 
  
//Criar o atalho de uso de funções na planilha.
  var ui = SpreadsheetApp.getUi();    
  ui.createMenu('API')
      .addItem('Atualizar Dados','callDatas')
      .addToUi();
}

//Função para atualizar o valor da ação
function callDatas() {  
  callApi();  
}


function callApi(){
  var url = "http://programandoagora.com/webcrawler/webcrawleranalisarempresas.php";
  var response = UrlFetchApp.fetch(url);
  var posicaolinha = 10;
  var posicaocoluna = 2;
  
  //Logger.log(response.getContentText());
  
  //Evitamos que aconteça qualquer BUG louco com o JSON vindo da URL, resultara em uma String formatada corretamente.
  var data = JSON.parse(response.getContentText());
  
  //Nos certificamos de funcionar a conversão de String para Objeto.
  var objeto = Object.values(data);  
  
  var valorAtualAcaoEmString = ""; 
  
  var contadora;
  var quantObjetos = objeto.length; 
  for(contadora = 0; contadora < quantObjetos; contadora++){
    if(objeto[contadora]["ordinaria"]){
      valorAtualAcaoEmString = objeto[contadora]["ordinaria"];
    }
    
    if(objeto[contadora]["preferencial"]){
      valorAtualAcaoEmString = objeto[contadora]["preferencial"];
    }
    
    if(objeto[contadora]["unit"]){
      valorAtualAcaoEmString = objeto[contadora]["unit"];
    }
    
    //Convertemos o preço da ação em um Float.
    var valorAtualAcaoEmFloat = parseFloat(valorAtualAcaoEmString);
    
    var sheet = SpreadsheetApp.getActiveSheet();
    
    //Coluna/Linha
    sheet.getRange(posicaolinha, posicaocoluna).setValue([valorAtualAcaoEmString]); 
    posicaolinha += 21;
  }
  
}