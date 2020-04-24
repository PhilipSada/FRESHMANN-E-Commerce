import React, {Component} from 'react';
import axios from 'axios';

const ProductContext = React.createContext();

class ProductProvider extends Component{
    constructor(props){
        super(props);

        this.state = {
            sideBarOpen:false,
            cartOpen:false,
            storeProducts:[],
            categories:[],
            // displayProducts:[],
            // singleProduct:{},
            featuredProducts:[],
            cartItems:0,
            // cart:[],
            cartTotal:0,
            cartSubTotal:0,
            cartTax:0,
            newUser:{},
            isLoggedIn:false,
            email:'',
            password:'',
            firstname:'',
            lastname:'',
            loginEmail:'',
            loginPassword:'',
            regPasswordError:'',
            regFirstNameError:'',
            regLastNameError:'',
            regEmailError:'',
            success:'',
            authUser:{},
            singleProduct:this.getStorageProduct(),
            displayProducts:this.getDisplayProducts(),
            filteredProducts:this.getDisplayProducts(),
            cart:this.getStorageCart(),
            hover:false,
            defaultView:"first-view",
            colour:"AllColours",
            brand:"AllBrands",
            price:0,
            maxPrice:0,
            minPrice:0,
            buttonOneActive:"not-active",
            buttonTwoActive:"active",
            similarProducts:this.getSimilarProducts(),
            singlePageHover:false,
            loginError:'',
            logInMessage:'',
            regSuccessMessage:'',
            sidebarClass: 'sideBar-opened'
           
        
        }

        this.setSingleProduct= this.setSingleProduct.bind(this);
        this.setDisplayProducts = this.setDisplayProducts.bind(this);
        this.addToCart = this.addToCart.bind(this);
        this.closeCart = this.closeCart.bind(this);
        this.removeItem = this.removeItem.bind(this);
        this.decrement = this.decrement.bind(this);
        this.increment = this.increment.bind(this);
        this.handleSideBar = this.handleSideBar.bind(this);
        this.handleSideCart = this.handleSideCart.bind(this);
        this.handleSubmitRegistration = this.handleSubmitRegistration.bind(this);
        this.handleSubmitLogin = this.handleSubmitLogin.bind(this);
        this.handleEmailChange= this.handleEmailChange.bind(this);
        this.handleFirstNameChange = this.handleFirstNameChange.bind(this);
        this.handleLastNameChange = this.handleLastNameChange.bind(this);
        this.handlePasswordChange = this.handlePasswordChange.bind(this);
        this.handleRegisteredEmailChange=this.handleRegisteredEmailChange.bind(this);
        this.handleRegisteredPasswordChange=this.handleRegisteredPasswordChange.bind(this);
        this.logOut = this.logOut.bind(this);
        this.handleToken = this.handleToken.bind(this);
        this.handleMouseEnter= this.handleMouseEnter.bind(this);
        this.handleMouseLeave=this.handleMouseLeave.bind(this);
        this.handleColourFilterChange = this.handleColourFilterChange.bind(this);
        this.handleBrandFilterChange = this.handleBrandFilterChange.bind(this);
        this.handlePriceFilterChange = this.handlePriceFilterChange.bind(this);
        this.changeToFirstView = this.changeToFirstView.bind(this);
        this.changeToSecondView = this.changeToSecondView.bind(this);
        this.singlePageHandleMouseLeave = this.singlePageHandleMouseLeave.bind(this);
        this.singlePageHandleMouseEnter = this.singlePageHandleMouseEnter.bind(this);
        this.closeHandler= this.closeHandler.bind(this);
    }
    //change view
    changeToSecondView(){
        this.setState({
            defaultView:"second-view",
            buttonOneActive:"active",
            buttonTwoActive:"not-active"
        })
    }
    changeToFirstView(){
        this.setState({
            defaultView:"first-view",
            buttonOneActive:"not-active",
            buttonTwoActive:"active"
        })
    }
    //change hover state
    handleMouseEnter(id){
        this.setState({hover: id})
    }
    handleMouseLeave(id){
        this.setState({hover:false})
    }
    singlePageHandleMouseEnter(){
        this.setState({
            singlePageHover:true
        })
    }
    singlePageHandleMouseLeave(){
        this.setState({
            singlePageHover:false
        })
    }
    //handle stripe payment token
    handleToken(token, addresses){
        console.log({token, addresses});
    }
    
