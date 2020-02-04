import React from 'react';

export class Child extends React.Component {
  constructor(props){
    super(props);
    this.handleChange = this.handleChange.bind(this);
  }
  handleChange(e){
    //Ele pega o valor que foi selecionado no input e usa a função que veio do pai(Parent) através de props.
    const name = e.target.value;
    this.props.onChange(name);
  }
  render() {
    return (
      <div>
        <h1>
          Selected Name: 
        </h1>
        <select id="great-names" onChange={this.handleChange}>
          <option value="Frarthur">
            Frarthur
          </option>

          <option value="Gromulus">
            Gromulus
          </option>

          <option value="Thinkpiece">
            Thinkpiece
          </option>
        </select>
      </div>
    );
  }
}
