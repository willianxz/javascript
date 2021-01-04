import React, { Component } from 'react';
import { Switch, Route } from 'react-router-dom';

import Header from './components/Header';
import View1 from './components/View1';
import View2 from './components/View2';
import View3 from './components/View3';
import Main from './components/Main';

class AppShell extends Component {
 render() {
    return (
      <div>
        <header>
         <Header/>
        </header>

        <main>
          <Switch>
            <Route exact path="/" component={Main}/>
            <Route path="/page1" component={View1}/>
            <Route path="/page2" component={View2}/>
            <Route path="/page3" component={View3}/>
          </Switch>
        </main>

        <footer>
          The footer
        </footer>
      </div>
    );
  }
}

export default AppShell;
