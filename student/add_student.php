<?php
include('../header.php');

?>
<form method="POST" action="">
  Name:<input type="text" name="name" placeholder="enter your name" required=""><br><br>
  Father name:<input type="text" name="name" placeholder="enter your father name" required=""><br><br>
  Mother name:<input type="text" name="name" placeholder="enter your mother name" required=""><br><br>
  class:<input type="text" name="name" placeholder="enter your class" required=""><br><br>
  Email id:<input type="text" name="email" placeholder="enter your email" required=""><br><br>
  phone no:<input type="number" name="numeber" placeholder="enter your number"><br><br>

  DOB:<input type="date" name="date"required="">

  Gender:<select>
  	        <option>Male</option>
  	        <option>Female</option>
         </select>
  Catagory:<select>
  	        <option>SC</option>
  	        <option>ST</option>
  	        <option>OBC</option>
  	        <option>GEN</option>
           </select>
District:<select>
	        <option>khordha</option>
	        <option>cuttack</option>
	        <option>puri</option>
	        <option>bhadrak</option>
	        <option>jajpur</option>
        </select><br>
Upload image:<input type="file" name="img" ><br>
Upload 10th certificate:<input type="file" name="img" ><br>
Upload signature:<input type="file" name="img" >



</form>
</body>
</html>