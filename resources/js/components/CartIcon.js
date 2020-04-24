import React from 'react';
import ReactDOM from 'react-dom';
import {ProductConsumer, ProductProvider} from '../Context';
import {AiOutlineShopping} from 'react-icons/ai';

const CartIcon = ()=>(
    <ProductConsumer>
        {value=>{
            const{cartItems}=value

            return(
                <div>
                     <div>
                            <a href="/" className="navCart"><AiOutlineShopping className="aiCart"/>{cartItems}</a>
                    </div>
                </div>
            )
        }}
    </ProductConsumer>
)

if(document.getElementById('cart-icon')){
    ReactDOM.render(<ProductProvider> <CartIcon /></ProductProvider>, document.getElementById('cart-icon'));
}