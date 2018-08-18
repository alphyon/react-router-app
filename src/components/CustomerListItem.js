import React from 'react';
import PropTypes from 'prop-types';
import { Link } from 'react-router-dom';

const CustomerListItem = ({ name, editAction, delAction, urlPath, dui }) => {
    return (
        <div>
            <div className="customer-list-item">
                <div className="field">
                    <Link to={`${urlPath}/${dui}`}>{name}</Link>
                </div>
                <div className="field">
                    <Link to={`${urlPath}/${dui}/edit`}>{editAction}</Link>
                </div>
                <div className="field">
                    <Link to={`${urlPath}/${dui}/del`}>{delAction}</Link>
                </div>
            </div>
        </div>
    );
};

CustomerListItem.propTypes = {
    name: PropTypes.string.isRequired,
    editAction: PropTypes.string.isRequired,
    delAction: PropTypes.string.isRequired,
    urlPath: PropTypes.string.isRequired,
};

export default CustomerListItem;