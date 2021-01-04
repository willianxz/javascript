import React from 'react';
import '../estilos/estilizarDivs.css';

export default class ComponenteEstilizado extends React.Component{
 render(){
   const estilo1 = {
     backgroundColor: 'green',
     width: '600px',
     height: '600px',
   }
   return(
     <div>
       <div style={{backgroundColor: 'yellow', width: '400px', height: '400px'}}>YELLOW</div>
       <div style={estilo1}>GREEN</div>
       <div className="BackgroundBlue">BLUE</div>
       <div id="PersonPurple">PERSON PURPLE</div>
     </div>
   );
 }
}
