import React from 'react';
import Blog from './Blog';

const posts = [
  {id: 1, title: 'Hello World', content: 'Welcome to learning React!'},
  {id: 2, title: 'Installation', content: 'You can install React from npm.'}
];

export default class App extends React.Component{
  render(){
    return (
      <div className="App">
        <Blog posts={posts} />
      </div>
    );
  }
}
