import React from 'react';
import api from "./Api";

class App extends React.Component{

  constructor(props){
    super(props)

    this.state = {
      filmes: [],
    }
  }

  async componentDidMount(){
    const response = await api.get('star%20wars');
    this.setState({filmes: response.data});
  }
  
  render(){

    const { filmes }  = this.state;

    return(
      <div>
        <h1 style={{textAlign: "center"}}>Lista de filmes</h1>        
        {filmes.map(filme => {
          return(
            <ul key={filme.show.id}>
              <li><strong>{filme.show.name} </strong></li>
              <li>ID: {filme.show.id}</li>
              <li>URL: {filme.show.url}</li>
            </ul>
          );
        })}
      </div>
    )
  }
}

export default App;
