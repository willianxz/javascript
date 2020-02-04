import React from 'react';
import { Link } from 'react-router-dom';
import {
  Collapse,
  Navbar,
  NavbarToggler,
  Nav,
  NavItem} from 'reactstrap';

export default class Header extends React.Component{
  render(){
    return(
      <div>
        <Navbar color="light" light expand="md">
          <Link to="/"><h2>reactstrap</h2></Link>
          <NavbarToggler  />
          <Collapse navbar>
            <Nav className="ml-auto" navbar>
              <NavItem>
                <Link to="/page1"><span>Page1 </span></Link>  {/* Se usar a tag 'a' do html, irá renderizar a página inteira ao invés de apenas o componente */}
              </NavItem>
              <NavItem>
                <Link to="/page2"><span>Page2 </span></Link>
              </NavItem>
              <NavItem>
                <Link to="/page3"><span>Page3 </span></Link>
              </NavItem>
            </Nav>
          </Collapse>
        </Navbar>
      </div>
    );
  }
}
