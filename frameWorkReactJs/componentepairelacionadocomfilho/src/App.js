import React from 'react';
import QuantityBlockedValue from './componentes/QuantityBlockedValue';
import relogio1 from './images/relogio1.jpg';
import relogio3 from './images/relogio3.jpg';
import relogio4 from './images/relogio4.jpg';
import functions from './componentes/helpers';

function App() {
  return (
    <div className="App">

         <div className="container">
           <h1 className="center">RELACIONAMENTO ENTRE COMPONENTE PAI E FILHO</h1>
         </div>

         <div className="row">
             <div className="col m4"> 
                <div className="card blue-grey darken-1">
                  <div className="card-content white-text center">
                      <h1>Relógio Moderno</h1>
                      <img src={relogio1} className="materialboxed" width="100%" height="300"  alt="Relógio importado de primeira classe executiva." />
                      <h2 style={{"fontSize":"20px","display":"inline"}}>Description:</h2>
                      <span>Relógio importado de primeira classe executiva.</span>
                      <br/>
                      <h2 style={{"fontSize":"20px","display":"inline"}}>Prince:</h2>
                      <span>{functions.convertFloatToMoneyBrazilString(10.50)}</span>                   
                  </div>                 
                </div>
                  <QuantityBlockedValue productprince={10.50}/>
                </div>
                  
                <div className="col m4"> 
                  <div className="card blue-grey darken-1">
                    <div className="card-content white-text center">
                        <h1>Relógio Moderno</h1>
                        <img src={relogio4} className="materialboxed" width="100%" height="300" alt="Relógio importado de primeira classe executiva." />
                        <h2 style={{"fontSize":"20px","display":"inline"}}>Description:</h2>
                        <span>Relógio importado de primeira classe executiva.</span>
                        <br/>
                        <h2 style={{"fontSize":"20px","display":"inline"}}>Prince:</h2>
                        <span>{functions.convertFloatToMoneyBrazilString(10.50)}</span>                   
                    </div>                 
                  </div>
                  <QuantityBlockedValue productprince={10.50}/>
                </div>

                <div className="col m4"> 
                  <div className="card blue-grey darken-1">
                    <div className="card-content white-text center">
                        <h1>Relógio Moderno</h1>
                        <img src={relogio3} className="materialboxed" width="100%" height="300" alt="Relógio importado de primeira classe executiva." />
                        <h2 style={{"fontSize":"20px","display":"inline"}}>Description:</h2>
                        <span>Relógio importado de primeira classe executiva.</span>
                        <br/>
                        <h2 style={{"fontSize":"20px","display":"inline"}}>Prince:</h2>
                        <span>{functions.convertFloatToMoneyBrazilString(10.50)}</span>                   
                    </div>                 
                  </div>
                  <QuantityBlockedValue productprince={10.50}/>
                </div>              
        </div>
    </div>
  );
}

export default App;
