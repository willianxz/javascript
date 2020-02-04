import React from 'react';
import SearchBar from './SearchBar';
import Table from './Table';
import {debounce} from 'throttle-debounce';



const Root="http://"+document.location.hostname+"/app/";

export default class App extends React.Component{

    constructor(){
        super();
        this.state=({
            db: []
        });
        this.searchDB();

    }

    searchDB(Valor){
        fetch("http://localhost:80/arquivos/javascript/frameWorkReactJs/busca-db-usando-backend/src/api/index.php", {
            method: 'POST',
            body: JSON.stringify({
                Busca: Valor
            })
        })
            .then((response)=>response.json())
            .then((responseJson)=>
            {
                this.setState({
                    db: responseJson
                });
                console.log(responseJson);
            });
    }

    render(){
        return(
            <div>
                <SearchBar funcao={debounce(3000,this.searchDB.bind(this))} estado={this.state.db} />
                <Table arrayCarros={this.state.db} />
            </div>
        );
    }
}
