@extends('layouts.admin')
@section('content')

       <div class="container-fluid  dashboard-content padding-bottom-extra">
              <div class="container-fluid  dashboard-content">
                     <!-- ============================================================== -->
                     <!-- pageheader -->
                     <!-- ============================================================== -->
                     <div class="row">
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="page-header mb-4">
                                 <h4 class="pageheader-title">Create a New Product Category </h4>
                             </div>
                         </div>
                     </div>
                     <!-- ============================================================== -->
                     <!-- end pageheader -->
                     <!-- ============================================================== -->
              
                         <div class="row ">
                             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                 <div class="card">
                                     <h6 class="card-header">Create a new category</h6>
                                     <div class="card-body admin-form">
                                        <form method="POST" action="/admin/category/store">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputTitle">Title</label>
                                                <input id="inputTitle" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" 
                                                required autocomplete="name" placeholder="Title" autofocus >

                                                       @error('title')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                            </div>
                                          
                                            <div class="row">
                                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                    
                                                </div>
                                                <div class="col-sm-6 pl-0">
                                                    <p class="text-right">
                                                        <button type="submit" class="btn btn-space btn-dark">Create</button> 
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