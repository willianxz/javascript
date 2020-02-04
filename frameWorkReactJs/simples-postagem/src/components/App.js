import React from 'react';
import Post from './Post';

export default class App extends React.Component{
  render(){
    return(
    <div>
     <Post title="Postagem 1"/>
     <Post title="Postagem 2"/>
     <Post title="Postagem 3"/>
    </div>
    );
  }
}
