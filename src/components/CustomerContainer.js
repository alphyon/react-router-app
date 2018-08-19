import React, { Component } from 'react';
import { connect } from 'react-redux'
import PropTypes from 'prop-types';
import AppFrame from './AppFrame';
import { getCustomerByDui } from '../selector/customers';
import { Route } from 'react-router-dom';

class CustomerContainer extends Component {
    renderBody=()=>(
        <Route path="/customers/:dui/edit" children={
            ({match})=>(match ? <p>Edicion </p>: <p>No Edit</p>)
        }/>
    )
    render() {
        //<p>Datos de del cliente { this.props.customer.name}</p>
        return (
            <div>
                <AppFrame
                header={`Cliente ${this.props.dui}`}
                body={this.renderBody()}
                ></AppFrame>
            </div>
        );
    }
}

CustomerContainer.propTypes = {
dui: PropTypes.string.isRequired,
customer: PropTypes.object.isRequired,
};

const mapStateToProps= (state, props) =>({
    customer: getCustomerByDui(state, props)
})
export default connect(mapStateToProps,  null)(CustomerContainer);