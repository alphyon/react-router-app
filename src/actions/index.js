import { FETCH_CUSTOMER } from '../constants'
import { createAction } from 'redux-actions';



export const fetchCustomers = createAction(FETCH_CUSTOMER)