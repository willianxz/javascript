import React from 'react';
import { Button } from 'reactstrap';

export default function LoginButton(props){
    return (
        <Button color="secondary" onClick={props.onClick}>
            Login
        </Button>
    );
}