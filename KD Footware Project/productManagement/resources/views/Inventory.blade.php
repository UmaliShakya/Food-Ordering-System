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
        
            <table class="table table-condensed2">
              <thead>
                <tr style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">
                  <th>ProductID</th>
                  <th>Model</th>
                  <th>Size</th>
                  <th>Qty</th>
                  <th>Total</th>
                  
                </tr>
              </thead>
              <tbody style="background:; text-align:center">
                <tr>
                        <th>P001</th>
                        <th>M006</th>
                        <th>35</th>
                        <th>450</th>
                        <th>30,000.00</th>
                       
      
                </tr>
                <tr>
                        <th>P002</th>
                        <th>M004</th>
                        <th>36</th>
                        <th>300</th>
                        <th>15,000.00</th>
                        
      

                </tr>
              

                <tr>
                        <th>P003</th>
                        <th>M003</th>
                        <th>37</th>
                        <th>1000</th>
                        <th>60,000.00</th>
                     
                </tr>

                <tr>
                        <th>P004</th>
                        <th>M003</th>
                        <th>35</th>
                        <th>200</th>
                        <th>25,000.00</th>
                        
                </tr>   
                          
                <tr>
                        <th>P005</th>
                        <th>M002</th>
                        <th>39</th>
                        <th>500</th>
                        <th>35,000.00</th>
                       
                </tr>  

                <tr>
                        <th>P006</th>
                        <th>M001</th>
                        <th>38</th>
                        <th>600</th>
                        <th>42,000.00</th>
                       
                </tr>  
                                          
                <tr>
                        <th>P007</th>
                        <th>M013</th>
                        <th>37</th>
                        <th>750</th>
                        <th>50,000.00</th>
                      
                </tr>    
                                                  
                <tr>
                        <th>P008</th>
                        <th>M020</th>
                        <th>39</th>
                        <th>200</th>
                        <th>31,000.00</th>
                       
                </tr>  
              </tbody>
            </table>

            
          </div>
              
</body>
</html>
