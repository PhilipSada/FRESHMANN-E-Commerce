import React from 'react';
import {ProductConsumer} from '../../Context';
import {AiFillDelete} from 'react-icons/ai';
import {TiPlus, TiMinus} from 'react-icons/ti';
import StripeCheckout from 'react-stripe-checkout';
import {FaPlusCircle} from 'react-icons/fa';

const Cart = ()=>(

    <ProductConsumer>
        {
            value=>{
                const{cart, decrement, increment, cartTotal, cartTax, cartSubTotal, removeItem, storeProducts, setSingleProduct,handleToken}=value;

                return(
                    <div>
                        {
                            cart.length===0? <div>
                                <div>
                                <h4 className="thank-you-message">Your shopping bag is currently empty</h4>
                               </div>
                               <div>
                                   <h3 className="more-shopping">Still want to shop? check our featured products</h3>
                               </div>
                               <div className="featured-container">
                                   <div>
                                       <h4 className="featured-heading">FEATURED PRODUCTS</h4>
                                   </div>
                                   <div className="featured-grid">
                                   {
                                     storeProducts.filter(product => product.featured === "true").map(featureProduct =>  <div key={featureProduct.id} className="product-container">
                                       <div className='product-image-container'>
                                       <a href={`/product/${featureProduct.id}`} onClick={() => setSingleProduct(featureProduct.id, featureProduct.category_id)} > <img src={featureProduct.image_url_1} alt="" className='productImg'/> </a>
                                       </div>
                                       <div className='product-grid-a'>
                                       <div><p>{featureProduct.title} <br/> <span>${featureProduct.price} </span></p></div>
                                       {/* <div><IoMdHeartEmpty className="react-icons-heart"/></div> */}
                                       </div>
                                       </div> )
                                   }
                                       
                                   </div>
           
                                    </div></div>: 
                                    <div className="container-fluid cart-body">
                                    <div className="row justify-content-center">
                                        <div className="col-md-8">
                                            <div className="card">
                                                <div className="card-header">YOUR BAG</div>
                        
                                                <div className="card-body">
                                                <table className="product-table">
                                                    <thead>
                                                        <tr>
                                                            <th className="td-small">Product</th>
                                                            <th className="td-large pr-2 pl-4">Item Name</th>
                                                            <th className="td-smallest">Price</th>
                                                            <th className="td-medium">Quantity</th>
                                                            <th className="td-medium">Total</th>
                                                            <th className="td-smallest">Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {
                                                            cart.map(item=>
                                                            <tr key={item.id}>
                                                                <td className="td-small"><div className="product-image-container"><img src={item.image_url_1} className="cart-image"/></div></td>
                                                                <td className="td-large pr-2 pl-4"><div className="product-name">{item.title}</div></td>
                                                                <td className="td-smallest"><div className="product-price">${item.price}  </div></td>
                                                                <td className="td-medium"><div className="product-quantity">
                                                                    <TiMinus className="ti-minus" onClick={()=>decrement(item.id)}/><div className="count">{item.count}</div><TiPlus className="ti-plus" onClick={()=>increment(item.id)}/></div></td>
                                                                <td className="td-medium"><div className="product-total"> ${item.total} </div></td>
                                                                <td className="td-smallest"><div className="product-remove"><AiFillDelete className="delete-icon" onClick={()=>removeItem(item.id)}/></div></td>
                                                        </tr>
                                                            )
                                                        }
                                                        
                                                    </tbody>
                                                </table>
                                                {
                                                     localStorage.userToken ? <div>
                                                         <div className="mt-4 pl-2 checkout-btn">
                                                            <a href="/checkout">Checkout</a>
                                                        </div>
                                                     </div>:<div className="mt-4 pl-2 checkout-btn">
                                                    <a href="/login">Checkout</a>
                                                     </div>
                                                }
                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-md-4">
                                            <div className="card">
                                                <div className="card-header">ORDER SUMMARY</div>
                                                <div className="cart-summary pb-4 pt-2">
                                                        <div className="cart-subTotal">
                                                            <h5 className="pl-2">SubTotal:</h5>
                                                            <h5 className="pr-2">${cartSubTotal}</h5>
                                                        </div>
                                                        <div className="cart-tax">
                                                            <h5 className="pl-2">Tax:</h5>
                                                            <h5 className="pr-2">${cartTax}</h5>
                                                        </div>
                                                        <div className="cart-total">
                                                            <h5 className="pl-2">Estimated Total:</h5>
                                                            <h5 className="pr-2">${cartTotal} </h5>
                                                        </div>
                                                        {
                                                        localStorage.userToken ? <div>
                                                                <div className="mt-4 pl-2 checkout-btn">
                                                                    <a href="/checkout">Checkout</a>
                                                                </div>
                                                            </div>:<div className="mt-4 pl-2 checkout-btn">
                                                            <a href="/login">Checkout</a>
                                                            </div>
                                                          }
                                                       
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                       </div>

                        }
                       
                    </div>
                )
            }
        }
    </ProductConsumer>
)

export default Cart;