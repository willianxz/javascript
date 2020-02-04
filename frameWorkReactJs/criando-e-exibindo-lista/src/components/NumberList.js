import React from 'react';
import ListItem from './ListItem';

export default class NumberList extends React.Component{
    render(){
        const numbers = this.props.numbers;
        const listItems = numbers.map((number) =>
          // Correto! A chave deve ser definida dentro do array.
          <ListItem key={number.toString()}
                    value={number} />
        );
        return (
          <ul>
            {listItems}
          </ul>
        );
    }
}
