<!DOCTYPE html>
<html>
  <head>
    <title>College Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="/college/style.css">
   
    <script type="text/javascript" src="/college/script.js"></script>
  </head>
  <body>


    <div class="container-fluid">
      <div class="top" style="line-height: 45px;">
        <div class="row" style="height:50px;background-color: magenta;">
          <div class="col-sm-1">
            LOGO
          </div>
          <div class="col-sm-1">
            COLLEGE
          </div>
          <div class="col-sm-4" >
            <form class="form-inline" action="/action_page.php" >
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
          <div class="col-sm-1">
            <a href="index.php">HOME</a>
          </div>
          <div class="col-sm-1">
            <div class="dropdown">
              <button class="btn btn-danger" type="button">student
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="admin/admin.php">ADMIN</a></li>
                <li><a href="#">STUDENT</a></li>
              </ul>
            </div>
            
          </div>
          
          <div class="col-sm-2">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ADDMISSION OPEN
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="/college/student/screg.php">+2 SCIENCE</a></li>
                <li><a href="#">+2 COMMERSE</a></li>
                <li><a href="#">+2 ARTS</a></li>
              </ul>
            </div>
          </div>
         <div class="col-sm-2">
            
              <button class="btn btn-warning" type="button"><i class="fa fa-user-md mr-3"></i><a href="admin/admin.php">Admin</a>
              <span class="caret"></span></button>
          </div>

           </div>
      </div>
    </div>


          


         
       
    
      
    
   