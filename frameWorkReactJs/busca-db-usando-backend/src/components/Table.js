import React from 'react';

export default class Table extends React.Component{

    render(){
        return(
            <div className="Table">
                <table>
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>MARCA</td>
                        <td>MODELO</td>
                        <td>ANO</td>
                    </tr>
                    </thead>

                    <tbody>
                    {
                    this.props.arrayCarros.map(
                    row=>
                    <tr key={row.Id}>
                        <td>{row.Id}</td>
                        <td>{row.Marca}</td>
                        <td>{row.Modelo}</td>
                        <td>{row.Ano}</td>
                    </tr>
                    )
                    }
                    </tbody>

                </table>
            </div>
        );
    }
}
