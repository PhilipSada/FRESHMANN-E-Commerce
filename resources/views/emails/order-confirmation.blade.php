
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FRESHMANN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
        
    </head>
    <body>
       
         {{--  new html email template  --}}
         <div style='margin-top:2rem; margin-bottom:2rem; margin-left:2rem; width:730px;'> 
    
            <div style="text-align:center">
               <h2>FRESHMANN</h2>
            </div>
        
            <h2 style="color:rgba(0, 0, 0, 0.89)">Hello {{$details['firstname']}} {{$details['lastname']}},</h2>
            <p>Your order confirmation details: <span style="color:grey;"> {{$details['orderRef']}}</span></p>
        
            <table cellspacing="5" cellpadding="5" width="720" style="border: 1px solid black;">
                <tr style="background-color:rgba(0, 0, 0, 0.89); color:white">
                    <th style="text-align:left">Product Name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total </th>
               </tr>
                @foreach($cart as $item)
        
                    <tr>
                        <td width="450">{{$item->title}}</td>
                        <td width="100"> ${{$item->price}}</td>
                        <td width="70">{{$item->count}}</td>
                        <td width="100"> ${{$item->total}}</td>
                    </tr>
               @endforeach
        
            </table>
            
            <h4>Subtotal: ${{$details['orderSubTotal']}} </h4>
            <h4>Tax: ${{$details['orderTax']}} </h4>
            <h4>Total amount: ${{$details['orderTotal']}}</h4>
            <br>
             <p> We hope you love your new purchase(s)!</p> <br>
            <h4>Kind regards </h4> <br>
            <h4> FRESHMANN Customer Care </h4>
        </div>

         {{--  end of the new html template  --}}
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="/js/app.js"></script>  
    </body>
</html>