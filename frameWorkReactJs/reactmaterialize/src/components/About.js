import React from 'react';
import { Link } from 'react-router-dom';

export default class About extends React.Component{
  render(){
    return(
      <div>
        <h1>Welcome to About Page!</h1>
        <Link to="/">GO TO HOME</Link>
      </div>
    );
  }
}
