import React from 'react';
import {ProductConsumer} from '../Context';

const ThankYou = ()=>(
    <ProductConsumer>
     {
         value=>{
             const{storeProducts, setSingleProduct}=value;

             return(
                <div>  
                    { localStorage.successMessage ?
                     <div>
                     <h4 className="thank-you-message">Thank You for placing your order(s). An order confirmation email has been sent to you</h4>
                    </div>:
                     <div>
                     <h4 className="thank-you-message">Sorry you haven't placed any order</h4>
                    </div>
                    
                    }
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

                    </div>
                     
             </div>
             )
         }
     }
 </ProductConsumer>
)

export default ThankYou;