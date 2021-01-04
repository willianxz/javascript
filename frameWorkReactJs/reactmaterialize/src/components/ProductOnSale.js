import React from 'react';
import ProductCaroucel from './ProductCaroucel';

export default class ProductOnSale extends React.Component{
    render(){
        return(
            <div>
                <div className="card-panel red accent-3 center">
                   <h1 className="white-text text-darken-2">On Sale Now</h1>
                </div>

                <ProductCaroucel/>
            </div>
        );
    }       
   
}