import React from 'react';
import {ProductConsumer} from '../../Context';

const ProductSideFilter = ()=>(
    <ProductConsumer>
        {
            value=>{
                const {}=value;

                return(
                    <div>
                        <div className="product-side-filter-container">
                            <div className="main-side-filter make-me-sticky">
                                <div className="form-group pt-4">
                                        <label>
                                            <p className='mb-2'>Product price:<span>$100</span></p>
                                        </label>
                                        <input type='range' name='price' id='price' min="$100" max="$200"
                                            className='filter-price form-control'/>
                                </div>
                                <div className="form-group pb-5">
                                   <label>Brands</label>
                                    <select className="form-control">
                                        <option value="all brands">All Brands</option>
                                        <option value="Topman">Topman</option>
                                        <option value="Topman Premium">Topman Premium</option>
                                    </select>
                                </div>
                                <div>
                                </div>
                                <div className="form-group pb-3">
                                        <label>Colour</label>
                                        <select  className="form-control" >
                                            <option value="Khaki">Khaki</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Black">Black</option>
                                            <option value="Multi">Multi</option>
                                            <option value="Grey">Grey</option>
                                            <option value="Stone">Stone</option>
                                            <option value="White">White</option>
                                            <option value="Green">Green</option>
                                            <option value="Lilac">Lilac</option>
                                            <option value="Pink">Pink</option>
                                            <option value="Tan">Tan</option>
                                        </select>           
                                    </div>
                                </div>
                        </div>
                    </div>
                )
            }
        }
    </ProductConsumer>
)

export default ProductSideFilter;