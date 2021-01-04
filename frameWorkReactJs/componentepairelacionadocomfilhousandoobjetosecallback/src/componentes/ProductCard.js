import React from 'react';
import functions from './helpers';

export default class ProductCard extends React.Component{

    // Exiba o botão correto, se o produto estiver no "carrinho" ou fora dele.
    verifyproductincart(){
        let productincart = this.props.productincart;
        if(productincart){
            return (
                <div className="card-action center">                    
                    <a className="waves-effect waves-light btn-large">
                        <i className="material-icons left">remove_shopping_cart</i>
                        Remove from Cart
                    </a>
                </div>
            );
        }
        return (
            <div className="card-action center">                    
                <a className="waves-effect waves-light btn-large">
                    <i className="material-icons left">add_shopping_cart</i>
                    Add to Cart
                </a>
            </div>
        );
    }

    render(){

        let productprince = (this.props.productprince) ? this.props.productprince : 15;
        
        return(            
            <div className="card blue-grey darken-1">
                <div className="card-content white-text center">
                    <h1>{this.props.producttitle}</h1>
                    <img src={this.props.productimage} className="materialboxed" width="100%" height="230" alt={this.props.producttitle} />
                    <h2 style={{"fontSize":"20px","display":"inline"}}>Description:</h2>
                    <span>{this.props.productdescription}</span>
                    <br/>
        <h2 style={{"fontSize":"20px","display":"inline"}}>Prince:</h2><span>{functions.convertFloatToMoneyBrazilString(productprince)}</span>
                   
                </div>

                 {/* Aqui mostro o botão correto, se o produto ta no carrinho ou fora */}
                 { this.verifyproductincart() }
                 
            </div>            
        );
    }
}