import {createSelector} from 'reselect'
export const getCustomers = state => state.customers;
export const getCustomerByDui = createSelector(
    (state, props) => state.customers.find(c=>c.dui === props.dui),
    customer => customer
);