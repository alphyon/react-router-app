import React, { Component } from 'react';
import { Link , withRouter} from 'react-router-dom';
import AppFrame from './AppFrame';
import CustomerActions from './CustomerActions';

class HomeContainer extends Component {
    handleOnClick =() =>{
        this.props.history.push('/customers')
        
    }
    render() {
        return (
            <div>
                <AppFrame 
                header="Home"
                body={
                    <div> Esta es la pantalla inicial
                        <CustomerActions>
                            <button onClick={this.handleOnClick}>Lista de clientes </button>
                            <Link to="/customers"> Lista de clientes </Link>
                            </CustomerActions> 
                    </div>
                }
                ></AppFrame>
            </div>
        );
    }
}


export default withRouter(HomeContainer);