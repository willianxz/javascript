import React from 'react';
import Post from './Post';
import { Container, Row, Col } from 'reactstrap';
import pinguim from '../images/pinguim.jpg';
import cavalomarinho from '../images/cavalomarinho.jpg';
import aguaviva from '../images/aguaviva.jpg';
import tartaruga from '../images/tartaruga.jpg';

export default class App extends React.Component{
  render(){
    return(
      <Container>
        <Row style={{"paddingBottom" : "20px"}}>
           <Col md="3" style={{"border":"3px solid black", "paddingBottom" : "10px"}}>
            <Post title="Titulo Bootstrap 1" />
            <img  style={imageCenter} src={pinguim} width="250" height="200" alt="Pinguim"/>
           </Col>
           <Col md="3" style={{"border":"3px solid black", "paddingBottom" : "10px"}}>
             <Post title="Titulo Bootstrap 2"/>
             <img style={imageCenter} src={cavalomarinho} width="250" height="200" alt="Cavalo Marinho"/>
           </Col>
           <Col md="3" style={{"border":"3px solid black", "paddingBottom" : "10px"}}>
             <Post title="Titulo Bootstrap 3"/>
             <img style={imageCenter} src={aguaviva} width="250" height="200" alt="Água viva"/>
           </Col>
           <Col md="3" style={{"border":"3px solid black", "paddingBottom" : "10px"}}>
             <Post title="Titulo Bootstrap 4"/>
             <img style={imageCenter} src={tartaruga} width="250" height="200" alt="Tartaruga"/>
           </Col>
       </Row>
      </Container>
    );
  }
}

const imageCenter = {
    "display" : "block",
    "margin-left" : "auto",
    "margin-right" : "auto"
};
