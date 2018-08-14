import React from 'react';
import PropTypes from 'prop-types';

const CustomerData = ({name, dui, age}) => {
    return (
        <div>
            <div className="customer">
                <h2>Datos del Cliente</h2>
                <div><strong>Nombre:</strong> {name}</div>
                <div><strong>DUI:</strong> {dui}</div>
                <div><strong>Edad:</strong> {age} </div>
            </div>
        </div>
    );
};

CustomerData.propTypes = {
    name: PropTypes.string.isRequired,
    dui: PropTypes.string.isRequired,
    age: PropTypes.number
};

export default CustomerData;