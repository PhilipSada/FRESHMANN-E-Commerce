import React, {Component}from 'react';
import {AiOutlineShopping} from 'react-icons/ai';
import {IoIosMenu} from 'react-icons/io';
import {AiOutlineHeart} from 'react-icons/ai';
import {ProductConsumer} from '../Context';


const HomeNavBar = ()=>(
      <ProductConsumer>
          {value => {
              const {handleSideBar, cartItems} = value;

              return(
                <div> 
                    <nav className="homeNavBar">
                    
                        <div className="homeNavMenu" onClick={handleSideBar}><IoIosMenu className="homeIoMenu"/>MENU</div>
                        <div className="homeNavLogo"><a href="/" className="homeLinkLogo">FRESHMANN</a></div>
                        <div className="homeNavIcons">
                            <a href="/cart" className="homeNavCart"><AiOutlineShopping className="homeAiCart"/><div className="cart-no">{cartItems} </div> </a>
                        </div>
                    </nav>
                </div>
              );
          }}
      </ProductConsumer>

)

export default HomeNavBar;