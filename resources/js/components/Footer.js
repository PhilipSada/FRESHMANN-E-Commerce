import React from 'react';
import {TiSocialFacebook} from 'react-icons/ti';
import {TiSocialTwitter} from 'react-icons/ti';
import {TiSocialInstagram} from 'react-icons/ti';

const Footer = ()=>(
    <div>
        <footer>
            <div className="footer">
                <div className="first-footer">
                    <p className="footer-heading">Get Help</p>
                    <p>Order Status</p>
                    <p>Shipping and Delivery</p>
                    <p>Returns</p>
                    <p>Payment Options</p>
                </div>
                <div>
                    <p className="footer-heading">About Us</p>
                    <p>News</p>
                    <p>Careers</p>
                    <p>Investors</p>
                    <p>Sustainability</p>
                </div>
                <div>
                    <div><TiSocialFacebook className="social-icons-ti"/></div>
                    <div><TiSocialTwitter className="social-icons-ti"/></div>
                    <div><TiSocialInstagram className="social-icons-ti"/></div>
                </div>
            </div>
            <div className='last-footer'><p>&copy;{new Date().getFullYear()} FRESHMANN Inc. All Rights Reserved</p></div>
      </footer>
    </div>
);

export default Footer;