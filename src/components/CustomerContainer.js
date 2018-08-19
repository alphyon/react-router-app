import React, { Component } from 'react';
import { connect } from 'react-redux'
import PropTypes from 'prop-types';
import AppFrame from './AppFrame';

class CustomerContainer extends Component {
    render() {
        return (
            <div>
                <AppFrame
                header={`Cliente ${this.props.dui}`}
                body={<p>Datos de del cliente { this.props.customer.name}</p>}
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
    customer: state.customers.find(c=>c.dui === props.dui)
})
export default connect(mapStateToProps,  null)(CustomerContainer);