    //register user
    handleSubmitRegistration(e){
        e.preventDefault();
        const userDetails = {
            firstname:this.state.firstname,
            lastname:this.state.lastname,
            email:this.state.email,
            password:this.state.password,
        }
        axios.post('api/register', userDetails).then(response=>{
            if(response.data.errors){
                if(response.data.errors.password){
                    this.setState({
                        regPasswordError:response.data.errors.password,
                        password:''
                    });
                }else{
                    this.setState({
                        regPasswordError:''
                    });
                }
                if(response.data.errors.email){
                    this.setState({
                        regEmailError:response.data.errors.email,
                        email:''
                    });
                }else{
                    this.setState({
                        regEmailError:''
                    });
                }
                if(response.data.errors.firstname){
                    this.setState({
                        regFirstNameError:response.data.errors.firstname,
                        firstname:''
                      
                    });
                }else{
                    this.setState({
                        regFirstNameError:''
                       
                      
                    });
                }
                if(response.data.errors.lastname){
                    this.setState({
                        regLastNameError:response.data.errors.lastname,
                        lastname:''
                    });
                }else{
                    this.setState({
                        regLastNameError:''
                        
                    });
                }

            }else{
                this.setState({
                    regSuccessMessage:response.data.success,
                    regLastNameError:'',
                    regFirstNameError:'',
                    regEmailError:'',
                    regPasswordError:'',
                    password:'',
                    email:'',
                    firstname:'',
                    lastname:''

                })
            }
           
           
        

            
        })
    
    }
    //submit login form

    handleSubmitLogin(e){
        e.preventDefault();
        const registeredUser = {email:this.state.loginEmail, password:this.state.loginPassword}
        axios.post('api/login', registeredUser).then(response=>{
         
            
            if(response.data){
                if(response.data.login_error){
                    this.setState({
                        loginError:response.data.login_error,
                        loginPassword:'',
                        loginEmail:''
                    });
                }else{
                    this.setState({
                        loginError:''
                    });
                }
                if(response.data.success==="Login Successful"){
                    this.setState({
                        isLoggedIn:true,
                        logInMessage:response.data.success,
                        loginPassword:'',
                        loginEmail:'',
                        loginError:''


                    })
                    localStorage.setItem('userToken', response.data.token)
                    localStorage.setItem('userDetails', JSON.stringify(response.data.user))
                }
            }

        });
     }
     
     //set LoggedIn User
     setLoggedInUser(){
        localStorage.setItem('loggedInUser', JSON.stringify(this.state.loggedInUser))
     }
  
    //logout a user
    logOut(e){
        e.preventDefault();
        this.setState({
            sidebarClass:'sideBar-closed',
                
        })
        setTimeout(()=>{
            this.closeSidebar();
            localStorage.removeItem('userToken');
            localStorage.removeItem('userDetails');
            //gotten from successful payment
            localStorage.removeItem('successMessage');
            
        }, 3000)


        localStorage.removeItem('userToken');
        localStorage.removeItem('userDetails');
        //gotten from successful payment
        localStorage.removeItem('successMessage');
        // let sideBarOpen = this.state.sideBarOpen;
        // if(sideBarOpen){
        //     this.setState({
        //         sideBarOpen:false
        //     })
        // } else{
        //     this.setState({
        //         sideBarOpen:true,
        //     })
        // }
       
      
    }
    
    //handle firstname change
    handleFirstNameChange(e) {
        this.setState({
            firstname:e.target.value
        });
     }
    //handle lastname change
    handleLastNameChange(e) {
        this.setState({
            lastname:e.target.value
        });
    }
    //handle email change
    handleEmailChange(e) {
        this.setState({
            email:e.target.value
        });
    }
    //handle password change
    handlePasswordChange(e) {
        this.setState({
            password:e.target.value
        });
    }
 
    //handle registered user email change
    handleRegisteredEmailChange(e) {
        this.setState({
            loginEmail:e.target.value
        });
    }
    //handle registered user password change
    handleRegisteredPasswordChange(e) {
        this.setState({
            loginPassword:e.target.value
        });
    }

    //handle sidebar

    handleSideBar(){
        let sideBarOpen = this.state.sideBarOpen;
        if(sideBarOpen){
            this.setState({
                sideBarOpen:false,
                sidebarClass:"sideBar-opened"
            })
        } else{
            this.setState({
                sideBarOpen:true,
                sidebarClass:"sideBar-opened"
            })
        }
        
    }
    closeHandler(e){
        e.preventDefault()
        this.setState({
            sidebarClass:'sideBar-closed',
                
        })
        setTimeout(()=>{
            this.closeSidebar()
        }, 3000)

       
    }
    closeSidebar(){
        let sideBarOpen = this.state.sideBarOpen;
        if(sideBarOpen){
            this.setState({
                sideBarOpen:false,
             
            })
        } else{
            this.setState({
                sideBarOpen:true
            })
        }
        
    }
   //handle SideCart
      handleSideCart(){
        this.setState({
            sideBarOpen:!sideBarOpen
        })
    }
   
