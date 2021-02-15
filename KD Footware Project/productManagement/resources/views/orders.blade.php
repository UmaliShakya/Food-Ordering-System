<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProductManagement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
                @include('inc.navbar')
                <div class="container">
                <div class="text-center">
                    <br>
            
                    <h1>Orders</h1>
            
                    <div class="row" >
                        <div class="col-mid-row-12" >
            
                            @foreach($errors->all() as $error)
            
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                               
                                @endforeach
                                <br>

            <table class="table table-condensed1">
          
                <tr style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">
                  <th><b>OrderID</b></th>
                  <th><b>Date</b></th>
                  <th><b>CustomerID</b></th>
                  <th><b>ModelID</b></th>
                  <th><b>Qty</b></th>
                  <th><b>Amount</b></th>
                  <th><b>Total</b></th>
                  <th><b>Status</b></th>
                  <th><b>Action</b></th>

                  @foreach($orders as $Orders)
                  <tr>
                      <td>{{$Orders->id}}</td>
                      <td>{{$Orders->ODate}}</td>
                      <td>{{$Orders->CustomerID}}</td>
                      <td>{{$Orders->ModelID}}</td>
                      <td>{{$Orders->Qty}}</td>
                      <td>{{$Orders->Amount}}</td>
                      <td>{{$Orders->Total}}</td>
                      <td>
                        @if($Orders->Status)
                        <a href="#" class="btn btn-success">Completed</a>
                        @else
                        <a href="{{url('Orders/process/'.$Orders->id)}}" class="btn btn-warning">Process</a>
                        @endif
                        </td>
                      
                        <td>
                        @if(!$Orders->Status)    
                        <a href="/markascompleted/{{$Orders->id}}" class="btn btn-primary">Mark As Completed</a>
                        @else
                        <a href="/markasnotcompleted/{{$Orders->id}}" class="btn btn-danger">Mark As Not Completed</a>    
                        @endif
                    </td>
                  </tr>
                  @endforeach
                  </table>

                </tr>
              
            
          </div>





</body>
</html>
