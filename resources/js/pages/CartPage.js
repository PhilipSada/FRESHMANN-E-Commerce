import React from 'react';
import ReactDOM from 'react-dom';
import {ProductProvider} from '../Context';
import NavBar from '../components/NavBar';
import SideBar from '../components/SideBar';
import SideCart from '../components/SideCart';
import Promo from '../components/Promo';
import Cart from '../components/CartPage/Cart';
import Footer from '../components/Footer';

const CartPage = ()=>(
    <div> 
        <NavBar/>
        <SideBar/>
        <Promo/>
        <SideCart/>
        <Cart/>
        <Footer/>
       
    </div>
)


if(document.getElementById('cart')){
    ReactDOM.render(<ProductProvider> <CartPage /></ProductProvider>, document.getElementById('cart'));
}