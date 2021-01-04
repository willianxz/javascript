//Tutorial: https://www.benlcollins.com/apps-script/api-tutorial-for-beginners/

//Quando abrir execute a planilha faça o seguinte: (substitui pelo acionador, para que não execute duas vezes).
//function onOpen(e){
  //someOtherName();  
//}



function someOtherName() {
  Utilities.sleep(5 * 1000)
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
  
  //Itub
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=ITUB3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 52;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //Bidi
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=BIDI3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 73;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
    //Agro
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=AGRO3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 94;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   Utilities.sleep(5 * 1000);
  
   //Slce
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=SLCE3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 116;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //Movida
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=MOVI3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 138;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //Lcam
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=LCAM3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 159;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //Cvcb
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=CVCB3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 180;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //Irbr
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=IRBR3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 201;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);
  
   //Mypk
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=MYPK3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 222;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  //Brdt
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=BRDT3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 243;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //Petro
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=PETR3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 264;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //Prio
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=PRIO3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 285;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //Ugpa
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=UGPA3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 306;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);
  
    //Meal
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=MEAL3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 327;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
    //Taee3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=TAEE3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 348;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
    //TIET4
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=TIET4.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 369;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  
    //REDE3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=REDE3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 390;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  
   //ELET3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=ELET3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 411;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);
  
   //CEAB3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=CEAB3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 432;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //HGTX3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=HGTX3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 453;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
   //LLIS3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=LLIS3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 474;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  //GUAR3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=GUAR3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 495;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);
  
  
   //ABEV3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=ABEV3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 516;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  //OFSA3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=OFSA3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 537;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
    //BEES3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=BEES3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 558;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  
  //SMLS3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=SMLS3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 580;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);  
  
 
   //ENAT3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=ENAT3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 601;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);
  
   //WIZ3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=WIZ3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 622;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

 //SEER3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=SEER3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 643;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  //CSNA3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=CSNA3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 664;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//CYRE3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=CYRE3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 685;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//CCRO3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=CCRO3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 706;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);

//FLRY3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=FLRY3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 706;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//LEVE3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=LEVE3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 748;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//VLID3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=VLID3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 769;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//EALT4
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=EALT4.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 790;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//RAPT3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=RAPT3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 811;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);

//ROMI3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=ROMI3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 832;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);


//QUAL3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=QUAL3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 853;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//CMIG3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=CMIG3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 874;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//TGMA3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=TGMA3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 895;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//IGTA3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=IGTA3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 916;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);

//PTLB3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=PTLB3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 937;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//ITSA3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=ITSA3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 958;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//BBAS3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=BBAS3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 979;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//BBDC3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=BBDC3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1000;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//BRML3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=BRML3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1021;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);

//ABCB4
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=ABCB4.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1042;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//AALR3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=AALR3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1063;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//TRIS3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=TRIS3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1084;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//GRND3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=GRND3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1105;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//VIVA3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=VIVA3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1126;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);
  
  Utilities.sleep(5 * 1000);

//FESA4
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=FESA4.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1147;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//WHRL4
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=WHRL4.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1168;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//PARD3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=PARD3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1189;
  posicaoc = 2; 
  callApi(urlApi, posicaol, posicaoc);

//HYPE3
  urlApi = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=HYPE3.SAO&apikey=6UYNNYP920JE1Y02";    
  posicaol = 1210;
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