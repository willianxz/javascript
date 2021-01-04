import React from "react";
import { Container } from 'reactstrap';

/* Da para fazer dessa forma que é a correta quando não tem state envolvido.*/
const View1 = props =>  {
    return(
      <div>
        <Container>
        <h2> View 1 </h2>
        <p>My body of component View1</p>
        </Container>
      </div>
    );
}

export default View1;
