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
    
    class Buscar extends React.Component {
    render() {
        return <div><input type="text" name="q" id="q" />
        <button onClick={this.getDataFromGithub} class="btn btn-success">Buscar</button>
        <div id="cuadroDeBusqueda"></div>
        </div>;
    }
}
ReactDOM.render(
    <Buscar />, 
    document.getElementById("root")
);
    </script>
    </div>
</body>
</html>