    getStoreProducts(){
        axios.all([axios.get('/api/getStoreProducts'), axios.get('/api/category')]).then(axios.spread((productResponse, categoryResponse)=>{
            this.setState(()=>{
                return(
                    {   
                        storeProducts:[...productResponse.data.storeProducts],
                        categories:[...categoryResponse.data.category],
                     
                    }
                  
                )
            }, ()=>{
                this.addTotals();
                this.getMaxPrice();
                
            })
           
        }));
    }
    //get similar products from the local storage
    getSimilarProducts(){
        return localStorage.getItem('similarProducts')? JSON.parse(localStorage.getItem('similarProducts')):[];
    }
    // get single product from local storage
    getStorageProduct(){
        return localStorage.getItem('singleProduct')? JSON.parse(localStorage.getItem('singleProduct')):{};
    }
    //get cart from storage
    getStorageCart(){
        return localStorage.getItem('cart')? JSON.parse(localStorage.getItem('cart')):[];
    }
    //get selected products from local storage
    getDisplayProducts(){
        return localStorage.getItem('displayProducts')? JSON.parse(localStorage.getItem('displayProducts')):[];
    }
    
    //getTotals
    getTotals(){
        let subTotal = 0;
        let cartItems = 0;


        this.state.cart.forEach(item=>{
            subTotal+=item.total;
            cartItems+=item.count;
        });

       
     
        // subTotal=parseFloat(subTotal).toFixed(2);
        subTotal = subTotal.toFixed(2);
        subTotal= parseFloat(subTotal);
       
        let tax= subTotal * 0.2;
        // tax=parseFloat(tax).toFixed(2);
        tax=parseFloat(tax.toFixed(2));
      
        
        //the plus sign infront of subTotal and Tax is to ensure the value passed is a number as this could be an issue when using parseFloat
   
        let total = subTotal + tax;
        // total=parseFloat(total).toFixed(2);
        total=parseFloat(total.toFixed(2));
      
    

        return{
            cartItems,
            total,
            subTotal,
            tax
        }
    }
    //addTotals
    addTotals(){
        const totals = this.getTotals();
        this.setState({
            cartItems:totals.cartItems,
            cartSubTotal:totals.subTotal,
            cartTotal:totals.total,
            cartTax:totals.tax
        });
        //set CartTotal, cartSubTotal, cartTax and CartItems to be used for stripe payment
        localStorage.setItem('cartTotal', JSON.stringify(totals.total));
        localStorage.setItem('cartSubTotal', JSON.stringify(totals.subTotal));
        localStorage.setItem('cartTax', JSON.stringify(totals.tax));
        localStorage.setItem('cartItems', JSON.stringify(totals.cartItems));
    }
    //sync storage (stores cart items in the browser)
    syncStorage(){
       localStorage.setItem('cart', JSON.stringify(this.state.cart));
     
    }
    setSingleProduct(id, category_id){
        let product = this.state.storeProducts.find(item => item.id === id);
        let similarProducts = this.state.storeProducts.filter(item => item.id !== id && item.category_id === category_id);
        // to store in the product in the local storage
        localStorage.setItem('singleProduct', JSON.stringify(product));
        localStorage.setItem('similarProducts', JSON.stringify(similarProducts));

        this.setState({
            singleProduct:{...product},
            similarProducts:[...similarProducts]
        });
    }
    setDisplayProducts(id){
        let products = this.state.storeProducts.filter(item =>item.category_id === id);
        
        localStorage.setItem('displayProducts', JSON.stringify(products))
        this.setState({
            displayProducts:[...products]
        }, 
        this.handleSideBar());
    }
 
  
    addToCart(id){
        let tempCart = [...this.state.cart];
        let tempProducts = [...this.state.storeProducts];
        let tempItem = tempCart.find(item => item.id === id);

        if(!tempItem){
            tempItem = tempProducts.find(item => item.id === id);
            let total = tempItem.price;
            // total = parseFloat(total).toFixed(2);
            let cartItem = {...tempItem, count:1, total};
            tempCart = [...tempCart, cartItem ];
        }
        else{
            if(tempItem.count <= tempItem.quantity){
                tempItem.count++;
            }
            tempItem.total = tempItem.price * tempItem.count;
            // tempItem.total= parseFloat(tempItem.total).toFixed(2);
            tempItem.total= parseFloat(tempItem.total.toFixed(2));
        }

        this.setState(()=>{
            return(
                {cart:tempCart}
            )
        }, ()=>{
            this.openCart();
            this.addTotals();
            this.syncStorage();
          
        
        })
    }
    //open the cart
    openCart(){
        this.setState({cartOpen:true});
    }
    //close the cart
      closeCart(){
        this.setState({cartOpen:false})
    }
   
