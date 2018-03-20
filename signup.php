<?php include('config.php'); 

if(isset($_REQUEST['action']))
{
$ins="INSERT INTO `user`(`firstname`, `lastname`, `email`, `date`, `phone`, `district`, `gender`, `password`) VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['lastname']."','".$_REQUEST['email']."','".$_REQUEST['dob']."','".$_REQUEST['phone']."','".$_REQUEST['city']."','".$_REQUEST['gender']."','".$_REQUEST['password']."')";


mysqli_query($db,$ins);	
echo('<script>window.location="login.php";</script>');  
}
?>

<!DOCTYPE html>
<html>
   <head>
    <?php
    include('header.php');
    ?>
   </head> 
    
   <body>
     <?php include('navbar.php'); ?>    
         <br><br>
         <div class="row" >
           <div class="login col s4 offset-s4 ">Sign Up</div>
         </div>
       <!--form-->
               <div class="row">
        <form class="col s6 offset-s3" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="First Name" name="firstname" type="text" class="validate">
              <label>User Name</label>
            </div>
            <div class="input-field col s6">
              <input type="text" name="lastname" class="validate">
              <label >Last Name</label>
            </div>
          </div>
                    
          
          <div class="row">
            <div class="input-field col s12">
              <input  type="email" name="email" class="validate">
              <label >Email</label>
            </div>
          </div>
          <div class="row">
              <div class="input-field col s6">
                <select name="gender" type="text">
                  <option value="ALL" disabled selected>Choose your option</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <label>Gender</label>
              </div>
              <div class="input-field col s6">
               <input type="text" name="dob" placeholder="mm/dd/yyyy">
               <label>Date of birth</label>
              </div>
          </div>
          <div class="input-field col s6">
            <select name="city" >
            <option type="text" value="ALL">ALL DISTRICT</option><option value="21">Ajmer(21)</option><option value="6">Alwar(6)</option><option value="28">Banswara(28)</option><option value="31">Baran(31)</option><option value="17">Barmer(17)</option><option value="7">Bharatpur(7)</option><option value="24">Bhilwara(24)</option><option value="3">Bikaner(3)</option><option value="23">Bundi(23)</option><option value="29">Chittorgarh(29)</option><option value="4">Churu(4)</option><option value="11">Dausa(11)</option><option value="8">Dholpur(8)</option><option value="27">Dungarpur(27)</option><option value="1">Ganganagar(1)</option><option value="2">Hanumangarh(2)</option><option value="12">Jaipur(12)</option><option value="16">Jaisalmer(16)</option><option value="18">Jalore(18)</option><option value="32">Jhalawar(32)</option><option value="5">Jhunjhunu(5)</option><option value="15">Jodhpur(15)</option><option value="9">Karauli(9)</option><option value="30">Kota(30)</option><option value="14">Nagaur(14)</option><option value="20">Pali(20)</option><option value="33">Pratapgarh(33)</option><option value="34">RAJONLINE(34)</option><option value="25">Rajsamand(25)</option><option value="10">Sawai Madhopur(10)</option><option value="13">Sikar(13)</option><option value="19">Sirohi(19)</option><option value="22">Tonk(22)</option><option value="26">Udaipur(26)

</option></select>
            <label>District</label>   
          </div>
         
          <div class="row">
            <div class="input-field col s6">
              <input type="text" name="phone" class="validate">
              <label >Phone No.</label>
            </div>
          </div> 
          
          <div class="row">
            <div class="input-field col s12">
              <input  type="password" name="password" class="validate">
              <label >Password</label>
            </div>
          </div>
          <div class="row">
                <div class="col s4 offset-s4 center-align">
                    <button class="btn waves-effect waves-light" type="submit" value="submit" name="action">Sign Up
                                        </button>
                 </div>
          </div>
        </form>
    <!--form-->
  </div>  
  <?php include('footer.php'); ?>  
  </body>
</html>         