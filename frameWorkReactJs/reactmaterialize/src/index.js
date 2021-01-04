import React from 'react';
import ReactDOM from 'react-dom';
import AppShell from './components/AppShell';
import { BrowserRouter } from 'react-router-dom';
import "materialize-css/dist/css/materialize.min.css";
import './mestre.css';





// export const materialize = M;

ReactDOM.render(
  <BrowserRouter>
    <AppShell />
  </BrowserRouter>

, document.getElementById('root'));

