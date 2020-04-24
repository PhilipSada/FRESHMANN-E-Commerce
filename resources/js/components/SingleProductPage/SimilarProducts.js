import React from 'react';
import {ProductConsumer} from '../../Context';

const SimilarProducts = ()=>(
    <ProductConsumer>
        {
            value=>{
                const{similarProducts, setSingleProduct}=value;

                return(
                    <div>  
                        <h4 className="similar-products-heading pt-4">YOU MAY ALSO LIKE</h4>
                        <div className="similarProducts-grid">

                            {
                                similarProducts.map(similarProduct => <div key={similarProduct.id} className="product-container">
                                    <div className='product-image-container'>
                                    <a href={`/product/${similarProduct.id}`} onClick={() => setSingleProduct(similarProduct.id, similarProduct.category_id)}>
                                      <img src={similarProduct.image_url_1} alt="" className='productImg'/>
                                    </a>
                                    </div>
                                    <div className='product-grid-a'>
                                        <div><p>{similarProduct.title}<br/><span>${similarProduct.price}</span></p></div>
                                    </div>
                                </div>)
                            }
                        </div>
                    </div>
            
                )
            }
        }
    </ProductConsumer>
)

export default SimilarProducts;