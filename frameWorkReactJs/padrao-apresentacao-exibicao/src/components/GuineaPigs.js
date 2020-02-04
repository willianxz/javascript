import React from 'react';

/* Componente de exibição */
export class GuineaPigs extends React.Component {
  render() {
    let src = this.props.src;
    return (
      <div>
        <h1>Cute Guinea Pigs</h1>
        <img src={src} alt="Porcos Da india" />
      </div>
    );
  }
}
