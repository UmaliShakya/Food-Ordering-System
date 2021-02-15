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

        <h1>Edit Products</h1>

        <div class="row" >

                @foreach($errors->all() as $error)

                    {{-- <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div> --}}
                   

                @endforeach

                <form method="POST" class="form-horizontal" action="/prmodels/update/{{$ProductModel->id}}" style="width: 100%; background-color: #f2f2f2";>
                    {{csrf_field()}}
                    <fieldset>

                        <input type="hidden" class="form-control" name="id" value="{{ csrf_token() }}">
                        <br>

                             
                        <div class="form-group">
                            <label class="control-label col-md-6">Material-1:</label>
                            <div class="col-md-10">
                                <input type="text" name="Material1" class="form-control" value="{{$ProductModel->Material1}}" placeholder="Material1">  
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-6" >Mate1-Qty:</label>
                            <div class="col-md-10">
                                <input type="text" name="Mate1Qty" class="form-control" value="{{$ProductModel->Mate1Qty}}" placeholder="Mate1Qty"> 
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-6">Material-2:</label>
                            <div class="col-md-10">
                                <input type="text" name="Material2" class="form-control" value="{{$ProductModel->Material2}}" placeholder="Material2"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-6" for="email">Mate2-Qty:</label>
                            <div class="col-md-10">
                                <input type="text" name="Mate2Qty" class="form-control" value="{{$ProductModel->Mate2Qty}}" placeholder="Mate2Qty"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-6" >Material-3:</label>
                            <div class="col-md-10">
                                <input type="text" name="Material3" class="form-control" value="{{$ProductModel->Material3}}" placeholder="Material3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-6">Mate3-Qty:</label>
                            <div class="col-md-10">
                                <input type="text" name="Mate3Qty" class="form-control" value="{{$ProductModel->Mate3Qty}}" placeholder="Mate3Qty">
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-6" >Material-4:</label>
                                <div class="col-md-10">
                                    <input type="text" name="Material4" class="form-control" value="{{$ProductModel->Material4}}" placeholder="Material4">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-6">Mate4-Qty:</label>
                                <div class="col-md-10">
                                    <input type="text" name="Mate4Qty" class="form-control" value="{{$ProductModel->Mate4Qty}}" placeholder="Mate4Qty">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label col-md-6" >Machine-1:</label>
                                    <div class="col-md-10">
                                        <input type="text" name="Machine1" class="form-control" value="{{$ProductModel->Machine1}}" placeholder="Machine1">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-6">Machi1-Time:</label>
                                    <div class="col-md-10">
                                        <input type="text" name="Machi1Time" class="form-control" value="{{$ProductModel->Machi1Time}}" placeholder="Machi1Time">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                        <label class="control-label col-md-6" >Machine-2:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="Machine2" class="form-control" value="{{$ProductModel->Machine2}}" placeholder="Machine2">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-6">Machi2-Time:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="Machi2Time" class="form-control" value="{{$ProductModel->Machi2Time}}" placeholder="Machi2Time">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                            <label class="control-label col-md-6" >Machine-3:</label>
                                            <div class="col-md-10">
                                                <input type="text" name="Machine3" class="form-control" value="{{$ProductModel->Machine3}}" placeholder="Machine3">
                                            </div>
                                        </div>
    
                                        <div class="form-group">
                                            <label class="control-label col-md-6">Machi3-Time:</label>
                                            <div class="col-md-10">
                                                <input type="text" name="Machi3Time" class="form-control" value="{{$ProductModel->Machi3Time}}" placeholder="Machi3Time">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label class="control-label col-md-6" >Machine-4:</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="Machine4" class="form-control" value="{{$ProductModel->Machine4}}" placeholder="Machine4">
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <label class="control-label col-md-6">Machi4-Time:</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="Machi4Time" class="form-control" value="{{$ProductModel->Machi4Time}}" placeholder="Machi4Time">
                                                </div>
                                            </div>
                                            
                                        
                       

                        <div class="form-group">
                            <div class="col-md-8">
                                
                        <button type="submit" class="btn btn-primary">Update</button>
                                &nbsp;
                               
                            </div>
                        </div>
                    </form> 




                                
</body>
</html>