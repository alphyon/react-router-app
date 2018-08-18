import React, { Component } from 'react';
import PropTypes from 'prop-types';
import AppFrame from './AppFrame';
import CustomerList from './CustomerList';
import CustomerActions from './CustomerActions';
import { withRouter } from 'react-router-dom';

const customers = [
    { "dui": "010234", "name": "Juan perez", "age": 30 },
    { "dui": "010235", "name": "Juan perez", "age": 30 },
    { "dui": "010236", "name": "Juan perez", "age": 30 },
    { "dui": "010237", "name": "Juan perez", "age": 30 },
    { "dui": "010238", "name": "Juan perez", "age": 30 },
    { "dui": "010239", "name": "Juan perez", "age": 30 },
];


class CustomersContainers extends Component {
    renderBody = customers => (
        <div>
            <CustomerList
                customers={customers}
                urlPath={'customers'}>
            </CustomerList>
            <CustomerActions>
                <button onClick={this.handleAddNew}>Agregar nuevo </button>
            </CustomerActions>
        </div>
    );

    handleAddNew=()=>{
        this.props.history.push('/customers/new')
    }
    render() {
        return (
            <div>
                <AppFrame header={'listado de Clientes'}
                    body={this.renderBody(customers)}></AppFrame>
            </div>
        );
    }
}

CustomersContainers.propTypes = {

};

export default withRouter(CustomersContainers);