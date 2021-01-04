import React from 'react';
import SnippetInput from './SnippetInput';
import BlockedInput from './BlockedInput';


export default class QuantityBlockedValue extends React.Component{
    constructor(props){
        super(props);
        
        this.state = {
            productprince: 1.50,
            valorinput: 1,
            valorbloqueado: 1
        }
        
        //The parent component tells the child the event it wants to hear and the parent controls it.
        this.handleChangeSnippet = this.handleChangeSnippet.bind(this); 
        this.handleAumentarSnippet = this.handleAumentarSnippet.bind(this);
        this.handleDiminuirSnippet = this.handleDiminuirSnippet.bind(this);  
    }

    componentDidMount(){        
        if(this.props.productprince){
            this.setState({productprince : this.props.productprince});
            this.setState({valorbloqueado: this.state.valorinput * this.props.productprince});
        }        
    }

    //Passing event change to children and execute here
    handleChangeSnippet(event){
        let digito = event.target.value;        
        let digitoInt = parseInt(digito);
        
        if(digitoInt > 0){
            this.setState({valorinput: digitoInt}); 
            this.setState({valorbloqueado: digitoInt * this.state.productprince});          
        }  
    }
    
    //Passing event change to children and execute here
    handleAumentarSnippet(){
        let digitoAumentado = this.state.valorinput + 1;
        this.setState({valorinput: digitoAumentado});
        this.setState({valorbloqueado: digitoAumentado * this.state.productprince});       
    }

    //Passing event change to children and execute here
    handleDiminuirSnippet(){
        let digito = this.state.valorinput;
        if(digito > 1){
            let digitoDiminuido = this.state.valorinput - 1;
            this.setState({valorinput: digitoDiminuido});
            this.setState({valorbloqueado: digitoDiminuido * this.state.productprince}); 
       }
    }
  
    render(){        
        return(
            <div>
                <div className="center">
                        <h4>Quantity</h4>
                         <SnippetInput valorinput={this.state.valorinput} handleDiminuir={this.handleDiminuirSnippet} handleAumentar={this.handleAumentarSnippet} handleChange={this.handleChangeSnippet} />
                        
                         <h4>Value</h4>
                         <BlockedInput valorbloqueado={this.state.valorbloqueado} />
                </div>

            </div>
        );
    }
}