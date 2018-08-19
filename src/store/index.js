import { createStore, compose, applyMiddleware } from 'redux';
import promiseMiddleware from 'redux-promise';
import reducers from '../reducers';

const composeEnshancer = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose; //par lanzar plugin en chrome para depurar 
//params 1-reductores, 2 -estado que devuelve


export const store = createStore(reducers,composeEnshancer(applyMiddleware(promiseMiddleware)))