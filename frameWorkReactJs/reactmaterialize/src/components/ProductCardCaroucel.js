import React from 'react';
import functions from './helpers';
import { Link } from 'react-router-dom';

export default class ProductCardCaroucel extends React.Component{
    render(){
        let productprince = (this.props.productprince) ? this.props.productprince : 15;
        return(
            <div>
                <div className="card red accent-3 darken-1 z-depth-3" style={{height: "690px", width: "340px"}}>
                    <div className="card-content white-text center">
                        <h1>{this.props.producttitle}</h1>
                        <div className="material-placeholder">
                           <img src={this.props.productimage} className="materialboxed" width="100%" height="200" alt="Relógio Moderno"/>
                         </div>
                        
                          <h2 style={{fontSize: "20px", display: "inline"}}>Description:</h2>
                            <div style={{height: "70px"}}>
                                <span>{this.props.productdescription}</span>
                            </div>
                            <br/><br/>
                            <h2 style={{fontSize: "20px", display: "inline"}}>Prince:</h2>
                            <span>{functions.convertFloatToMoneyBrazilString(productprince)}</span>

                            <div className="card-action center">
                                <Link to="#" className="waves-effect waves-light btn-large pulse">
                                    <i className="material-icons left">add_shopping_cart</i>Add to Cart
                                </Link>
                            </div>
                     </div>
                </div>
            </div>
        );
    }
}