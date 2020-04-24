import React, {Component}from 'react';
import {AiOutlineShopping} from 'react-icons/ai';
import {IoIosMenu} from 'react-icons/io';
import {AiOutlineHeart} from 'react-icons/ai';
import {ProductConsumer} from '../Context';


const NavBar = ()=>(
      <ProductConsumer>
          {value => {
              const {handleSideBar, cartItems} = value;

              return(
                <div> 
                    {/* <Promo /> */}
                    <nav className="navBar">
                    
                        <div className="navMenu" onClick={handleSideBar}><IoIosMenu className="ioMenu"/>MENU</div>
                        <div className="navLogo"><a href="/" className="linkLogo">FRESHMANN</a></div>
                        <div className="navIcons">
                            <a href="/cart" className="navCart"><AiOutlineShopping className="aiCart"/> BAG({cartItems}) </a>
                        </div>
                    </nav>
                </div>
              );
          }}
      </ProductConsumer>

)


export default NavBar;