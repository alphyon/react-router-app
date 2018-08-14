import React, { Component } from 'react';
import {Link, BrowserRouter as Router} from 'react-router-dom';
import './App.css';

class App extends Component {
  render() {
    return (
      <Router>
      <div className="App">
      
        <Link to="/customers">Compradores</Link>
        <Link to="/customer/3000">un comprador X</Link>
      </div>
      </Router>
    );
  }
}

export default App;
