import React from 'react';

export default class Contact extends React.Component{  
  render(){
    return(
      <div>
        <h1>Welcome to Contact Page!</h1>
        <h2>See the public URL param: </h2>
        <h3>Title: {this.props.match.params.title}</h3>
        <h3>TOTAL: {this.props.match.params.total}</h3>
      </div>
    );
  }
}
