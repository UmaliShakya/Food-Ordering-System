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
    

  <br> <br>
  <div class="jumbotron">
    <div class="container text-center">
            <img src="unnamed.jpg" class="img-rounded" style="width:50%;" alt="Image" >
    </div>
  </div>
    
  <div class="container-fluid bg-3 text-center">    
    <br>
    <div class="row" style="font-family:cursive; font-size:200%">
      <div class="col-sm-3">
        
        <a href="orders">Orders</a><br>
        <br>
        <img src="or1.png" class="img-rounded" style="width:50%" alt="Image">
      </div>
      <div class="col-sm-3">
            <a href="machines">Machines</a><br>
            <br>
        <img src="machines.png" class="img-rounded" style="width:50%" alt="Image">
      </div>
      <div class="col-sm-3"> 
            <a href="raw_materials">Raw Materials</a><br>
            <br>
        <img src="row.png" class="img-rounded" style="width:50%" alt="Image">
      </div>
      <div class="col-sm-3">
            <a href="prmodels">Products</a><br>
            <br>
        <img src="inventory.png" class="img-rounded" style="width:50%" alt="Image">
      </div>

   
    </div>
  </div><br>

  
    
</body>
</html>

  
  
      
 


  



