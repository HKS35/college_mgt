

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




<div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <ul>
        <li>
          <a href="#"><i class="fa fa-dashboard mr-2"></i>Dashboard</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-user mr-3"></i>Faculty</a>
          <ul class="p-0 m-0">
            <li>
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users mr-3"></i>
                  Students
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><i class="fa fa-plus-square mr-3"></i>Add Student</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o mr-2"></i>Edit Student</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="viewstudent.php"><i class="fa fa-eye mr-2"></i>View Student</a>
                  <div class="dropdown-divider"></div>
                  
                </div>
              </div>
            </li>
            <li>
              <a href=""><i class="fa fa-address-card mr-3"></i>Streams</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#"><i class="fa fa-bar-chart mr-3"></i>Attendance</a>
        </li>
        <li>
          <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-trophy mr-3"></i>
              Results
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"><i class="fa fa-plus-square mr-3"></i>Add Result</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o mr-2"></i>Edit Result</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="fa fa-eye mr-2"></i>View Result</a>
              <div class="dropdown-divider"></div>
              
            </div>
          </div>
        </li>
        <li>
          <a href="#"><i class="fa fa-bullhorn mr-3"></i>Notice</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-bed mr-3"></i>Hostel</a>
        </li>
        <li>
          <div class="bottom" id="bottom">
            <div class="dropdown-divider border-light"></div>
            <p class="ml-3 pt-2">Copyright 2021 Test Series</p>
          </div>
        </li>
      </ul>
      </div>
      <div id="main">
      <nav style="background-color: #f8f2f2; border-bottom:1px solid #eee6e6; ">
        <a href="void: 0" onclick="openNav()" id="open"><i class="fa fa-bars text-dark" style="font-size: 22px;"> </i></a>
        <div class="float-right">
           <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-md mr-3"></i>
              Admin
            </a>
            <div class="dropdown-menu" style="width: 50px;">
              <a class="dropdown-item" href="/college/admin/logout.php">Logout</a>
              
              
            </div>
          </div>
        </div>
      </nav>

              

                           
      <div class="container-fluid">
        <h1 style="text-align: center; color: limegreen;">Applying For +2 SCIENCE</h1>
        <?php  include('../connection.php')    ?>
        <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          <tr>
              <th>id</th>
              <th>applicant name</th>
              <th>father name</th>
              <th>mother name</th>
              <th>email</th>
              <th>mobile no</th>
              <th>catagory</th>
               <th>gender</th>
              <th>course</th>
               
              <th>dob</th>
               <th>religion</th>
              <th>school name</th>
               <th>fullmark</th>
              <th>acquiremark</th>
               <th>faddress</th>
              <th>saddress</th>
              <th>image</th>
              <th>signature</th>
              <th>certificate</th>
              <th>marksheet</th>
              <th colspan="2">action</th>
             
          </tr>
        </thead>
        <tbody>
           <?php  
            include('../connection.php');    
           $sql = "select * from student_add";
           $result = mysqli_query($conn,$sql);
           while($row = mysqli_fetch_assoc($result)){

           ?>
          <tr>
           <td><?php echo $row['id'];  ?></td> 
           <td><?php echo $row['aname'];  ?></td>
           <td><?php echo $row['fname']; ?></td>
           <td><?php echo $row['mname'];  ?></td>
           <td><?php echo $row['email'];  ?></td>
           <td><?php echo $row['mobile_no'];  ?></td>
           <td><?php echo $row['catagory'];  ?></td>
           <td><?php echo $row['gender'];  ?></td>
            <td><?php echo $row['course'];  ?></td>
           <td><?php echo $row['dob'];  ?></td>
           <td><?php echo $row['religion'];  ?></td>
           <td><?php echo $row['school_name'];  ?></td>
           <td><?php echo $row['fmark'];  ?></td>
           <td><?php echo $row['amark'];  ?></td>
           <td><?php echo $row['faddress'];  ?></td>
           <td><?php echo $row['saddress'];  ?></td>
           <td> <img src="<?php echo "http://localhost/college/Admin/".$row['img'];  ?>" width="30px"; ></td>
            <td> <img src="<?php echo "http://localhost/college/Admin/".$row['sign'];  ?>" width="30px"; ></td>
             <td> <img src="<?php echo "http://localhost/college/Admin/".$row['certificate'];  ?>" width="30px"; ></td>
              <td> <img src="<?php echo "http://localhost/college/Admin/".$row['marksheet'];  ?>" width="30px"; ></td>
           <td><a href="edit.php?id=<?php echo $row['id']; ?>">edit</a></td>
           <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</td>
          </tr>
          <?php
          }
          ?>  
           
            
        </tbody>  
        </table> 
        </div>
       
      </div>
      

                               
