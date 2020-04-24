@extends('layouts.admin')
@section('content')

       <div class="container-fluid  dashboard-content">
           <!-- ============================================================== -->
           <!-- pageheader -->
           <!-- ============================================================== -->
           <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="page-header mb-4">
                       <h4 class="pageheader-title">PRODUCT CATEGORIES</h4>  
                   </div>
               </div>
           </div>
           <!-- ============================================================== -->
           <!-- end pageheader -->
           <!-- ============================================================== -->
          
               <div class="row padding-bottom">
                   <!-- ============================================================== -->
                   <!-- basic table -->
                   <!-- ============================================================== -->
                   <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                       <div class="card">
                           <h6 class="card-header">All Product Categories</h6>
                           <div class="card-body">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th scope="col">Id</th>
                                           <th scope="col">Title</th>
                                           <th scope="col">Updated_at</th>
                                           <th scope="col">Edit</th>
                                           <th scope="col">Delete</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                    <tbody>
                                        @foreach($productCategories as $productCategory)
                                        <tr>
                                            <th scope="row">{{$productCategory->id}}</th>
                                            <th>{{$productCategory->title}}</th>
                                            <td>{{date('m/d/y', strtotime($productCategory->updated_at))}}</td>
                                            <td><a href="/admin/categories/{{$productCategory->id}}/edit"><i class="fa fa-edit"></i></a></td>
                                            <td><a href="/admin/categories/{{$productCategory->id}}/delete" 
                                            onclick="if(! confirm('Are you sure you want to delete this category?')){return false}"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                               </table>
                               {{ $productCategories->links() }}
                           </div>
                       </div>
                   </div>
                  
               </div>
          
       </div>
      
   

@endsection