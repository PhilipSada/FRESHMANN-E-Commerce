@extends('layouts.admin')
@section('content')


<div class="dashboard-ecommerce">
    <div class="container-fluid ">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header mb-4">
                    <h4 class="pageheader-title">YOUR DASHBOARD </h4>
                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader  -->
        <!-- ============================================================== -->
        <div class="ecommerce-widget">

           
        
            <div class="row pb-4">
                
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card colored-notice">
                        <div class="card-body">
                            <h6 class="text-muted notice-text">Estimated Revenue</h6>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">${{$estimated_revenue}}</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                {{-- <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span> --}}
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card colored-notice">
                        <div class="card-body">
                            <h6 class="text-muted notice-text">Total Customers</h6>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">{{$total_customers}}</h1>
                            </div>
                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                {{-- <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span> --}}
                            </div>
                        </div>
                       
                    </div>
                </div>
              
              
            </div>
         

        

                <div class="col-sm-12 col-12">
                    <div class="card">
                        <h6 class="card-header colored-notice">Recent Orders</h6>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">city</th>
                                            <th class="border-0">state</th>
                                            
                                            <th class="border-0">Date Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($latestOrders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>
                                                {{$order->customer_firstname}}  {{$order->customer_lastname}}
                                            </td>
                                            <td> {{$order->customer_email}}</td>
                                            <td> {{$order->city}}</td>
                                            <td> {{$order->state}}</td>
                                            <td>{{date('m/d/y', strtotime($order->updated_at))}}</td>
                                        </tr>
                                       @endforeach
                                      
                                        <tr>
                                            <td colspan="9"><a href="" class="btn btn-outline-light float-right">View Details</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{ $latestOrders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
            

            
          
        </div>
    </div>
</div>
@endsection