import React from 'react';
import View1 from './View1';
import View2 from './View2';
import View3 from './View3';
import { Switch, Route, Link } from 'react-router-dom';

export default class AppShell extends React.Component{
  render(){
    return (
      <div>
          <header>
              <Link to="/">Page 1 </Link>
              <Link to="/page2">Page 2 </Link>
              <Link to="/page3">Page 3 </Link>
          </header>

          <main>
             <Switch>
                <Route exact path="/" component={View1}/>
                 <Route path="/page2" component={View2}/>
                 <Route path="/page3" component={View3}/>
             </Switch>
          </main>

          <footer>
            My footer
          </footer>
      </div>
    );
  }
}
