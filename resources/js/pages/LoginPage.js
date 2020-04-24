import React from 'react';
import ReactDOM from 'react-dom';
import {ProductProvider} from '../Context';
import NavBar from '../components/NavBar';
import SideBar from '../components/SideBar';
import SideCart from '../components/SideCart';
import Promo from '../components/Promo';
import Login from '../components/Login';
import Footer from '../components/Footer';


const LoginPage = ()=>(
    <div>
        <NavBar/>
        <SideBar/>
        <Promo/>
        <SideCart/>
        <Login/>
        <Footer/>
    </div>
)

if(document.getElementById('login')){
    ReactDOM.render(<ProductProvider> <LoginPage /></ProductProvider>, document.getElementById('login'));
}
