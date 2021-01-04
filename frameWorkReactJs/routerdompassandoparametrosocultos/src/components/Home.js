import React from 'react';
import { Link } from 'react-router-dom';

export default class Home extends React.Component{
  render(){
    return(
      <div>
        <h1>Welcome to Home Page!</h1>

        <Link to={{
            pathname: '/about',
            state: {              
              title: "Product Test",
              total: 10,
            }
        }}> 
        GO TO ABOUT PASSING HIDDEN PARAMETER 
        </Link>

        <Link to={{
            pathname: '/contact/Product Test/10'
        }}> 
        GO TO CONTACT PASSING PUBLIC URL PARAMETER 
        </Link>

      </div>
    );
  }
}
