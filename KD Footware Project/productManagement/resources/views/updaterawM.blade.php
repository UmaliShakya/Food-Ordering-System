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
    <br>    
    <h1 style="text-align:center; font-family:cursive">{{$title}}</h1>

    <br>
    <div class="container2">

            <form method="POST"  url="RawMaterial/update/'.$raw_material->id">
                {{csrf_field()}}
                <input type="text" class="form-control" name="name" placeholder="Enter your Machine name">
                <br>

                <label for="sel1"></label>
                <select class="form-control" id="sel1">
                    <option value="--Select one--">--Select Machine Status--</option>
                    <option>Ready</option>
                    <option>Busy</option>
                    <option>Maintenance</option>
                

                </select>
            

                <br>

                <td><input type="button" class="btn btn-warning" value="UPDATE"></td>
             
                </form>





</body>
</html>