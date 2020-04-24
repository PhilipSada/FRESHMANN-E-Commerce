import React from 'react';
import ReactDOM from 'react-dom';
import Featured from '../components/Homepage/Featured';
import {ProductProvider} from '../Context';
import NavBar from '../components/NavBar';
import SideBar from '../components/SideBar';
import SideCart from '../components/SideCart';
import Promo from '../components/Promo';
import Footer from '../components/Footer';
import HomeNavBar from '../components/HomeNavBar';
import Hero from '../components/Homepage/Hero';
import Collection from '../components/Homepage/Collection';

const HomePage = ()=>(
    <div> 
        <HomeNavBar/>
        <SideBar/>
        <SideCart/>
        <Hero/>
        {/* <Collection/> */}
        <Featured/>
        <Footer/>
    </div>
)


if(document.getElementById('root')){
    ReactDOM.render(<ProductProvider> <HomePage /></ProductProvider>, document.getElementById('root'));
}