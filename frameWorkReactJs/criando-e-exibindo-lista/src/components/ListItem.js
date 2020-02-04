import React from 'react';

export default class ListItem extends React.Component {
  render(){
     // Correto! Não há necessidade de definir a chave aqui:
    return (<li>{this.props.value}</li>);
  }
}
