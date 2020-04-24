@extends('layouts.admin')
@section('content')

       <div class="container-fluid  dashboard-content">
              <div class="container-fluid  dashboard-content">
                     <!-- ============================================================== -->
                     <!-- pageheader -->
                     <!-- ============================================================== -->
                     <div class="row">
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="page-header mb-4">
                                 <h4 class="pageheader-title">Edit Inventory Item </h4>
                               
                                
                             </div>
                         </div>
                     </div>
                     <!-- ============================================================== -->
                     <!-- end pageheader -->
                     <!-- ============================================================== -->
              
                         <div class="row">
                             <div class="col-md-8">
                                 <div class="card">
                                     <h6 class="card-header">Edit a new inventory item</h6>
                                     <div class="card-body admin-form">
                                        <form method="POST" action="/admin/inventory/{{$product->id}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputTitle">Title</label>
                                                        <input id="inputTitle" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{ old('title', $product->title) }}" 
                                                        required autocomplete="name" placeholder="Title" autofocus >
        
                                                               @error('title')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputImageOne">Image 1</label>
                                                        <input id="inputImageOne" type="text" class="form-control form-control-lg @error('image_url_1') is-invalid @enderror" name="image_url_1" value="{{ old('image_url_1', $product->image_url_1) }}" 
                                                        required autocomplete="name" placeholder="image url one" autofocus >
        
                                                               @error('image_url_1')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror
                                                    </div>
                                                </div>
                                            </div>
                                  
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputImageTwo">Image 2</label>
                                                        <input id="inputImageTwo" type="text" class="form-control form-control-lg @error('image_url_2') is-invalid @enderror" name="image_url_2" value="{{ old('image_url_2', $product->image_url_2) }}" 
                                                        required autocomplete="name" placeholder="image url two" autofocus >
        
                                                               @error('image_url_2')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputPrice">Price</label>
                                                        <input id="inputPrice" type="text" class="form-control form-control-lg @error('price') is-invalid @enderror" name="price" value="{{ old('price', $product->price) }}" 
                                                        required autocomplete="name" placeholder="Price" autofocus >
        
                                                               @error('price')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputQuantity">Quantity</label>
                                                        <input id="inputQuantity" type="text" class="form-control form-control-lg @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity', $product->quantity) }}" 
                                                        required autocomplete="name" placeholder="Quantity" autofocus >
        
                                                               @error('quantity')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputFitOne">fit 1</label>
                                                        <select  class="form-control form-control-lg @error('time') is-invalid @enderror" id="inputFitOne" name="fit_1">
                                                          <option value="Regular Fit" class="selected">Regular Fit</option>
                                                          <option value="Slim Fit">Slim Fit</option>
                                                        </select>
                                                        @error('fit_1')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputFitTwo">fit 2</label>
                                                        <select  class="form-control form-control-lg @error('time') is-invalid @enderror" id="inputFitTwo" name="fit_2">
                                                          <option value="Regular Fit">Regular Fit</option>
                                                          <option value="Slim Fit">Slim Fit</option>
                                                        </select>
                                                        @error('fit_2')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputSizeOne">size 1</label>
                                                        <select  class="form-control form-control-lg @error('size_1') is-invalid @enderror" id="inputSizeOne" name="size_1">
                                                          <option value="S">S</option>
                                                          <option value="M">M</option>
                                                          <option value="L">L</option>
                                                          <option value="XL">XL</option>
                                                          <option value="34">34</option>
                                                          <option value="36">36</option>
                                                          <option value="38">38</option>
                                                          <option value="40">40</option>
                                                        </select>
                                                        @error('size_1')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputSizeTwo">size 2</label>
                                                        <select  class="form-control form-control-lg @error('size_2') is-invalid @enderror" id="inputSizeTwo" name="size_2">
                                                          <option value="S">S</option>
                                                          <option value="M">M</option>
                                                          <option value="L">L</option>
                                                          <option value="XL">XL</option>
                                                          <option value="34">34</option>
                                                          <option value="36">36</option>
                                                          <option value="38">38</option>
                                                          <option value="40">40</option>
                                                        </select>
                                                        @error('size_2')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputSizeThree">size 3</label>
                                                        <select  class="form-control form-control-lg @error('size_3') is-invalid @enderror" id="inputSizeThree" name="size_3">
                                                          <option value="S">S</option>
                                                          <option value="M">M</option>
                                                          <option value="L">L</option>
                                                          <option value="XL">XL</option>
                                                          <option value="34">34</option>
                                                          <option value="36">36</option>
                                                          <option value="38">38</option>
                                                          <option value="40">40</option>
                                                        </select>
                                                        @error('size_3')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputSizeFour">size 4</label>
                                                        <select  class="form-control form-control-lg @error('size_4') is-invalid @enderror" id="inputSizeFour" name="size_4">
                                                          <option value="S">S</option>
                                                          <option value="M">M</option>
                                                          <option value="L">L</option>
                                                          <option value="XL">XL</option>
                                                          <option value="34">34</option>
                                                          <option value="36">36</option>
                                                          <option value="38">38</option>
                                                          <option value="40">40</option>
                                                        </select>
                                                        @error('size_4')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputBrand">Brand</label>
                                                        <select  class="form-control form-control-lg @error('brand') is-invalid @enderror" id="inputBrand" name="brand">
                                                          <option value="Topman Premium">Topman Premium</option>
                                                          <option value="Topman">Topman</option>
                                                        </select>
                                                        @error('brand')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputColour">Colour</label>
                                                        <select  class="form-control form-control-lg @error('colour') is-invalid @enderror" id="inputColour" name="colour">
                                                          <option value="Khaki">Khaki</option>
                                                          <option value="Blue">Blue</option>
                                                          <option value="Black">Black</option>
                                                          <option value="Multi">Multi</option>
                                                          <option value="Grey">Grey</option>
                                                          <option value="Stone">Stone</option>
                                                          <option value="White">White</option>
                                                          <option value="Green">Green</option>
                                                          <option value="Lilac">Lilac</option>
                                                          <option value="Pink">Pink</option>
                                                        </select>
                                                        @error('colour')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputFeatured">Featured</label>
                                                        <select  class="form-control form-control-lg @error('featured') is-invalid @enderror" id="inputFeatured" name="featured">
                                                          <option value="false">False</option>
                                                          <option value="true">True</option>
                                                        </select>
                                                        @error('featured')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputProductCategory">Product Category</label>
                                                      
                                                        <select name="category_id" class="form-control" id="inputProductCategory">
                                                            @foreach($productCategories as $productCategory)
                                                            <option value="{{$productCategory->id}}">{{$productCategory->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputProductDescription">Product Description </label>
                                                <textarea name="description" row="10" cols="50" class="form-control"></textarea>
                                            </div>
                                           
                                    

                                            <div class="row">
                                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                    
                                                </div>
                                                <div class="col-sm-6 pl-0">
                                                    <p class="text-right">
                                                        <button type="submit" class="btn btn-space btn-primary">Edit</button> 
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                     </div>
                                 </div>
                                </div> 
                 </div>
       </div>
      
   

@endsection