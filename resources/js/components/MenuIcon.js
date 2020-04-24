import React from 'react';
import ReactDOM from 'react-dom';
import {IoIosMenu} from 'react-icons/io';



const MenuIcon = ()=>(
    <div>
        <IoIosMenu className="ioMenu"/>MENU
    </div>
)





if(document.getElementById('menu-icon')){
    ReactDOM.render(<MenuIcon />, document.getElementById('menu-icon'));
}