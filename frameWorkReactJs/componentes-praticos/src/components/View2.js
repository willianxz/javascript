import React from 'react';
import { Container } from 'reactstrap';

/* Da também para fazer dessa forma, porem não é recomendado por não ter estado.*/
export default class View2 extends React.Component{
  render(){
    return(
      <div>
        <Container>
          <h2> View 2 </h2>
          <p>My body of component View2</p>
        </Container>
      </div>
    );
  }
}
