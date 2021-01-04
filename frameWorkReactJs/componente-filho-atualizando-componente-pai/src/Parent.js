import React from 'react';
import { Child } from './Child';
import { Sibling } from './Sibling';

export class Parent extends React.Component {
  constructor(props) {
    super(props);

    this.state = { name: 'Frarthur' };
    this.changeName = this.changeName.bind(this);
  }

//Criamos essa função no componente pai e passamos via props para o filho usa-la.
//Dessa forma o filho pode atualizar o state que o componente pai fornece.
  changeName(newName){
    this.setState({name: newName});
  }

  render() {  //O valor do nome atualizado é passado ao irmão.
    return (
      <div>
        <Child onChange={this.changeName} />
        <Sibling name={this.state.name} />
     </div>
    );
  }
}
