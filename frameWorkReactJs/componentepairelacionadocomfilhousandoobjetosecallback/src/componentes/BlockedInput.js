import React from 'react';
import functions from './helpers';

export default class BlockedInput extends React.Component{
    render(){
        let valorbloqueado = (this.props.valorbloqueado) ? this.props.valorbloqueado : 10;       
        return (
            <div>
                <input disabled style={{"textAlign":"center"}} type="text" value={functions.convertFloatToMoneyBrazilString(valorbloqueado)} />
            </div>
        );
    }
}