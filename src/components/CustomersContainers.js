import React, { Component } from 'react';
import PropTypes from 'prop-types';
import AppFrame from './AppFrame';
import { connect } from 'react-redux';
import CustomerList from './CustomerList';
import CustomerActions from './CustomerActions';
import { withRouter } from 'react-router-dom';
import { fetchCustomers } from '../actions/index';




class CustomersContainers extends Component {
    componentDidMount() {
        this.props.fetchCustomers();
    }
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

    handleAddNew = () => {
        this.props.history.push('/customers/new')
    }
    render() {
        return (
            <div>
                <AppFrame header={'listado de Clientes'}
                    body={this.renderBody(this.props.customers)}></AppFrame>
            </div>
        );
    }
}

CustomersContainers.propTypes = {
    fetchCustomers: PropTypes.func.isRequired,
    customers: PropTypes.array.isRequired,
};

CustomersContainers.defaultProps={
     customers : [
        { "dui": "010234", "name": "Juan perez", "age": 30 },
        { "dui": "010235", "name": "Juan perez", "age": 30 },
        { "dui": "010236", "name": "Juan perez", "age": 30 },
        { "dui": "010237", "name": "Juan perez", "age": 30 },
        { "dui": "010238", "name": "Juan perez", "age": 30 },
        { "dui": "010239", "name": "Juan perez", "age": 30 },
    ]
}
export default withRouter(connect(null, {fetchCustomers})(CustomersContainers));