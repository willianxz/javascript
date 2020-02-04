import React from 'react';

export default class Counter extends React.Component {
  constructor(props) {
    super(props);
    this.state = {count: 0};
     //O bind é usado para você poder usar o this dentro da função.Também serve para não ter que chamar a função com () junto
    this.handleClick = this.handleClick.bind(this);
  }
  componentDidMount() {
    //Esse document.title, altera o titulo da página.
    document.title = `Você clicou ${this.state.count} vezes`;
  }
  componentDidUpdate() {
    //Quando o componente for atualizar faça:
    document.title = `Você clicou ${this.state.count} vezes`;
  }
  handleClick() {
    this.setState(state => ({
      count: state.count + 1,
    }));
  }
  render() {
    return (
      <div>
        <p>Você clicou {this.state.count} vezes</p>
        <button onClick={this.handleClick}>
          Clique aqui
        </button>
      </div>
    );
  }
}
