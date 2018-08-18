import React from 'react';
import PropTypes from 'prop-types';

const CustomerEdit = ({name,dui, age}) => {
    return (
        <div>
            <h2>Edicion del cliente</h2>
            <h3>{name} / {dui} / {age}</h3>
        </div>
    );
};

CustomerEdit.propTypes = {
    name: PropTypes.string,
    dui: PropTypes.string,
    age: PropTypes.number,
    
};

export default CustomerEdit;