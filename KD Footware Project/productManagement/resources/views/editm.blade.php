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

        <h1>Edit Machines</h1>

        <div class="row" >
            <div class="col-mid-row-12" >
                @foreach($errors->all() as $error)

                  
                @endforeach
                <br>
        <form method="POST" class="form-horizontal" action="/machine/update/{{$machine->id}}" style="width: 100%";>
                    {{csrf_field()}}
                    <fieldset>
        <input type="hidden" class="form-control" name="id" value="{{ csrf_token() }}">
                    <br>
        <input type="text" class="form-control" name="name" value="{{$machine->name}}" placeholder="Enter your Machine Name" >
                    <br>
                   
                    <select class="form-control" id="sel1" name="status" value="{{$machine->status}}">
                        <option value="--Select one--">--Select Machine Status--</option>
                        <option>Ready</option>
                        <option>Busy</option>
                        <option>Maintenance</option>                  
  
                    </select>                   
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
            </div>
        </div>
                
</body>
</html>