import React, {Component} from 'react';
// import {ProductConsumer, ProductProvider} from '../Context';
import ReactDOM from 'react-dom';
import {StripeProvider} from 'react-stripe-elements';
import Products from '../components/Products';

// const CheckoutPage = ()=>(
//     <div>
//         <Products/>
//     </div>
    
// )
class CheckoutPage extends Component{
    constructor(props){
        super(props);

        this.state={
            stripe:null
        }
    }
    
    componentDidMount(){
        this.setState({ stripe: window.Stripe(String(process.env.MIX_STRIPE_PUBLISHABLE_KEY))});
    }

    render(){
        return(
            <div>
                  <StripeProvider stripe={this.state.stripe}> 
                        <Products />
                 </StripeProvider>
            </div>
        )
    }
}

if(document.getElementById('order-items')){
    ReactDOM.render(
          <CheckoutPage />
        
     , document.getElementById('order-items'));
}