import React, {Component} from 'react';
import {CardElement, injectStripe, CardNumberElement, CardCVCElement, CardExpiryElement} from 'react-stripe-elements';
import axios from 'axios';
import {FaSpinner} from 'react-icons/fa';



class PaymentForm extends Component{
    constructor(props){
        super(props);

        this.state={
            token:'',
            name:'',
            email:'',
            price: this.props.price,
            street_address:'',
            city:'',
            zipcode:'',
            state:'STATE',
            cart:localStorage.getItem('cart'),
            order_total:this.props.cartTotal,
            cartSubTotal:this.props.cartSubTotal,
            userDetails:JSON.parse(localStorage.getItem('userDetails')),
            customer_firstname:'',
            customer_lastname:'',
            cartTax:this.props.cartTax,
            order_ref:'',
            success:'',
            view:'order-confirmation',
            subject:'order-confirmation',
            loading:false,
            error:''
        }

       //bind
       this.changeHandler = this.changeHandler.bind(this);
       this.getStripeToken = this.getStripeToken.bind(this);
       this.handleChange = this.handleChange.bind(this);
    }
    
    changeHandler(e){
        this.setState({
            [e.target.name]:e.target.value
        })
      
    }
    handleChange(e) {
        this.setState({
            state:e.target.value
        });
     }
  
    loggedInUser(){
        let userDetails ={...this.state.userDetails}
        let userEmail = userDetails.email;
        let userFirstName = userDetails.firstname;
        let userLastName = userDetails.lastname;
        this.setState({
            customer_firstname:userFirstName,
            customer_lastname:userLastName,
            email:userEmail
        });
    }
    
    getOrderId(){
        const orderId = '#' + Math.random().toString(36).substr(2, 9);

        this.setState({
            order_ref:orderId
        })
    }

    clearCart(){
        localStorage.removeItem('cart');
        localStorage.removeItem('cartTotal');
        localStorage.removeItem('cartSubTotal');
        localStorage.removeItem('cartTax');
        localStorage.removeItem('cartItems');

    }
    loading(){
        this.setState({
            loading:true
        });
    }
  
    async getStripeToken(e){
        e.preventDefault();
        

        let token = await this.props.stripe.createToken({name:this.state.name});
        console.log(token.token.id)
        
        this.loading();
        this.loggedInUser();
        this.getOrderId();
        const userData = {
            customer_email:this.state.email,
            token:token.token.id,
            street_address:this.state.street_address,
            city:this.state.city,
            state:this.state.state,
            zipcode:this.state.zipcode,
            customer_firstname:this.state.customer_firstname,
            customer_lastname:this.state.customer_lastname,
            order_total:this.state.order_total,
            cart:this.state.cart,
            order_subTotal:this.state.cartSubTotal,
            order_tax:this.state.cartTax,
            order_ref:this.state.order_ref,
            view:this.state.view,
            subject:this.state.subject
        }
       
        await axios.post('/api/payment', userData).then(
            paymentResponse =>{
                console.log(paymentResponse.data)
                console.log(paymentResponse.data.error)
                if(paymentResponse){
                    console.log('charge added')
                    this.setState({
                        success:paymentResponse.data.success
                    })
                    localStorage.setItem('successMessage', paymentResponse.data.success)
                    this.clearCart();
                }
            } 
            
        ).catch(error => {
            if(error){
                this.setState({
                    error:'payment error'
                })
            }
        })

       
       
    }
  

    render(){
        return(
            <div> 
                {
                    this.state.success==="Payment Successful" ? <button onClick={window.location.href="/order-confirmation"}></button>:
                    
                    <div className="card">
                    <div className="card-header"> MAKE PAYMENT</div>
                    <div className="card-body">
                    <form onSubmit={this.getStripeToken}>
                        <div className="pb-2">Please fill in your shipping address</div>
                        <div className="form-group">
                          <input type='text' onChange={this.changeHandler} value={this.state.street_address} className="form-control" placeholder="STREET ADDRESS" name="street_address" required/>
                        </div>
                        <div className="row">
                            <div className="col-md-6">
                               <div className="form-group">
                                 <input type='text' onChange={this.changeHandler} value={this.state.city} className="form-control" placeholder="CITY" name="city" required/>
                              </div>
                            </div>
                            <div className="col-md-6">
                                <div className="form-group">
                                    <select value={this.state.state} onChange={this.handleChange} className="form-control">
                                        <option value="state">STATE</option>
                                        <option value="Ohio">OHIO</option>
                                        <option value="Texas">TEXAS</option>
                                        <option value="Florida">FLORIDA</option>
                                        <option value="New Jersey">NEW JERSEY</option>
                                    </select>
                               </div>
                            </div>
                        </div>
                       
                        <div className="row">
                            <div className="col-md-4">
                               <div className="form-group">
                                 <input type='text' onChange={this.changeHandler} value={this.state.zipcode} className="form-control" placeholder="ZIPCODE" name="zipcode" required/>
                              </div>
                            </div>
                        </div>
                       
                     
                        <div className="pb-2">Please fill in your Card Details</div>
                        <div className="row">
                            <div className="col-md-4">
                                <div className="form-group">
                                  <CardNumberElement className="form-control stripe-card" placeholder="Card Number"/>
                                </div>
                               
                            </div>
                            <div className="col-md-4">
                                <div className="form-group">
                                  <CardExpiryElement className="form-control stripe-card"/>
                                </div>
                                
                            </div>
                            <div className="col-md-4">
                                <div className="form-group">
                                   <CardCVCElement className="form-control stripe-card"/>
                                </div>
                               
                            </div>
                        </div>
                       <div className="form-group">
                           
                          {/* <CardElement className="form-control"/> */}
                            
                       </div>
                       
                       <input type="submit" value="Pay" className="stripe-payment-button mt-2"/>
                   </form>
                        <div className="card-payment-options mt-2">
                             <p className="card-payment-text pt-4">We accept</p>
                             <div className="visa-image-container mr-1"><img src="/images/visa.png" className="visa-image"/></div>
                             <div className="mastercard-image-container"><img src="/images/mastercard.png" className="mastercard-image"/></div>
                        </div>
                    </div>
                  </div>
                   
                }
                {
                    this.state.loading === true ? <div>
                             <div className="payment-loading-wrapper">
                                <div className="payment-loading-content">
                                    {
                                        this.state.error !== 'payment error' ? <div className="inner-content">
                                             <h4 className="processing">Your payment is being processed, please wait...</h4>
                                                <div className="payment-fa-spinner-container">
                                                    <FaSpinner className="payment-fa-spinner"/>
                                                </div>
                                        </div>:<div className="inner-content">
                                            <h4 className="unsuccessful">Payment Unsuccessful</h4>
                                            <a href="/checkout" className="try-again">Try Again</a>
                                        </div>
                                    }
                                   
                                </div>
                           </div>
                    </div>:null
                }
                
               
            </div>
        )
    }
}
export default injectStripe(PaymentForm);