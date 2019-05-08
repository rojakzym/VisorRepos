<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hola!</title>
    <script src= "https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script src= "https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
    <!-- Load Babel Compiler -->
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body style="margin-top: 200px; text-align: center;">
    <div>
        <div id="root"></div>
    <script type="text/babel">
    
    class App extends React.Component {
  constructor() {
    super();
    this.state = {
      busquedaGit: null,
      persons: []
    };
    
    this.publish = this.publish.bind(this);
    this.handleChange = this.handleChange.bind(this);
  }
  
  handleChange({ target }) {
    this.setState({
      [target.name]: target.value
    });
  }
  componentDidMount() {
    axios.get(`https://jsonplaceholder.typicode.com/users`)
      .then(res => {
        const persons = res.data;
        this.setState({ persons });
      })
  }

  publish() {
    console.log( this.state.busquedaGit );
  }
  
  render() {
    return <div>
    <ul>
        { this.state.persons.map(person => <li>{person.name}</li>)}
      </ul>

      <input 
        type="text" 
        name="busquedaGit" 
        placeholder="Enter topic here..." 
        value={ this.state.busquedaGit }
        onChange={ this.handleChange } 
      />
      
      <button value="Send" onClick={ this.publish }>Publish</button>
    </div>
  }
}

ReactDOM.render(<App />, document.getElementById('root'));
    </script>
    </div>
</body>
</html>