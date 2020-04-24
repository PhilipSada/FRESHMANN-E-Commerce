import React from 'react';
import {TiSocialFacebook} from 'react-icons/ti';
import {TiSocialTwitter} from 'react-icons/ti';
import {TiSocialInstagram} from 'react-icons/ti';
import {ProductConsumer} from '../../Context';

const Hero = ()=>(
    <ProductConsumer>
        {
            value=>{
                const{categories}=value;

                return(
                    <div>
                        <div className='content'>
               
                            <div className="hero">
                                {/* <img src="/images/homepage.png" className="yeezy"/> */}
                                {/* <div className="split-text-left">
                                    <p className="split-title-left">THE FRESH GUY <br /> T-SHIRT COLLECTION</p>
                                    <a className="split-button-left" href="">Shop Now</a>
                                    
                                </div> */}
                            </div>
                            <div className="overlay"></div>
                            <div className="hero-text">
                                <h2>Up to </h2>
                                <h2>30% off</h2>
                                <h2>Everything</h2>
                                <h2>Over $150</h2><br/>
                                {/* {
                                    categories.map(item => <div key={item.id}>
                                         <a href={`/products/${item.id}`} className="hero-shop-now" onClick={()=>setDisplayProducts(item.id)}>{item.title}</a>
                                    </div>)
                                } */}
                                {/* <a href="/products/2" className="hero-shop-now" onClick={()=>setDisplayProducts(2)}>Shop Now</a> */}
                            </div>
                            <div className="hero-side-text">
                                <h2>THE </h2>
                                <h2>FRESH</h2>
                                <h2>MAN</h2>
                                <h2>LOOK</h2>
                            </div>
                            <div className="social-icons">
                                <div><TiSocialFacebook className="social-icons-ti"/></div>
                                <div><TiSocialTwitter className="social-icons-ti"/></div>
                                <div><TiSocialInstagram className="social-icons-ti"/></div>
                            </div>
                       </div>
                    </div>
                )
            }
        }
        
        
    </ProductConsumer>
);


export default Hero;