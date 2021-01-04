import React from 'react';

export default class About extends React.Component{
  render(){
    return(
      <div>
        <h1>Welcome to About Page!</h1>
        <h2>See the hidden params: </h2>
        <h2>Title: {this.props.location.state.title}</h2>
        <h3>TOTAL: {this.props.location.state.total}</h3>
      </div>
    );
  }
}
