import React from 'react';
import Relogio1 from '../images/relogio1.jpg';
import Relogio2 from '../images/relogio2.jpg';
import Relogio3 from '../images/relogio3.jpg';
import Relogio4 from '../images/relogio4.jpg';
import ProductCardCaroucel from './ProductCardCaroucel';
import  Materializejs from "../../node_modules/materialize-css/dist/js/materialize.min.js";

var newobjectproduct1 = {
  id: 1,
  producttitle : "Rélogio Moderno",
  productimage : Relogio1,
  productdescription : "Relógio prata metalico ideal para se usar com ternos",
  productprince : 10.50,
  productincart : false
}

var newobjectproduct2 = {
  id: 2,
  producttitle : "Rélogio Moderno",
  productimage : Relogio2,
  productdescription : "Relógio com pulseira de couro e numeros grandes para melhor observar as horas",
  productprince : 10.50,
  productincart : false
}

var newobjectproduct3 = {
  id: 3,
  producttitle : "Rélogio Moderno",
  productimage : Relogio3,
  productdescription : "Relógio digital tecnológico para combinar com suas roupas",
  productprince : 10.50,
  productincart : false
}

var newobjectproduct4 = {
  id: 4,
  producttitle : "Rélogio Moderno",
  productimage : Relogio4,
  productdescription : "Relógio metalico com pulseira de couro confortavel",
  productprince : 10.50,
  productincart : false
}


export default class ProductCaroucel extends React.Component{
  constructor(props){
    super(props);

    this.state = {
        listobjsproduct: [newobjectproduct1, newobjectproduct2, newobjectproduct3, newobjectproduct4],
        
    }
   }
    componentDidMount(){   

      //Serve para inicializar as classes que contem JS do materialize que o componente irá utilizar.
      var elemsCarousel = document.querySelectorAll('.carousel');
      Materializejs.Carousel.init(elemsCarousel,{
        fullWidth: false,
        indicators: false,
        noWrap: false
      });
      var elemsImagensMedia = document.querySelectorAll('.materialboxed');
      Materializejs.Materialbox.init(elemsImagensMedia); 

      //Aqui podemos fazer um fetch para o banco de dados e colocarmos adicionarmos em nossa lista.
    }

    render(){
        return(            
            <div>
               <div className="carousel" style={{height: "720px"}}>
                    <div id="carousel-items" style={{height: "100%", position: "absolute", top: "0px"}}>                   
                      {this.state.listobjsproduct.map((product, index) => 
                        <div key={index} className="carousel-item">
                          <ProductCardCaroucel
                            producttitle={product.producttitle}
                            productimage={product.productimage}
                            productdescription={product.productdescription}
                            productprince={product.productprince}
                          />
                      </div>          
                      )}                     
                    </div>
                </div>             
            </div>
        );
    }
}