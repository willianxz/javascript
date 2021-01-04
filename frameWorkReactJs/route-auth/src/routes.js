import React from 'react';
import { BrowserRouter, Route, Switch, Redirect } from 'react-router-dom';
import { isAuthenticated } from './auth';

const PrivateRoute = ({ component: Component, ...rest}) => (
  <Route {...rest} render={props => (
      isAuthenticated() ? ( //Se ele estiver autenticado, renderize o componente.
        <Component {...props} />
      ) : (
        <Redirect to={{ pathname: '/', state: { from: props.location }}}/> //Senão redirecione ele para o página inicial, sem perder o historico de navegação.
      )
    )}/>
);

const Routes = () =>(
  <BrowserRouter>
    <Switch>
      <Route exact path="/" component={() => <h1>Hello World</h1>} /> //O exact, define o caminho exato.
      <PrivateRoute path="/app" component={() => <h1>Você está logado</h1>} /> //Sem o exact, tudo após o Path entra aqui, ex: /app/a
    </Switch>
  </BrowserRouter>
);

export default Routes;
