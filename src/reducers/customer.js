import { handleActions } from 'redux-actions';
import { FETCH_CUSTOMER } from '../constants/index';

export const customers = handleActions({
    [FETCH_CUSTOMER]: (state, action)=>[...action.payload],
}, [])

//con hadle actions pasamos todas las acciones y el valor inicial de nuestra app