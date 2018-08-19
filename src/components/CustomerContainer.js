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
                body={<p>Datos de del cliente</p>}
                ></AppFrame>
            </div>
        );
    }
}

CustomerContainer.propTypes = {
dui: PropTypes.string.isRequired,
};

export default connect(null,null)(CustomerContainer);