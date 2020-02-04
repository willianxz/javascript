import React from 'react';
import ReactDOM from 'react-dom';
import AppShell from './AppShell';
import { BrowserRouter } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import './mestre.css';

ReactDOM.render(
  <BrowserRouter>
  <AppShell />
  </BrowserRouter>
  , document.getElementById('root'));
