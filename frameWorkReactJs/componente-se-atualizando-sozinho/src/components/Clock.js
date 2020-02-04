import React from 'react';

export default class Clock extends React.Component {
  constructor(props) {
    super(props);
    this.state = {date: new Date()};
  }

//No momento em que o componente for montado faça:
  componentDidMount() {
    this.timerID = setInterval( //Crie um intervalo que fique chamando a função Tick.
      () => this.tick(),
      1000
    );
  }

//No momento em que o componente não for mais necessario faça:
  componentWillUnmount() {
    clearInterval(this.timerID); //Cancele o set interval
  }

  tick() {
    this.setState({
      date: new Date() //Atualize a data
    });
  }

  render() {
    return (
      <div>
        <h1>Hello, world!</h1>
        <h2>It is {this.state.date.toLocaleTimeString()}.</h2>
      </div>
    );
  }
}
