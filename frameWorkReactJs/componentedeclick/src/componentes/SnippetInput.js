import React from "react";

export default class SnippetInput extends React.Component{
    constructor(props){
        super(props);

       this.state = {
           valorinput : 1
       }
       this.handleChange = this.handleChange.bind(this);
       this.handleAumentar = this.handleAumentar.bind(this);
       this.handleDiminuir = this.handleDiminuir.bind(this);      
    }   

    handleChange(event){
        let digito = event.target.value;
        let digitoInt = parseInt(digito);
        if(digitoInt > 0){
            this.setState({valorinput: digitoInt});
        }     
    }

    handleAumentar(){
        let digitoAumentado = this.state.valorinput + 1;
        this.setState({valorinput: digitoAumentado});        
    }

    handleDiminuir(){
        let digito = this.state.valorinput;
        if(digito > 1){
            let digitoDiminuido = this.state.valorinput - 1;
            this.setState({valorinput: digitoDiminuido});
        }        
    }

    render(){

        let stylecorbotaodiminuir = "#F44336";
        let stylecorbotaoaumentar = "#009688";

        if(this.props.corBotaoDiminuir){
            stylecorbotaodiminuir = this.props.corBotaoDiminuir;
        }

        if(this.props.corBotaoAumentar){
            stylecorbotaoaumentar = this.props.corBotaoAumentar;
        }
        
        const stylebotaodiminuir = {
            display: "inline-block", 
            width: "50px",
            height: "50px",
            backgroundColor: stylecorbotaodiminuir,
            textAlign: "center"
        };

        const stylebotaoaumentar = {
            display: "inline-block",
            width: "50px",
            height: "50px",
            backgroundColor: stylecorbotaoaumentar,
            textAlign: "center"
        };
        
       return (
            <div>
                <div>
                    <div id="diminuir" className="noTextSelect" style={stylebotaodiminuir} onClick={this.handleDiminuir}>
                        <span style={{fontSize: "30px", padding: "10px"}}>-</span>
                    </div>
                    <input style={{"width":"150px","textAlign": "center"}} type="text" value={this.state.valorinput} onChange={this.handleChange}/>                    
                    <div id="aumentar" className="noTextSelect" style={stylebotaoaumentar} onClick={this.handleAumentar}>
                        <span style={{fontSize: "30px", padding: "10px"}}>+</span>  
                    </div>              
                </div>
            </div>
        );
    }
}