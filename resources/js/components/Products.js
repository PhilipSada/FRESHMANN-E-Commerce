import React, {Component} from 'react';
import {Elements} from 'react-stripe-elements';
import PaymentForm from './PaymentForm';
import axios from 'axios';


class Products extends Component{
    constructor(props){
        super(props);

        this.state={
            cart:JSON.parse(localStorage.getItem('cart')),
            cartTotal:JSON.parse(localStorage.getItem('cartTotal')),
            cartSubTotal:JSON.parse(localStorage.getItem('cartSubTotal')),
            cartTax:JSON.parse(localStorage.getItem('cartTax')),
            cartItems:JSON.parse(localStorage.getItem('cartItems')),
            userDetails:JSON.parse(localStorage.getItem('userDetails')),  
        }

        
    }
    render(){
        return(
            <div>
                {
                    !this.state.userDetails?<div>
                        <div className="pt-4">
                           <h4 className="thank-you-message">You are currently not logged in. You need to login before payment processing can begin.Thank You</h4>
                        </div>
                        <div className="pt-4">
                           <h3 className="more-shopping">Still want to shop? <a href="/login" className="more-shopping-btn">Click here</a> to login</h3>
                        </div>
                    </div>:
                    <div>
                        {
                            !this.state.cart || this.state.cart.length===0? <div>
                                <div className="pt-4">
                                <h4 className="thank-you-message">Your shopping bag is currently empty.At least an item must be added to your bag before payment processing can begin.Thank You</h4>
                                </div>
                                <div className="pt-4">
                                <h3 className="more-shopping">Still want to shop? <a href="/" className="more-shopping-btn">Click here</a> to begin shopping</h3>
                                </div>
                            </div>:
                            <div className="container-fluid checkout-body">
                            <div className="row justify-content-center">
                                <div className="col-md-6">
                                    <Elements>
                                        <PaymentForm cart={this.state.cart} cartTotal={this.state.cartTotal}
                                        cartSubTotal={this.state.cartSubTotal} cartTax={this.state.cartTax}/>
                                    </Elements>
                                </div>
                                <div className="col-md-4">
                                    <div className="card">
                                        <div className="card-header">ORDER SUMMARY</div>
                                        <div className="card-body">
                                            <div className="cart-summary">
                                                    <div className="cart-subTotal">
                                                        <h5>SubTotal:</h5>
                                                        <h5>${this.state.cartSubTotal}</h5>
                                                    </div>
                                                    <div className="cart-tax">
                                                        <h5>Tax:</h5>
                                                        <h5>${this.state.cartTax}</h5>
                                                    </div>
                                                    <div className="cart-total">
                                                        <h5>Estimated Total:</h5>
                                                        <h5>${this.state.cartTotal} </h5>
                                                    </div>
                                                    <div className="cartItem-heading"><h5>GET IT THIS TUESDAY</h5></div>
                                                    {
                                                        this.state.cart.map(item=>
                                                        <div key={item.id} className="cartItems">
                                                            <div className="cartItem-image-container"><img src={item.image_url_1} className="cartItem-image"/></div>
                                                            <div className="cartItem-info">
                                                                <h5 className="pl-2">{item.title} </h5>
                                                                <div className="cartItem-price pl-2 pt-3">
                                                                <h5>price: </h5>
                                                                <h5>${item.price}</h5>
                                                                </div>
                                                                <div className="cartItem-qty pl-2">
                                                                <h5>Qty:</h5>
                                                                <h5>{item.count}</h5>
                                                                </div>
                                                                <div className="cartItem-total pl-2">
                                                                <h5>Total:</h5>
                                                                <h5>${item.total} </h5>
                                                                </div> 
                                                            </div>
                                                        </div>  )
                                                    }
        
                                                    
                                                </div>
                                            </div>
                                        </div>
                                </div>
                              </div>
                        </div>
                        }
                            </div>
                }
                
               
               
               
            </div>
        )
    }
}

export default Products;