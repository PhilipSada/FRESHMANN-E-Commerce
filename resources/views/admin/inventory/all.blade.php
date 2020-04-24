@extends('layouts.admin')
@section('content')

       <div class="container-fluid  dashboard-content padding-bottom">
           <!-- ============================================================== -->
           <!-- pageheader -->
           <!-- ============================================================== -->
           <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="page-header mb-4">
                       <h4 class="pageheader-title">All Inventory Items</h4>
                       
                   </div>
               </div>
           </div>
           <!-- ============================================================== -->
           <!-- end pageheader -->
           <!-- ============================================================== -->
          
               <div class="row">
                   <!-- ============================================================== -->
                   <!-- basic table -->
                   <!-- ============================================================== -->
                   <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                       <div class="card">
                           <h6 class="card-header">All Inventory Items</h6>
                           <div class="card-body">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th style="width:5%" scope="col">Id</th>
                                           <th style="width:50%" scope="col">Title</th>
                                           <th style="width:10%" scope="col">Updated_at</th>
                                           <th style="width:5%" scope="col">Edit</th>
                                           <th style="width:5%" scope="col">Delete</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                   <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td scope="row" style="width:5%">{{$product->id}}</td>
                                            <td style="width:50%">{{$product->title}}</td>
                                            <td style="width:10%">{{date('m/d/y', strtotime($product->updated_at))}}</td>
                                            <td style="width:5%"><a href="/admin/inventory/{{$product->id}}/edit"><i class="fa fa-edit"></i></a></td>
                                            <td style="width:5%"><a href="/admin/inventory/{{$product->id}}/delete" 
                                            onclick="if(! confirm('Are you sure you want to delete this item?')){return false}"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                               </table>
                               {{ $products->links() }}
                           </div>
                       </div>
                   </div>
                  
               </div>
          
       </div>
      
   

@endsection