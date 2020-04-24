import React from 'react';
import ReactDOM from 'react-dom';
import Products from '../components/ProductPage/Products';
import {ProductProvider} from '../Context';
import NavBar from '../components/NavBar';
import SideBar from '../components/SideBar';
import SideCart from '../components/SideCart';
import Promo from '../components/Promo';
import Footer from '../components/Footer';


const ProductPage = ()=>(
    <div>
        <NavBar/>
        <SideBar/>
        <SideCart/>
        <Promo/>
        <Products/>
        <Footer/>
    </div>
)



if(document.getElementById('products')){
    ReactDOM.render(<ProductProvider> <ProductPage /></ProductProvider>, document.getElementById('products'));
}