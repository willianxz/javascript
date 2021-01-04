
 const functions = {
    convertFloatToMoneyBrazilString: function(numbertoconvert){
        let numberwithcoin = numbertoconvert.toFixed(2);
        let numbertostring = numberwithcoin.toString();
        let numberwithcomma = numbertostring.replace(".",",");
        let numberwithsimbol = "R$ "+numberwithcomma;
        return numberwithsimbol;
    },
    testar: function(){
       console.log("Testando");
    }
}

export default functions;