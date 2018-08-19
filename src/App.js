import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import './App.css';
import HomeContainer from './components/HomeContainer';
import CustomersContainers from './components/CustomersContainers';
import CustomerContainer from './components/CustomerContainer';

class App extends Component {
  renderName = () => <h1>Home</h1>;
  renderCustmerListContainer = () => <h1>Lista Customer</h1>;
  renderCustmerContainerName = () => <h1>Contenedor</h1>;
  CustmerNewContainer = () => <h1>Nuevo</h1>;
  render() {
    return (
      <Router>
        <div>
          
            <Route exact path="/" component={HomeContainer} />
            <Route exact path="/customers" component={CustomersContainers} />
            <Switch>
            <Route path="/customers/new" component={this.CustmerNewContainer} />
            <Route path="/customers/:dui" component={CustomerContainer} />
          </Switch>

        </div>
      </Router>
    );
  }
}

export default App;
