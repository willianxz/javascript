import React, { Component } from 'react';
import { Parent } from './Parent';

// Mais detalhes sobre essa interação entre filho e pai:
// https://www.codecademy.com/pt-BR/courses/react-102/lessons/child-updates-parents-state/exercises/child-parent-receive-handler?action=resume_content_item
//O conceito é o pai passar o state pro filho atualiza-lo e o irmão do pai exibi-lo.
//Stateless full = componente com state
//Stateless = componente sem state

class App extends Component {
  render() {
    return (
      <div className="App">
        <Parent />
      </div>
    );
  }
}

export default App;
