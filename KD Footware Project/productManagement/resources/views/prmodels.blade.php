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

        <h1>Models</h1>

        <div class="row" >
            <div class="col-mid-row-12" >

                @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                   

                @endforeach
                <br>
                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">

                                        <a href="{{url('/prmodelAdd')}}" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="float:right">New Model</a>
                                    </div><!-- card-header -->


                                    <table class="table table-light">
                                            <tr style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">                   
                                                            <th>ModelID</th>
                                                            <th>Mate-1</th>
                                                            <th>Mate1-Qty</th>
                                                            <th>Mate-2</th>
                                                            <th>Mate2-Qty</th>
                                                            <th>Mate-3</th>
                                                            <th>Mate3-Qty</th>
                                                            <th>Mate-4</th>
                                                            <th>Mate4-Qty</th>
                                                            <th>Action</th>
                    
                                                            @foreach($prmodels as $ProductModel)
                                                            <tr>
                                                            <td>{{$ProductModel->id}}</td>
                                                            <td>{{$ProductModel->Material1}}</td>
                                                            <td>{{$ProductModel->Mate1Qty}}</td>
                                                            <td>{{$ProductModel->Material2}}</td>
                                                            <td>{{$ProductModel->Mate2Qty}}</td>
                                                            <td>{{$ProductModel->Material3}}</td>
                                                            <td>{{$ProductModel->Mate3Qty}}</td>
                                                            <td>{{$ProductModel->Material4}}</td>
                                                            <td>{{$ProductModel->Mate4Qty}}</td>                                                                                  
                                                            <td><a href="{{url('productModel/edit/'.$ProductModel->id)}}"class="btn btn-success">Edit</a></td>
                                                            
                                                        </tr>
                     
                                                   @endforeach                                                         
                                                    </table>
                                                    <table class="table table-light">
                                                            <tr style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">                   
                                                                            <th>ModelID</th>
                                                                            <th>Machi-1</th>
                                                                            <th>Machi1-Time</th>
                                                                            <th>Machi-2</th>
                                                                            <th>Machi2-Time</th>
                                                                            <th>Machi-3</th>
                                                                            <th>Machi3-Time</th>
                                                                            <th>Machi-4</th>
                                                                            <th>Machi4-Time</th>
                                                                            <th>Action</th>
                    
                                                                            @foreach($prmodels as $ProductModel)
                                                                            <tr>
                                                                            <td>{{$ProductModel->id}}</td>
                                                                            <td>{{$ProductModel->Machine1}}</td>
                                                                            <td>{{$ProductModel->Machi1Time}}</td>
                                                                            <td>{{$ProductModel->Machine2}}</td>
                                                                            <td>{{$ProductModel->Machi2Time}}</td>
                                                                            <td>{{$ProductModel->Machine3}}</td>
                                                                            <td>{{$ProductModel->Machi3Time}}</td>
                                                                            <td>{{$ProductModel->Machine4}}</td>
                                                                            <td>{{$ProductModel->Machi4Time}}</td>
                                                                            <td><a href="{{url('productModel/edit/'.$ProductModel->id)}}"class="btn btn-success">Edit</a></td>          
                                                                            
                                                                            </tr>
                                                                            @endforeach                                                   
                                                                    </table>



            
                                        </div><!-- modal-body -->
                                        
                                      
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->  
                            </div><!-- /.modal -->
                            <!-- new student bootstrp model end -->




               
                          </div>
                        
                        
                        
                        </div>
                   
                    </div>         
            </div>
        </div>

                    
</body>
</html>