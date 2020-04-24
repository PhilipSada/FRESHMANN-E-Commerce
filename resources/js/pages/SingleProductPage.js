import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {ProductProvider} from '../Context';
import SingleProductTop from '../components/SingleProductPage/SingleProductTop';
import NavBar from '../components/NavBar';
import SideBar from '../components/SideBar';
import SideCart from '../components/SideCart';
import Promo from '../components/Promo';
import Footer from '../components/Footer';
import SimilarProducts from '../components/SingleProductPage/SimilarProducts';

const SingleProductPage = ()=>(
    <div>
        
        <div className="singlePageContainer">
            <NavBar/>
            <SideBar/>
            <SideCart/>
            <Promo/>
            <SingleProductTop/>
            <SimilarProducts/>
            <Footer/>
         </div>
    </div>
)


if(document.getElementById('single-product')){
    ReactDOM.render(<ProductProvider> <SingleProductPage  /></ProductProvider>, document.getElementById('single-product'));
}