import React from "react";

export default class SnippetInput extends React.Component{
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

       let valorinput = (this.props.valorinput) ? this.props.valorinput : 1;
        
       return (
            <div>
                <div>
                    <div id="diminuir" className="noTextSelect" style={stylebotaodiminuir} onClick={this.props.handleDiminuir}>
                        <span style={{fontSize: "30px", padding: "10px"}}>-</span>
                    </div>
                    <input style={{"width":"150px","textAlign": "center"}} type="text" value={valorinput} onChange={this.props.handleChange}/>                    
                    <div id="aumentar" className="noTextSelect" style={stylebotaoaumentar} onClick={this.props.handleAumentar}>
                        <span style={{fontSize: "30px", padding: "10px"}}>+</span>  
                    </div>              
                </div>
            </div>
        );
    }
}