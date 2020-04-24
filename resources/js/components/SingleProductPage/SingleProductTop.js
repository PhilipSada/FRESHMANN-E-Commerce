import React from 'react';
import {ProductConsumer} from '../../Context';




const SingleProductTop = ()=>(

    <ProductConsumer>
        {
            value=>{
                const {singleProduct, addToCart, singlePageHandleMouseLeave, singlePageHandleMouseEnter, singlePageHover} = value;

                return(
                    <div>
                        <div className="product-grid">
                            <div className='productContainer'>
                                <div className="productImageContainer"onMouseEnter={singlePageHandleMouseEnter} onMouseLeave={singlePageHandleMouseLeave}>
                                    {
                                        singlePageHover === false? <img src={singleProduct.image_url_1} className="singleProductImg"/>:
                                        <img src={singleProduct.image_url_2} className="singleProductImg"/>
                                    }
                               
                                </div>
                            </div>
                            <div className='productTextGrid'>
                                
                                <h2> {singleProduct.title} </h2>
                                <p> {singleProduct.description}</p> 
                                <button onClick={()=>addToCart(singleProduct.id)} className="add-to-bag">Add to bag</button>
                            </div>
                      </div>
                  </div>
                )
            }
        }
    </ProductConsumer>

);

export default SingleProductTop;