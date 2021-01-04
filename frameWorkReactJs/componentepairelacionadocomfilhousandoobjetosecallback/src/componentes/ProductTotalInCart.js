import React from 'react';
import ProductComplete from './ProductComplete';
import relogio1 from '../images/relogio1.jpg';
import relogio2 from '../images/relogio2.jpg';
import relogio3 from '../images/relogio3.jpg';
import relogio4 from '../images/relogio4.jpg';
import functions from './helpers';

export default class ProductTotalInCart extends React.Component{
    constructor(props){
        super(props);
        
        this.state = {
            listobjsproduct: [], //Criamos uma lista para armazenar os objetos de produtos
        }
        
        //Aqui usamos o bind nas funções para podermos chamar as funções usando o this em outros lugares.
        this.handleChangeSnippet = this.handleChangeSnippet.bind(this); 
        this.handleAumentarSnippet = this.handleAumentarSnippet.bind(this);
        this.handleDiminuirSnippet = this.handleDiminuirSnippet.bind(this);
    }

    componentDidMount(){ 
        
        //Criamos objetos de produto "mocados", que serviram para mostrar que podemos usar posteriormente
        //Uma fetch, solicitando essas informações do back-end e renderizar os objetos na tela.
        let newobjectproduct1 = {
            id: 1,
            producttitle : "Rélogio Moderno",
            productimage : relogio1,
            productdescription : "Um produto qualquer colocado no carrinho",
            productprince : 10.50,
            productincart : true,
            valorinput : 1,
            handleDiminuir : this.handleDiminuirSnippet, 
            handleAumentar : this.handleAumentarSnippet,
            handleChange :   this.handleChangeSnippet,
            valorbloqueado : 1 * 10.50
          }
          
          //Perceba que sempre passo nossas funções de eventos para os objetos armazenarem, 
          //Dessa forma poderemos manter esse componente PAI no controle das mesmas.
          let newobjectproduct2 = {
            id: 2,
            producttitle : "Rélogio Moderno",
            productimage : relogio2,
            productdescription : "Um produto qualquer colocado no carrinho",
            productprince : 10.50,
            productincart : true,
            valorinput : 1,
            handleDiminuir : this.handleDiminuirSnippet, //Aqui estão as três funções de eventos.
            handleAumentar : this.handleAumentarSnippet,
            handleChange :   this.handleChangeSnippet,
            valorbloqueado : 1 * 10.50
          }
          
          let newobjectproduct3 = {
            id: 3,
            producttitle : "Rélogio Moderno",
            productimage : relogio3,
            productdescription : "Um produto qualquer colocado no carrinho",
            productprince : 10.50,
            productincart : true,
            valorinput : 1,
            handleDiminuir : this.handleDiminuirSnippet,
            handleAumentar : this.handleAumentarSnippet,
            handleChange :   this.handleChangeSnippet,
            valorbloqueado : 1 * 10.50
          }  

          let newobjectproduct4 = {
            id: 4,
            producttitle : "Rélogio Moderno",
            productimage : relogio4,
            productdescription : "Um produto qualquer colocado no carrinho",
            productprince : 10.50,
            productincart : true,
            valorinput : 1,
            handleDiminuir : this.handleDiminuirSnippet,
            handleAumentar : this.handleAumentarSnippet,
            handleChange :   this.handleChangeSnippet,
            valorbloqueado : 1 * 10.50
          }
            
          //Agora enviamos nossos objetos para nossa lista de produtos.
          this.setState({listobjsproduct : [newobjectproduct1, newobjectproduct2, newobjectproduct3, newobjectproduct4]});
       
    }

    //Criamos no PAI o evento de change, que será enviados posteriormente ao filho por meio dos objetos.
    //Quando o filho "escutar" esse evento irá "reportar" ao pai, que executara exatamente esse código:
    handleChangeSnippet(index, event){
        //Armazenamos o digito que veio do input pelo evento disparado no filho e convertemos em um inteiro.
        let digito = event.target.value;        
        let digitoInt = parseInt(digito);

        

        console.log("Executou o Change!!");

        //Se o digito for maior que 0:
        if(digitoInt > 0){
             //Faço uma cópia da lista de objetos atual
             let listofobjects = this.state.listobjsproduct;

            //Manipulo os valores no objeto que precisa atualizar o seu input e valor bloqueado.
            listofobjects[index].valorinput = digitoInt;
            listofobjects[index].valorbloqueado = listofobjects[index].valorinput * listofobjects[index].productprince;

            //Note que o index é exatamente o identificador(ID) do objeto que preciso trabalhar.

            //Atualizo a lista, com o objeto modificado
            this.setState({listobjsproduct: listofobjects});      
        }  
    }
    
     //Criamos no PAI o evento de click, que será enviados posteriormente ao filho por meio dos objetos.
     //Quando o filho "escutar" esse evento irá "reportar" ao pai, que executara exatamente esse código:
    handleAumentarSnippet(index){
        console.log("Aumentar!!");
        console.log(index);

         //Faço uma cópia da lista de objetos atual
        let listofobjects = this.state.listobjsproduct;
        
        //Manipulo os valores no objeto que precisa atualizar o seu input e valor bloqueado.
       listofobjects[index].valorinput++;
       listofobjects[index].valorbloqueado = listofobjects[index].valorinput * listofobjects[index].productprince;

       //Note que o index é exatamente o identificador(ID) do objeto que preciso trabalhar.

        //Atualizo a lista, com o objeto modificado
        this.setState({listobjsproduct: listofobjects});        
    }

    //Criamos no PAI o evento de click, que será enviados posteriormente ao filho por meio dos objetos.
    //Quando o filho "escutar" esse evento irá "reportar" ao pai, que executara exatamente esse código:
    handleDiminuirSnippet(index){ 
    console.log("Diminuir!!");
    console.log(index);               
        
      //Faço uma cópia da lista de objetos atual
      let listofobjects = this.state.listobjsproduct;

      //Se o valor do input do objeto correto for maior que 1, então pode diminuir o valor:
       if(listofobjects[index].valorinput > 1){
         //Manipulo os valores no objeto que precisa atualizar o seu input e valor bloqueado.
        listofobjects[index].valorinput--;
        listofobjects[index].valorbloqueado = listofobjects[index].valorinput * listofobjects[index].productprince; 
       }

       //Note que o index é exatamente o identificador(ID) do objeto que preciso trabalhar.
      
        //Atualizo a lista, com o objeto modificado
        this.setState({listobjsproduct: listofobjects});   

    }


    render(){
       
      //Aqui crio o total, que irá percorrer 
      //todos os objetos da lista e somara o valor total de cada produto.
       var total = 0;
       this.state.listobjsproduct.map((product) => {
            total += product.valorbloqueado;
        });

        //Apenas converto o valor total na moeda brasileira.
        total = functions.convertFloatToMoneyBrazilString(total);

        return (
         <div> 
               {/* note que passo apenas a lista de objetos para o componente filho */}
              <ProductComplete
                    listofproduct={this.state.listobjsproduct}
                /> 

             <div className="row">
                  <div className="center" style={{"marginLeft":"10%","marginRight":"20%"}}>
                          <h4>TOTAL: {total} </h4>
                    </div>
                </div>
        </div>
        );
    }
}