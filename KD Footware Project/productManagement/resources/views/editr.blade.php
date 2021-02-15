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

        <h1>Update Raw-Materials</h1>

        <div class="row" >
            <div class="col-mid-row-12" >

                    @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>                 

                @endforeach
                <br>
                <form method="POST" class="form-horizontal" action="{{route('update',$raw_material->id)}}" style="width: 100%";>
                    {{csrf_field()}}
                    <fieldset>
                    
                    <input type="hidden" class="form-control" name="id" value="{{ csrf_token() }}">
                    <br>

                    <input type="text" class="form-control" name="name" value="{{$raw_material->name}}" placeholder="Enter your Material Name">
                    <br>

                    <input type="text" class="form-control" name="code" value="{{$raw_material->code}}" placeholder="Enter your Code">
                    <br>
                    <input type="text" class="form-control" name="unit" value="{{$raw_material->unit}}" placeholder="Enter your unit">
                    <br>

                    <input type="text" class="form-control" name="qty" value="{{$raw_material->qty}}" placeholder="Enter your Qty">
                    <br>             


                    <input type="submit" class="btn btn-primary" value="Update">
                 
                    </form>

                </div>
            </div>
        
            
        </body>
        </html>