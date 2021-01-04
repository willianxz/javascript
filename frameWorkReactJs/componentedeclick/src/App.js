import React from 'react';
import SnippetInput from './componentes/SnippetInput';


function App() {
  return (
    <div className="App">
         <div className="row">
             <div className="container">
             <br/>
                <SnippetInput/>
                <br/>
                <br/>

                <SnippetInput corBotaoAumentar="#64dd17"/>

                <br/>
                <br/>

                <SnippetInput corBotaoDiminuir ="#ff1744" corBotaoAumentar = "#0091ea"/>
                <br/>
                <br/>
              </div>
            </div>
    </div>
  );
}

export default App;
