import React from "react";
import myclock from '../images/clock_img.jpg';

export default class Clock extends React.Component{
    constructor(props){
        super(props);
        
        this.state = {
            date: new Date()
        }
    }

    componentDidMount(){
        this.timerInterval = setInterval(() => {
            this.tick();    
        }, 1000)
    }

    componentWillUnmount(){
        clearInterval(this.timerInterval);
    }

    tick(){
        this.setState({
            date: new Date()
        });
    }

    render(){

        const imageClockWidth = 250; 
        const imageClockHeight = 200; 
        const sizeOfClockFont = 30; 
        
        return (
            
            <div style={{"width":imageClockWidth+5+"px","height":imageClockHeight+10+"px"}}>
                <img src={myclock} style={{"width":imageClockWidth+"px", "height":imageClockHeight+"px"}} alt="Image of Clock"/>
                <div>
                    <span style={{"fontWeight" : "bold", "fontSize":sizeOfClockFont-12+"px", "position":"relative","top":"-160px", "left":"60px"}}>The Time is:</span>
                    <span style={{"display" : "block","fontSize":sizeOfClockFont+"px","position":"relative","top":"-160px", "left":"60px"}}>{this.state.date.toLocaleTimeString()}</span>
                </div>
            </div>
        );
    }
}