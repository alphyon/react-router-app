import React from 'react';
import PropTypes from 'prop-types';
import CustomerListItem from './CustomerListItem';

const CustomerList = ({ customers,urlPath }) => {
    return (
        <div>
            <div className="customers-list">

                {
                    customers.map(c =>
                        <CustomerListItem
                            key={c.dui}
                            name={c.name}
                            dui={c.dui}
                            editAction={"editar"}
                            delAction={"eliminar"}
                            urlPath={urlPath}
                        ></CustomerListItem>
                    )
                }
            </div>
        </div>
    );
};

CustomerList.propTypes = {
    customers: PropTypes.array.isRequired,
};

export default CustomerList;