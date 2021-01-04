import React from 'react';
import LoginButton from './LoginButton';
import LogoutButton from './LogoutButton';

export default class LoginControll extends React.Component{
    constructor(props){
        super(props);
        
        this.handleLoginClick = this.handleLoginClick.bind(this);
        this.handleLogoutClick = this.handleLogoutClick.bind(this);
        this.state = {
            isLoggedIn: false
        };
    }

    handleLoginClick(){
        this.setState({isLoggedIn: true});
    }

    handleLogoutClick(){
        this.setState({isLoggedIn: false});
    }

    render(){
        const isLoggedIn = this.state.isLoggedIn;
        let button;
        let text;

        if (isLoggedIn) {
            button = <LogoutButton onClick={this.handleLogoutClick} />;
            text = <h1>Welcome back!</h1>;
          } else {
            button = <LoginButton onClick={this.handleLoginClick} />;
            text = <h1>Please sign up.</h1>;
          }

        return (
            <div>
                {text}
                {button}                
            </div>
        );
    }
   
}