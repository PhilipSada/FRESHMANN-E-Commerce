import React from 'react';
import {AiOutlineClose} from 'react-icons/ai';
import {ProductConsumer} from '../Context';



const SideBar = ()=>(
    <ProductConsumer>
        {value => {
            const {handleSideBar, sideBarOpen, categories, setDisplayProducts, logOut, closeHandler, sidebarClass} = value;
            
            // let sidebarClass = 'sideBar';
            // if(sideBarOpen){
            //     sidebarClass ='sideBar open';
            // }
        

            return(
                <div>
        {
         sideBarOpen ? 
                <div className={sidebarClass}>
                <div className="sideBar-close">
                    <AiOutlineClose className="react-icons-ai-outline" onClick={closeHandler} />
                </div>
                  
                    {
                        localStorage.userToken ?
                        <ul>
                        {categories.map(category => <li key={category.id}><a href={`/products/${category.id}`} className="react-links" onClick={()=>setDisplayProducts(category.id)}>
                            {category.title}</a></li>)}<br/><br/>
                       
            
                        <li className="react-links" onClick={logOut}>Logout</li>
                        
                        </ul>:
                        <ul>
                        {categories.map(category => <li key={category.id}><a href={`/products/${category.id}`} className="react-links" onClick={()=>setDisplayProducts(category.id)}>
                            {category.title}</a></li>)}<br/><br/>
                      

                        <li><a href="/login" className="react-links" onClick={handleSideBar}>LOGIN</a></li>
                        <li><a href="/register" className="react-links" onClick={handleSideBar}>REGISTER</a></li>
                     </ul>
                    }
                  
                
                </div>:
                null
         }
                
            </div>

            );
        }}
    </ProductConsumer>
)


export default SideBar;

