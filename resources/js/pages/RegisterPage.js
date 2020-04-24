import React from 'react';
import ReactDOM from 'react-dom';
import {ProductProvider} from '../Context';
import NavBar from '../components/NavBar';
import SideBar from '../components/SideBar';
import SideCart from '../components/SideCart';
import Promo from '../components/Promo';
import Register from '../components/Register';
import Footer from '../components/Footer';

const RegisterPage = ()=>(
    <div>
        <NavBar/>
        <SideBar/>
        <Promo/>
        <SideCart/>
        <Register/>
        <Footer/>
    </div>
)

if(document.getElementById('register')){
    ReactDOM.render(<ProductProvider> <RegisterPage /></ProductProvider>, document.getElementById('register'));
}