import React from 'react';
import { Link } from 'react-router-dom';
// import ProductCardCaroucel from './ProductCardCaroucel';
// import Relogio1 from '../images/relogio1.jpg';
// import Relogio2 from '../images/relogio2.jpg';
// import Relogio3 from '../images/relogio3.jpg';
// import Relogio4 from '../images/relogio4.jpg';
import ProductCaroucel from './ProductCaroucel';

export default class Home extends React.Component{


  render(){

    return(
      <div>
     
        

    {/* <Carousel options={{ fullWidth: false }} >
        <div className='orange'>
          <ProductCardCaroucel 
            producttitle={"qualquer"}
            productimage={Relogio1}
            productdescription={"qualquer"}
            productprince={10.50}
          />
        </div>
        <div className='orange'>
        <ProductCardCaroucel 
            producttitle={"qualquer"}
            productimage={Relogio2}
            productdescription={"qualquer"}
            productprince={10.50}
          />
        </div>
        <div className='orange'>
        <ProductCardCaroucel 
            producttitle={"qualquer"}
            productimage={Relogio3}
            productdescription={"qualquer"}
            productprince={10.50}
          />
        </div>
        <div className='orange'>
        <ProductCardCaroucel 
            producttitle={"qualquer"}
            productimage={Relogio4}
            productdescription={"qualquer"}
            productprince={10.50}
          />
        </div>
    </Carousel>; */}

         {/* <div className="carousel" style={{height: "720px"}}>
              <div id="carousel-items" style={{height: "100%", position: "absolute", top: "0px"}}>
                <div className="carousel-item">
                  <ProductCardCaroucel 
                    producttitle={"Rélogio Moderno"}
                    productimage={Relogio1}
                    productdescription={"qualquer"}
                    productprince={10.50}
                  />
                </div>
                <div className="carousel-item">
                  <ProductCardCaroucel 
                      producttitle={"Rélogio Moderno"}
                      productimage={Relogio2}
                      productdescription={"qualquer"}
                      productprince={10.50}
                    />
                </div>
                <div className="carousel-item">
                  <ProductCardCaroucel 
                      producttitle={"Rélogio Moderno"}
                      productimage={Relogio3}
                      productdescription={"qualquer"}
                      productprince={10.50}
                    />
                </div>
                <div className="carousel-item">
                  <ProductCardCaroucel 
                      producttitle={"Rélogio Moderno"}
                      productimage={Relogio4}
                      productdescription={"qualquer"}
                      productprince={10.50}
                    />
                </div>
              </div>
         </div> */}


          <ProductCaroucel />


        <Link to="/about">GO ABOUT</Link>
      </div>
    );
  }
}
