import React from 'react';
import ReactDOM from 'react-dom';
import ThankYou from '../components/ThankYou';
import {ProductProvider} from '../Context';
import NavBar from '../components/NavBar';
import SideBar from '../components/SideBar';
import SideCart from '../components/SideCart';
import Promo from '../components/Promo';
import Footer from '../components/Footer';


const ThankYouPage = ()=>(
    <div>
        <NavBar/>
        <SideBar/>
        <SideCart/>
        <Promo/>
        <ThankYou/>
        <Footer/>
    </div>
)



if(document.getElementById('thank-you')){
    ReactDOM.render(<ProductProvider> <ThankYouPage /></ProductProvider>, document.getElementById('thank-you'));
}