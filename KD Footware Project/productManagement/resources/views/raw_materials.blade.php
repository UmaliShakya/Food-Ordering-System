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

        <h1>Raw-Materials</h1>

        <div class="row" >
            <div class="col-mid-row-12" >

                    @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                   

                @endforeach

                <br>

                    <table class="table table-light">
                            <tr style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">
                                    <th>MaterialID</th>
                                    <th>MaterialName</th>
                                    <th>MaterialCode</th>
                                    <th>Unit</th>
                                    <th>Qty</th>
                                    <th>Action</th>
                            </tr>  
                            
                            @foreach($raw_materials as $raw_material)
                            <tr>
                                <td>{{$raw_material->id}}</td>
                                <td>{{$raw_material->name}}</td>
                                <td>{{$raw_material->code}}</td>
                                <td>{{$raw_material->unit}}</td>
                                <td>{{$raw_material->qty}}</td>
                                <td><a href="{{url('RawMaterial/edit/'.$raw_material->id)}}"class="btn btn-success">Edit</a></td>
                            </tr>
                            @endforeach
        
                
                    </table>

                    <form method="POST" action="/saveRawmaterial">
                       
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="name" placeholder="Enter your Material Name">
                    <br>

                    <input type="text" class="form-control" name="code" placeholder="Enter your Code">
                    <br>
                    <input type="text" class="form-control" name="unit" placeholder="Enter your unit">
                    <br>

                    <input type="text" class="form-control" name="qty" placeholder="Enter your Qty">
                    <br>

                   


                    <input type="submit" class="btn btn-primary" value="SAVE">
                 
                    </form>
            </div>
        </div>
    </div>

    
</body>
</html>