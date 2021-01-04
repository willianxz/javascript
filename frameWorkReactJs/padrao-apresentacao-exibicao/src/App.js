import React, { Component } from 'react';
import { GuineaPigsContainer } from './containers/GuineaPigsContainer';

class App extends Component {
  render() {
    return  <GuineaPigsContainer />;
  }
}

export default App;

/* Se o componente tiver que ter muitas lógicas, calculos, estados, props e ainda ter que lidar com a renderização html*/
/* O ideal é utilizar esse padrão separando a lógica de negocio da exibição, desacoplando o código.*/
/* Mais detalhe sobre esse padrão acesse: */
/* https://www.codecademy.com/pt-BR/courses/react-102/lessons/container-presentational-components/exercises/container-presentational-components-apply?action=resume_content_item */
