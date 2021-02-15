<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <h1>Processing Models</h1>

        <div class="row" >
            <div class="col-mid-row-12" >

                    @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                   

                @endforeach

                <br>

                <div class="container-fluid">
                        <div class="row content">
                               
                            <form class="form-inline" action="/processModel">
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="ModelID">ModelID:</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id" value="{{$productModel->id}}" >
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="Qty">No_of_Items:</label>
                                  <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Qty"  value="{{App\Orders::getOrderQtyFromProductModelID($productModel->id)}}">
                                  </div>
                                </div>                        
                            
                            </form>
                        </div>
                        <br>

                            <div class="col-sm-15">
                                <table class="table table-striped">

                                    <h3 style="text-align: left; font-family:cursive">Raw materials</h3>
                                                  
                                    <thead style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">
                                        <th>MaterialName</th>
                                        <th>Required_Qty</th>
                                        <th>Available_Qty</th>
                                        <th>Status</th>
                                    </thead>
                                   
                                    <tbody>
                                        
                                        <tr>
                                            <th>{{$productModel->Material1}}</th>
                                            <th>{{App\Orders::getOrderQtyFromProductModelID($productModel->id)* $productModel->Mate1Qty}}</th>
                                            <th>{{App\productModel::getRawMaterialQty($productModel->Material1)}}</th>
                                            <th>
                                                @if(App\Orders::getOrderQtyFromProductModelID($productModel->id)* $productModel->Mate2Qty > App\productModel::getRawMaterialQty($productModel->Material1))
                                                    <a href="{{url('/supplierOrder')}}" class="btn btn-danger">Order</a>
                                                @else
                                                    <button class="btn">Order</button>
                                                @endif

                                            </th>
                                        </tr>

                                        <tr>
                                            <th>{{$productModel->Material2}}</th>
                                            <th>{{App\Orders::getOrderQtyFromProductModelID($productModel->id)* $productModel->Mate2Qty}}</th>
                                            <th>{{App\productModel::getRawMaterialQty($productModel->Material2)}}</th>
                                            <th>
                                                @if(App\Orders::getOrderQtyFromProductModelID($productModel->id)* $productModel->Mate2Qty > App\productModel::getRawMaterialQty($productModel->Material2))
                                                    <a href="{{url('/supplierOrder')}}" class="btn btn-danger">Order</a>
                                                @else
                                                    <button class="btn">Order</button>
                                                @endif
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>{{$productModel->Material3}}</th>
                                            <th>{{App\Orders::getOrderQtyFromProductModelID($productModel->id)* $productModel->Mate3Qty}}</th>
                                            <th>{{App\productModel::getRawMaterialQty($productModel->Material3)}}</th>
                                            <th>
                                                @if(App\Orders::getOrderQtyFromProductModelID($productModel->id)* $productModel->Mate2Qty> App\productModel::getRawMaterialQty($productModel->Material3))
                                                    <a href="{{url('/supplierOrder')}}" class="btn btn-danger">Order</a>
                                                @else
                                                    <button class="btn">Order</button>
                                                @endif
                                            </th>
                                        </tr>
                                        
                                        <tr>
                                            <th>{{$productModel->Material4}}</th>
                                            <th>{{App\Orders::getOrderQtyFromProductModelID($productModel->id)* $productModel->Mate4Qty}}</th>
                                            <th>{{App\productModel::getRawMaterialQty($productModel->Material4)}}</th>
                                            <th>
                                                @if(App\Orders::getOrderQtyFromProductModelID($productModel->id)* $productModel->Mate2Qty> App\productModel::getRawMaterialQty($productModel->Material4))
                                                    <a href="{{url('/supplierOrder')}}" class="btn btn-danger">Order</a>
                                                @else
                                                    <button class="btn">Order</button>
                                                @endif
                                            </th>
                                        </tr>


                                    </tbody>
                                    
                                    </table>
                
                          </div>

                          <div class="col-sm-15">
                                <table class="table table-striped">
                                        
                                    <h3 style="text-align: left; font-family:cursive">Machines</h3>
                                                    
                                        
                                            
                                                    <thead  style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">
                                                      <tr>
                                                        <th>MachinesName</th>
                                                        <th>Required_Time</th>
                                                        <th>Schedule</th>
                                                      </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th>{{$productModel->Machine1}}</th>
                                                            <th>{{$productModel->Machi1Time}}</th>
                                                            <th><input type="text" class="form-control"></th>
                                                        </tr>
                
                                                        <tr>
                                                            <th>{{$productModel->Machine2}}</th>
                                                            <th>{{$productModel->Machi2Time}}</th>
                                                            <th><input type="text" class="form-control"></th>
                                                        </tr>
                
                                                        <tr>
                                                            <th>{{$productModel->Machine3}}</th>
                                                            <th>{{$productModel->Machi3Time}}</th>
                                                            <th><input type="text" class="form-control"></th>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>{{$productModel->Machine4}}</th>
                                                            <th>{{$productModel->Machi4Time}}</th>
                                                            <th><input type="text" class="form-control"></th>
                                                        </tr>

                                                    </tbody>
                                    
                                    </table>
                
                          </div>
                        
                        
                        
                        </div>
                        <a href="{{url('/orders')}}"type="submit" class="btn btn-primary">Start Process</a>
                    </div>         
            </div>
        </div>
    
        
    </body>
    </html>               