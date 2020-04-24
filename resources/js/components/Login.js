import React from 'react';
import {ProductConsumer} from '../Context';

const Login = ()=>(
    <ProductConsumer>
        {
            value =>{
                const{handleRegisteredEmailChange,handleRegisteredPasswordChange, loginEmail,loginPassword, handleSubmitLogin, 
                    loginError, loginInMessage, isLoggedIn} = value
                return(
                    <div> 
                        
                        <div className="form-container">
                            <form onSubmit={handleSubmitLogin}>
                                <h3 className="pb-3">Checkout as a member</h3>
                                {
                                    isLoggedIn?<div>
                                        <p className="alert alert-success">Login Successful, please <a href="/checkout" className="more-shopping-btn">click here </a>if you're ready to make payment</p>
                                    </div>:null
                                }
                                <p className="login-error">{loginError}</p>
                                <div className="form-group">
                                    <label>Email address</label>
                                    <input type="email" className="form-control" value={loginEmail} onChange={handleRegisteredEmailChange} placeholder="Enter email" />
                                </div>

                                <div className="form-group">
                                    <label>Password</label>
                                    <input type="password" className="form-control" value={loginPassword} onChange={handleRegisteredPasswordChange} placeholder="Enter password" />
                                </div>
                                
                                <button type="submit" className="btn btn-dark btn-block">Log in</button>
                                <p className="forgot-password text-right">
                                    Not Registered <a href="/register" className="link-account">register here?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                )
            }
        }
    </ProductConsumer>
)

export default Login;