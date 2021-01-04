import React from 'react';
import Home from './Home';
import About from './About';
import Contact from './Contact';
import { Switch, Route, Link } from 'react-router-dom';

export default class AppShell extends React.Component{
  render(){
    return (
      <div>
        <div className="container">
            <header>
                <Link to="/">Home</Link>
            </header>

            <main>
              <Switch>
                  <Route exact path="/" component={Home}/>
                  <Route path="/about" component={About}/>
                  <Route path="/contact/:title/:total" component={Contact}/>
              </Switch>
            </main>

            <footer>
              My footer
            </footer>
          </div>
      </div>
    );
  }
}
