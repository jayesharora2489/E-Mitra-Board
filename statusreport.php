<?php include('config.php'); 

if(isset($_GET['rid']))
{
$rid=$_GET['rid'];
}
else
{
$rid=0;	
}


$sel="SELECT `name`, `billduephed`, `billduediscom`, `billduelandline` FROM `aadhar` WHERE id=$rid";
$exe=mysqli_query($db,$sel);
$fetch=mysqli_fetch_array($exe);

?> 
<!DOCTYPE html>
  <html>
    <head>
       <?php include('header.php'); ?>	
    </head>

    <body>
    <!--NAVBAR-->
      <?php include('navbar.php'); ?>
      <br><br>
      <div class="row" >
           <div class=" col s6 offset-s3 center-align " style="font-size:26px;">Welcome <?php echo $fetch['name'];?></div>
      </div>
      
      <div class="row" >
           <div class="login col s6 offset-s3 ">Status Report</div>
      </div>

<div class="row">
<div class="row col s8 offset-s2">
 <table>
        <thead>
          <tr>
              <th>Consumer Department</th>
              <th>Due Amount</th>
              <th>Pay</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Water Bill</td>
            <td><?php echo $fetch['billduephed'];?></td>
            <td><button class="btn waves-effect waves-light" >Pay
                                        </button></td>
          </tr>
          <tr>
            <td>Electricity Bill</td>
            <td><?php echo $fetch['billduediscom'];?></td>
            <td><button class="btn waves-effect waves-light" >Pay
                                        </button></td>
          </tr>
          <tr>
            <td>Landline Bill</td>
            <td><?php echo $fetch['billduelandline'];?></td>
            <td><button class="btn waves-effect waves-light" >Pay
                                        </button></td>
          </tr>
        </tbody>
</table>
</div>
</div>
     </body>
</html>     