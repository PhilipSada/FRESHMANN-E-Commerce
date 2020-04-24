import React from 'react';


const Collection = ()=>(
    <div>
        <div className="collection-container">
            <div className="row pb-4">
                <div className="col-md-6">
                    <div className="collection-image-container"><img src="/images/shirts.png" className="collection-image"/></div>
                    <div className="collection-text">
                        <h4>Shirts</h4> 
                        <a href="">Shop Now</a>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="collection-image-container"><img src="/images/polo-shirts.png" className="collection-image"/></div>
                    <div className="collection-text">
                        <h4>Polo Shirts</h4> 
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>
            <div className="row pb-4">
                <div className="col-md-6">
                    <div className="collection-image-container"><img src="/images/tshirts.png" className="collection-image"/></div>
                    <div className="collection-text">
                        <h4>T-Shirts</h4> 
                        <a href="">Shop Now</a>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="collection-image-container"><img src="/images/jeans.png" className="collection-image"/></div>
                    <div className="collection-text">
                        <h4>Jeans</h4> 
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>
           
        </div>
        
    </div>
)

export default Collection;