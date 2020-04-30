import React from 'react';
import {ProductConsumer} from '../Context';
import {AiFillDelete} from 'react-icons/ai';
import {AiOutlineHeart} from 'react-icons/ai';

const SideCart = () => (
        <ProductConsumer>
          {value =>{
            const {cartOpen, cartItems, cartTax, cartSubTotal, closeCart, cart, cartTotal, removeItem} = value;
                return(
                        <div>
                         {
                             cartOpen ? 
                            
                                        <div className="side-cart-wrapper">
                                            <div className="side-cart-content">
                                                <div className="side-cart-close" onClick={closeCart} >CLOSE</div>
                                                <div className="pl-2 side-cart-bag">MY BAG ({cartItems})</div>
                                                {cart.length===0?<div>
                                                  <h4 className="side-cart-info">Your Shopping Bag Is Empty</h4>
                                                  <h4 className="pt-4 side-cart-info-2">Please add items to your bag</h4>
                                                </div>:<div>
                                                {/* <div className="link-bag-button"><a href="/cart" className="link-text">View Bag</a></div> */}
                                                  
                                                 {
                                                    localStorage.userToken ?<div>
                                                      <div className="link-button"><a href="/checkout" className="link-text">CHECKOUT</a></div>
                                                    </div>: <div className="link-button"><a href="/login" className="link-text">CHECKOUT</a></div>
                                                 }
                                                  {  
                                                
                                                cart.map(item => <div  key={item.id} className = "side-cart-first-section">
                                                    <div className="side-cart-image-container">
                                                    <img src={item.image_url_1} className="side-cart-image"/>
                                                   </div>
                                                <div className="side-cart-text">
                                                <div className="side-cart-title"><h4> {item.title}
                                                  </h4></div>
                                                    <div className="side-cart-price">Price:${item.price}</div>
                            
                                                    {/* <div className="side-cart-wishList"><AiOutlineHeart className="aiWishlist"/></div> */}
                                                    <div className="side-cart-remove" onClick={()=>removeItem(item.id)}>
                                                            <AiFillDelete className="aiDelete"/></div>
                                                 </div>
                                                </div>
                                            
                                            
                                                )
                                            } 
                                                <div className="pl-2 pt-2 side-cart-totals"><span className="bold-total">SubTotal:</span>${cartSubTotal}</div>
                                                <div className="pl-2 side-cart-totals"><span className="bold-total">Tax:</span>${cartTax}  </div>
                                                <div className="pl-2 side-cart-totals"><span className="bold-total">CartTotal:</span> ${cartTotal}</div>
                                               {/* <div className="link-bag-button"><a href="/cart" className="link-text">View Bag</a></div> */}
                                               {
                                                  localStorage.userToken ?<div>
                                                     <div className="link-button"><a href="/checkout" className="link-text">CHECKOUT</a></div>
                                                  </div>: <div className="link-button"><a href="/login" className="link-text">CHECKOUT</a></div>
                                               }
                                                </div>}
                                               
                                            
                                           </div>
                                        </div> 
                                 
                            
        
                                : null
                         }   

                        </div> 
                        
                    
                   
                );

           }
        }
        </ProductConsumer>
    
);



export default SideCart;