    removeItem(id){
        let tempCart = [...this.state.cart];
        tempCart = tempCart.filter(item=>item.id!==id);

        this.setState(()=>{
            return(
                {cart:[...tempCart]}
            )
        }, ()=>{
            this.addTotals();
            this.syncStorage();
        });
    }
    //increment
    increment(id){
        let tempCart = [...this.state.cart];
        const cartItem = tempCart.find(item=>item.id===id);

        if(cartItem.count <= cartItem.quantity){
            cartItem.count++;
        }
        
        cartItem.total=cartItem.count*cartItem.price;
        cartItem.total= parseFloat(cartItem.total.toFixed(2));
 
        this.setState(()=>{
            return (
                {cart:[...tempCart]}
            )
                  
        },()=>{
         this.addTotals()
         this.syncStorage()
     });
    }
     //decrement
     decrement(id){
        let tempCart = [...this.state.cart];
        const cartItem = tempCart.find(item=>item.id===id);

        cartItem.count=cartItem.count-1;

        if(cartItem.count===0){
            this.removeItem(id);
        } else{
            cartItem.total=cartItem.count*cartItem.price;
            cartItem.total= parseFloat(cartItem.total.toFixed(2));


            this.setState(()=>{
                return (
                    {cart:[...tempCart]}
                )
              },()=>{
                this.addTotals()
                this.syncStorage()
         })
        }
    }
    
    //product filtering logic
    getMaxPrice(){
        let displayProducts=[...this.state.displayProducts];
        let maxPrice= Math.max(...displayProducts.map(item=>item.price));

        this.setState({
            price:maxPrice + 1,
            maxPrice:maxPrice + 1
        });
    }
    handleColourFilterChange(e){
        this.setState({
            colour:e.target.value
        }, ()=>{
            this.sortData()
        })
    }
    handleBrandFilterChange(e){
        this.setState({
            brand:e.target.value
        }, ()=>{
            this.sortData()
        })
    }
    handlePriceFilterChange(e){
        this.setState({
            price:e.target.value
        }, ()=>{
            this.sortData()
        })
    }
    sortData(){
        const{displayProducts, colour, brand, price}=this.state

        let tempProducts = [...displayProducts];
        let tempPrice=parseInt(price);

        tempProducts=tempProducts.filter(item=>item.price<=tempPrice);

        if(colour !== "AllColours"){
            tempProducts= tempProducts.filter(item=>item.colour===colour)
        }
        if(brand !== "AllBrands"){
            tempProducts= tempProducts.filter(item=>item.brand===brand)
        }

        this.setState({
            filteredProducts:tempProducts
        });
        

    }
    componentDidMount(){
        this.getStoreProducts();
    }

    render(){
        return(
            <ProductContext.Provider value={{
                ...this.state,
                handleSideBar:this.handleSideBar,
                handleSideCart:this.handleSideCart,
                getStoreProducts:this.getStoreProducts,
                setSingleProduct:this.setSingleProduct,
                setDisplayProducts:this.setDisplayProducts,
                addToCart: this.addToCart,
                closeCart:this.closeCart,
                removeItem:this.removeItem,
                increment:this.increment,
                decrement:this.decrement,
                handleEmailChange: this.handleEmailChange,
                handleFirstNameChange:this.handleFirstNameChange,
                handleLastNameChange:this.handleLastNameChange,
                handlePasswordChange:this.handlePasswordChange,
                handleRegisteredEmailChange:this.handleRegisteredEmailChange,
                handleRegisteredPasswordChange:this.handleRegisteredPasswordChange,
                handleSubmitRegistration:this.handleSubmitRegistration,
                handleSubmitLogin:this.handleSubmitLogin,
                logOut:this.logOut,
                handleToken:this.handleToken,
                handleMouseEnter:this.handleMouseEnter,
                handleMouseLeave:this.handleMouseLeave,
                handleColourFilterChange:this.handleColourFilterChange,
                handleBrandFilterChange:this.handleBrandFilterChange,
                handlePriceFilterChange:this.handlePriceFilterChange,
                changeToFirstView:this.changeToFirstView,
                changeToSecondView:this.changeToSecondView,
                singlePageHandleMouseLeave:this.singlePageHandleMouseLeave,
                singlePageHandleMouseEnter:this.singlePageHandleMouseEnter,
                closeHandler:this.closeHandler
            }}> 
              {this.props.children}
            </ProductContext.Provider>
        )
    }
}

const ProductConsumer = ProductContext.Consumer;
export {ProductProvider, ProductConsumer}