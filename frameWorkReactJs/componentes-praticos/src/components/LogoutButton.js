import React from 'react';
import { Button } from 'reactstrap';

export default function LogoutButton(props){
    return (
        <Button color="success" onClick={props.onClick}>
            Logout
        </Button>
    );
}