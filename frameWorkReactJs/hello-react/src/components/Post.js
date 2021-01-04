import React from 'react';
import Comment from './Comment';

export default class Post extends React.Component{
  render(){
    return (
      <div>
       <h1 style={alignTextCenter}>{ this.props.title }</h1>
       <Comment/>
      </div>
    );
  }
}

const alignTextCenter = {
  "textAlign" : "center",
  "fontFamily" : "arial"
};
