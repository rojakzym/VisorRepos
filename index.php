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
      repos : [],
      Addhtml : null
    };
    
    this.buscar = this.buscar.bind(this);
    this.handleChange = this.handleChange.bind(this);
  }
  
  handleChange({ target }) {
    this.setState({
      [target.name]: target.value
    });
  }

  buscar() {
    console.log( this.state.busquedaGit );
    axios.get('backend.php', {
    params: {
      q: this.state.busquedaGit
    }
  })
      .then(res => {
        const repos = res.data;
        this.setState({ repos });
        let table  = [];
        let repos_table = repos.map(repo  => '<tr><td>'+repo.id+'</td><td>'+repo.name+'</td></tr>');
        console.log(repos_table);
//table.push(`<table><tr>`);
//              let content = this.state.repos.map(repo  => '<td>'+repo.id+'</td><td>'+repo.name+'</td>');
  //            table.push(content);
//table.push(`<tr></table>`);
            //this.setState({
             // Addhtml: table.join("")
    //});
      })
  }
  
  render() {
     return <div>

      <input 
        type="text" 
        name="busquedaGit" 
        placeholder="¿Que quieres bucar?" 
        value={ this.state.busquedaGit }
        onChange={ this.handleChange } 
      />
      
      <button value="Send" onClick={ this.buscar }>Buscar</button>
 <div id="tabla-resultados" dangerouslySetInnerHTML={{__html: this.state.Addhtml}}></div>
       </div>
  }
}

ReactDOM.render(<App />, document.getElementById('root'));
    </script>
    </div>
</body>
</html>