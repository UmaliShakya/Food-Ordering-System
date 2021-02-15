<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #9F000F;
  padding: 0px 10px;
 
}

.header a {
  float: left;
  color:white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #A52A2A;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

}

</style>
</head>
<body>

   
<div class="header">
        <a href="/" class="logo">Shadow Hostel</a>
        <div id="main" class="header-right">
                <a href="#" class="openbtn" onclick="openNav()">☰ </a>
                <a href="#contact">Login</a>
                <a href="#about">Sign Up</a>
              </div>
</div>

<script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
</script>

<header id="header">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-10">
              <div class="container-fluid ">
              <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</h1>

          </div></div>
       
          <div class="col-md-2">
                  <div class="dropdown create">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Create Content <span class="caret"></span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item"  data-toggle="modal" data-target="#addstudents">Add Student</a></li>
                            <li><a class="dropdown-item"  data-toggle="modal" data-target="#addrooms">Rooms</a></li>
                            <li><a class="dropdown-item"  data-toggle="modal" data-target="#AddEmployees">Add Employee</a></li>
                          </div>
                    </div>
                    </div>
                      </header>

                      

</body>
</html>
