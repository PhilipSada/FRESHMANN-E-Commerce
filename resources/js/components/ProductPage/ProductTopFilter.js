import React from 'react';
import {ProductConsumer} from '../../Context';

const ProductTopFilter = ()=>(
    <ProductConsumer>
        {
            value=>{
                const { filteredProducts,handleColourFilterChange, handleBrandFilterChange, handlePriceFilterChange, colour, 
                    brand, price, minPrice, maxPrice, changeToFirstView, changeToSecondView, buttonOneActive, buttonTwoActive}=value;

                return(
                    <div>
                        <div className="row ml-5 mr-3 mt-4 mb-4 top-filter">
                            <div className="col-md-2">
                            <div className="form-group pb-3 colour-options">
                                        <select className="form-control" onChange={handleColourFilterChange} value={colour}>
                                            <option value="AllColours">All Colours</option>
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
                            <div className="col-md-2">
                                 {
                                     buttonOneActive === "active"?<div className="product-view-active" onClick={()=>changeToSecondView()}>Product</div>:
                                     <div className="product-view" onClick={()=>changeToSecondView()}>Product</div>
                                 }
                                 
                            </div>
                            <div className="col-md-2">
                                {
                                    buttonTwoActive === "active"?<div className="outfit-view-active" onClick={()=>changeToFirstView()}>Outfit</div>:
                                    <div className="outfit-view" onClick={()=>changeToFirstView()}>Outfit</div>
                                }
                                   
                            </div>
                            <div className="col-md-2">
                               <div className="form-group">
                                        <select className="form-control" onChange={handleBrandFilterChange} value={brand}>
                                            <option value="AllBrands">All Brands</option>
                                            <option value="Topman">Topman</option>
                                            <option value="Topman Premium">Topman Premium</option>
                                        </select>
                                </div>
                            </div>
                            <div className="col-md-2">
                                <div className="number-filter">   
                                        <input type='range' name='price' value={price} min={minPrice} max={maxPrice}
                                        className='filter-price' onChange={handlePriceFilterChange} /><span>${price} </span>
                                        {/* <div>${minPrice}</div><div>${maxPrice} </div> */}
                                </div>
                            </div>
                            <div className="col-md-2">
                                <div>{filteredProducts.length} result(s)</div>
                            </div>
                        </div>
                    </div>
                )
            }
        }
    </ProductConsumer>
)

export default ProductTopFilter;