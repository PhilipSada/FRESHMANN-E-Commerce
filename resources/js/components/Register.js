import React from 'react';
import {ProductConsumer} from '../Context';

const Register = ()=>(
    <ProductConsumer>
        {
            value =>{
                const{firstname, lastname, email, password, handleFirstNameChange,handleLastNameChange,handlePasswordChange,
                    handleEmailChange, handleSubmitRegistration,  regPasswordError, regFirstNameError, regLastNameError,  regEmailError, regSuccessMessage} = value;
                return(
                    <div> 
                        <div className="form-container">
                           <form onSubmit={handleSubmitRegistration}>
                                <h3 className="pb-3">Create an account</h3>
                                {
                                    regSuccessMessage? <p className="reg-success-message alert alert-success">{regSuccessMessage}</p>:null
                                }
                                
                                <div className="form-group">
                                    <label>First Name</label><p>{regFirstNameError} </p>
                                    <input type="text" className="form-control" name="firstname" value={firstname} onChange={handleFirstNameChange} placeholder="John" />
                                </div>
                                <div className="form-group">
                                    <label>Last Name</label><p>{regLastNameError} </p>
                                    <input type="text" className="form-control" name="lastname" value={lastname} onChange={handleLastNameChange} placeholder="Doe" />
                                </div>

                                <div className="form-group">
                                    <label>Email address</label><p>{regEmailError} </p>
                                    <input type="email" className="form-control" name="email" value={email} onChange={handleEmailChange} placeholder="johndoe@yahoo.com" />
                                </div>

                                <div className="form-group">
                                    <label>Password</label><p>{regPasswordError} </p>
                                    <input type="password" className="form-control" name="password" value={password} onChange={handlePasswordChange} placeholder="password" />
                                </div>
                                <button type="submit" className="btn btn-dark btn-block">Register</button>
                                <p className="forgot-password text-right">
                                    Already registered <a href="/login" className="link-account">log in?</a>
                                </p>
                           </form>
                        </div>
                    </div>
                )
            }
        }
    </ProductConsumer>
);

export default Register;