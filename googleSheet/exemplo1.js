//Tutorial: https://www.benlcollins.com/apps-script/api-tutorial-for-beginners/

//Lembre de criar o acionador para fazer com que uma função seja executada quando a planilha se abrir,
// deve ser necessario criar uma função lá no código chamada onOpen(e) 
//e depois disso adicionar um acionador clicando na aba Editar,
// acionadores do projeto atual e adicionar um acionador para quando iniciar a planilha, selecionando a função onOpen(e)
//Quando abrir execute a planilha faça o seguinte:
function onOpen(e){
  someOtherName();  
}



function someOtherName() {
 callDatas();
  
//Criar o atalho de uso de funções na planilha.
  var ui = SpreadsheetApp.getUi();    
  ui.createMenu('API')
      .addItem('Atualizar Dados','callDatas')
      .addToUi();
}

//Função para atualizar o valor da ação
function callDatas() {  
 
  var urlApi = '';
  var posicaol = '';
  var posicaoc = '';  
  
 //Cielo
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=CIEL3.SAO&apikey=6UYNNYP920JE1Y02";
  posicaol = 10;
  posicaoc = 2;
  callApi(urlApi, posicaol, posicaoc);
  
  //Bmg
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=BMGB4.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 31;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
}


function callApi(url, posicaolinha, posicaocoluna){
  var response = UrlFetchApp.fetch(url);
  //Logger.log(response.getContentText());
  
  //Evitamos que aconteça qualquer BUG louco com o JSON vindo da URL, resultara em uma String formatada corretamente.
  var data = JSON.parse(response.getContentText());
  
  //Nos certificamos de funcionar a conversão de String para Objeto.
  var objeto = Object.values(data);
  
   //Acessamos o preço da ação, pelo objeto.
  var valorAtualAcao = objeto[0]["05. price"];    
  
  //Convertemos o preço da ação em um Float.
  valorAtualAcao = parseFloat(valorAtualAcao);  

  var sheet = SpreadsheetApp.getActiveSheet();

 //Coluna/Linha
  sheet.getRange(posicaolinha, posicaocoluna).setValue([valorAtualAcao]); 
  
}