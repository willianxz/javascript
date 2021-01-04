import React from 'react';
import NumberList from './NumberList';

const numbers = [1, 2, 3, 4, 5];

export default class App extends React.Component{
  render(){
    return (
      <div className="App">
        <NumberList numbers={numbers} />
      </div>
    );
  }
}
