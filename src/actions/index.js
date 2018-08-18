import { FETCH_CUSTOMER } from '../constants'
import { createAction } from 'redux-actions';


const customers = [
    { "dui": "010234", "name": "Juan perez", "age": 30 },
    { "dui": "010235", "name": "Juan perez", "age": 30 },
    { "dui": "010236", "name": "Juan perez", "age": 30 },
    { "dui": "010237", "name": "Juan perez", "age": 30 },
    { "dui": "010238", "name": "Juan perez", "age": 30 },
    { "dui": "010239", "name": "Juan perez", "age": 30 },
];

export const fetchCustomers = createAction(FETCH_CUSTOMER, ()=> customers)