import { FETCH_CUSTOMER } from '../constants'
import { createAction } from 'redux-actions';


const url = "http://localhost:3001/customers";
const apiFetch = () => fetch(url).then(v=> v.json());
export const fetchCustomers = createAction(FETCH_CUSTOMER, apiFetch)