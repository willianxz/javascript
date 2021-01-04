import React from "react";
import { Container, Row, Col } from 'reactstrap';
import Clock from './Clock';
import LoginControl from './LoginControl';

export default class Main extends React.Component{
  render(){
    return(
      <div>
        <Container>
          <h2 className="text-center">Main</h2>
          <p>See the Clock component: </p>
          <Col md="12" >            
             <Row>
               <Col md="4">
                  <Clock/>
               </Col>
               <Col md="4">
                  <Clock/>
               </Col>
               <Col md="4">
                  <Clock/>
               </Col>
             </Row>
           </Col>
           
           <br/>

           <p>See the LoginControl component: </p>
          <Col md="12" >            
             <Row>
               <Col md="4">
                  <LoginControl/>
               </Col>
               <Col md="4">
                  <LoginControl/>
               </Col>
               <Col md="4">
                  <LoginControl/>
               </Col>
             </Row>
           </Col>                   
        </Container>
      </div>
    );
  }
}
