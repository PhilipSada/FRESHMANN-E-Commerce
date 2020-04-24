import React from 'react';
import {ProductConsumer} from '../../Context';
import ProductTopFilter from './ProductTopFilter';
import ProductSideFilter from './ProductSideFilter';


const Products = ()=>(
    <ProductConsumer>
        {
            value =>{
                const {filteredProducts,setSingleProduct, hover, handleMouseEnter, handleMouseLeave,defaultView} = value;

                return(
                    <div>   
                            <div>
                               <ProductTopFilter/>
                               {
                                 filteredProducts.length===0?<div className='no-result'>
                                    <h4>Sorry, no result matched your search</h4>
                                </div>: 
                                  defaultView==="first-view"?
                                 <div className="display-product-grid">
                                     {  
                                       
                                       filteredProducts.map(product => 
                                         <div key={product.id}>
                                             <div className="display-product-img-container">
                                             <a href={`/product/${product.id}`} onClick={() => setSingleProduct(product.id, product.category_id)} onMouseEnter={()=>handleMouseEnter(product.id)} onMouseLeave={()=>handleMouseLeave()}> {hover === product.id ? <img src={product.image_url_2} className="display-product-image"/>:<img src={product.image_url_1} className="display-product-image"/> }</a>
                                             </div>
                                             <div className="display-product-text">
                                             <div className="product-title"> <a href={`/product/${product.id}`} onClick={() => setSingleProduct(product.id, product.category_id)} className="product-link"><p> {product.title.length > 30? product.title.substring(0, 30) + '...': product.title} </p></a></div>
                                             <div className="product-price">${product.price} </div>
                                             </div>
                                         </div>)   
                                     }
                                      
                                   </div>:
                                   <div className="display-product-grid">
                                     {  
                                       
                                       filteredProducts.map(product => 
                                         <div key={product.id}>
                                             <div className="display-product-img-container">
                                             <a href={`/product/${product.id}`} onClick={() => setSingleProduct(product.id)} onMouseEnter={()=>handleMouseEnter(product.id)} onMouseLeave={()=>handleMouseLeave()}> {hover === product.id ? <img src={product.image_url_1} className="display-product-image"/>:<img src={product.image_url_2} className="display-product-image"/> }</a>
                                             </div>
                                             <div className="display-product-text">
                                             <div className="product-title"> <a href={`/product/${product.id}`} onClick={() => setSingleProduct(product.id)} className="product-link"><p> {product.title.length > 30? product.title.substring(0, 30) + '...': product.title} </p></a></div>
                                             <div className="product-price">${product.price} </div>
                                             </div>
                                         </div>)   
                                     }
                                      
                                  </div>
                               }
                              
                           </div>
                        

                     
                       
                        
                       
                    </div>
                )
            }
        }
    </ProductConsumer>
);

export default Products;