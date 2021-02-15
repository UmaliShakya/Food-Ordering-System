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

        <h1>Place & Order</h1>

        <div class="row" >

                @foreach($errors->all() as $error)

                    {{-- <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div> --}}
                   

                @endforeach

                <form method="POST" class="form-horizontal" action="/saveSupplierOrder" style="width: 100%; background-color: #f2f2f2";>
                    {{csrf_field()}}
                    <fieldset>

                        <input type="hidden" class="form-control" name="id" value="{{ csrf_token() }}">
                        <br>

                             
                        <div class="form-group">
                            <label class="control-label col-md-6">OrderId:</label>
                            <div class="col-md-10">
                                <input type="text" name="Material1" class="form-control"  placeholder="Material1">  
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-6" >Supplier Id:</label>
                            <div class="col-md-10">
                                <input type="text" name="Mate1Qty" class="form-control"  placeholder="Mate1Qty"> 
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class="control-label col-md-6" for="email">Material Name</label>
                            <div class="col-md-10">
                                <input type="text" name="Mate2Qty" class="form-control"  placeholder="Mate2Qty"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-6" >Required-Quantity</label>
                            <div class="col-md-10">
                                <input type="text" name="Material3" class="form-control"  placeholder="Material3">
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-8">
                                
                        <button type="submit" class="btn btn-primary">Order</button>
                                &nbsp;
                               
                            </div>
                        </div>
                    </form> 




                                
</body>
</html>