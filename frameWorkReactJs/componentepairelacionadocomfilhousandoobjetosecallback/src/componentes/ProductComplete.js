import React from 'react';
import ProductCard from './ProductCard';
import SnippetInput from './SnippetInput';
import BlockedInput from './BlockedInput';

export default class ProductComplete extends React.Component{    
    render(){ 
        
        // Aqui coloco o que seria o produto completo, "encaixando" os componentes filhos em uma variavel
        // que irá percorrer cada objeto, passando seus atributos e o id de cada objeto para os componentes
        // filhos.
        const productcart = (
            <div>
              {this.props.listofproduct.map((product, index) =>
                  
                <div className="col m3 center">  
                  <div key={index}>
                      <ProductCard 
                              id={index} 
                              producttitle={product.producttitle} 
                              productimage={product.productimage}
                              productdescription={product.productdescription}
                              productprince={product.productprince}
                              productincart={product.productincart}
                              
                      />

                      <SnippetInput 
                              valorinput={product.valorinput}
                              handleDiminuir={product.handleDiminuir}
                              handleAumentar={product.handleAumentar}
                              id={index}
                              handleChange={product.handleChange} 
                      />

                      <h4>Value</h4>

                      <BlockedInput 
                              valorbloqueado={product.valorbloqueado}
                              id={index}
                      />
                  </div>    
                </div>
              )}
            </div>
          );


        return(
            <div>
                {console.log(this.props.listofproduct)}

                {/* Aqui mostramos os objetos produtos renderizados na tela. */}
                <div className="row">
                    { productcart }
                 </div>
                    
            </div>
        );
    }
}