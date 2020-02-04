import React from 'react';

export default class FancyBorder extends React.Component{
  render(){
    return (
      <div className={'FancyBorder FancyBorder-' + this.props.color}>
        {this.props.children}
      </div>
    );
  }
}
