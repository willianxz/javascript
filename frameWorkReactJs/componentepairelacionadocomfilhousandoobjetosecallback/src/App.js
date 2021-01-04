import React from 'react';
import ProductTotalInCart from './componentes/ProductTotalInCart';

function App() {
  return (
    <div className="App">

         <div className="container">
           <h1 className="center">RELACIONAMENTO ENTRE COMPONENTE PAI E FILHO USANDO OBJETOS E CALLBACK</h1>
         </div>

        <ProductTotalInCart />
    </div>
  );
}

export default App;
