import React from 'react';
import {ProductConsumer} from '../../Context';
import {IoMdHeartEmpty} from 'react-icons/io';

const Featured = ()=>(
 <ProductConsumer>
     {
         value=>{
             const{storeProducts, setSingleProduct, handleMouseEnter, handleMouseLeave, hover}=value;

             return(
                <div>  
                    <div className="featured-container">
                        <div>
                            <h4 className="featured-heading">FEATURED PRODUCTS</h4>
                        </div>
                        <div className="featured-grid">
                        {
                            storeProducts.filter(product => product.featured === "true").map(featureProduct =>  <div key={featureProduct.id} className="product-container">
                            <div className='product-image-container'>
                            <a href={`/product/${featureProduct.id}`} onClick={() => setSingleProduct(featureProduct.id, featureProduct.category_id)} onMouseEnter={()=>handleMouseEnter(featureProduct.id)} onMouseLeave={()=>handleMouseLeave()}>{hover === featureProduct.id?<img src={featureProduct.image_url_2} alt="" className='productImg'/>: <img src={featureProduct.image_url_1} alt="" className='productImg'/>}  </a>
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
);

export default Featured;