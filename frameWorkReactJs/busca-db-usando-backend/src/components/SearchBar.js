import React from 'react';

export default class SearchBar extends React.Component{

    handleChange(e){
        e.preventDefault();
        const Valor=e.target.value;
        this.props.funcao(Valor);
    }

    render(){
        return(
          <div className="SearchBar">
              <form name="FormBusca" id="FormBusca" method="post">
                  <input onChange={this.handleChange.bind(this)} type="text" name="Busca" id="Busca" placeholder="Busque o que precisa" />
              </form>
          </div>
        );
    }
}
