<?php include('config.php');
$phone=0;
if(isset($_GET['rid']))
{
	
$rid=$_GET['rid'];
}
else
{
$rid=0;	
}

$sel="SELECT `depart`, `discription` FROM `department` WHERE id=$rid";
$exe=mysqli_query($db,$sel);
$fetch=mysqli_fetch_array($exe);

if(isset($_REQUEST['action']))
{
 
 $phone=$_REQUEST['phone'];
 if($fetch['depart']=="BSNL Landline/Postpaid")
 {
	
	$problemid='BS'.rand(1111,9999); 
	 
$ins="INSERT INTO `bsnl` (`firstname`, `stdcode`, `telephone`, `address`, `contactno`, `problem`,`lastname`, `district`, `email`,`problemid`)  VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['stdcode']."','".$_REQUEST['telno']."','".$_REQUEST['address']."','".$_REQUEST['phone']."','".$_REQUEST['problem']."','".$_REQUEST['lastname']."','".$_REQUEST['city']."','".$_REQUEST['email']."','".$problemid."')";
    
   include('mail.php');
  
  }
  
  else if($fetch['depart']=="Road Issues"||$fetch['depart']=="Swachhata")
  {
	  
	  	 $image = "uploads/".time() . '.' . end(explode(".",$_FILES["fileToUpload"]["name"]));
     	   	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $image);
		 	  
	  if($fetch['depart']=="Swachhata")
	  {
		  $problemid='SW'.rand(1111,9999);
		  $ins="INSERT INTO `swachta`(`firstname`, `contactno`, `district`, `address`, `image`, `problem`, `email`, `lastname`,`problemid`)  VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['phone']."','".$_REQUEST['city']."','".$_REQUEST['address']."','".$image."','".$_REQUEST['problem']."','".$_REQUEST['email']."','".$_REQUEST['lastname']."','".$problemid."')";
            
			include('mail.php');
	  }
	  
	   if($fetch['depart']=="Road Issues")
	  {
		  $problemid='RI'.rand(1111,9999);
		  $ins="INSERT INTO `road`(`firstname`, `contactno`, `district`, `address`, `problem`, `image`, `lastname`, `email`,`problemid`)  VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['phone']."','".$_REQUEST['city']."','".$_REQUEST['address']."','".$_REQUEST['problem']."','".$image."','".$_REQUEST['lastname']."','".$_REQUEST['email']."','".$problemid."')";

         include('mail.php');
	  }
  }
	
  else if($fetch['depart']=="Discom Problems")
  {
	  $problemid='DS'.rand(1111,9999);
	  $ins="INSERT INTO `discom`(`firstname`, `consumerid`, `contactno`, `problem`, `address`, `lastname`, `email`, `phone`, `district`,`problemid`)  VALUES  ('".$_REQUEST['firstname']."','".$_REQUEST['conid']."','".$_REQUEST['phone']."','".$_REQUEST['problem']."','".$_REQUEST['address']."','".$_REQUEST['lastname']."','".$_REQUEST['email']."','".$_REQUEST['phone']."','".$_REQUEST['city']."','".$problemid."')";

    include('mail.php');
  }
  
  else if($fetch['depart']=="LPG(Gas)")
  {
	  $problemid='LP'.rand(1111,9999);
	  $ins="INSERT INTO `lpg`(`firstname`,`problem`, `serviceprovider`, `contactno`, `address`, `lastname`,`district`,`problemid`)  VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['problem']."','".$_REQUEST['lpgser']."','".$_REQUEST['phone']."','".$_REQUEST['address']."','".$_REQUEST['lastname']."','".$_REQUEST['city']."','".$problemid."')";

     include('mail.php');
  }
  
  else if($fetch['depart']=="DTH")
  {
	  $problemid='DT'.rand(1111,9999);
	  $ins="INSERT INTO `dth`(`firstname`, `contactno`, `dthno`, `problem` , `serviceprovider`, `email`, `address`, `district`, `lastname`,`problemid`)  VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['phone']."','".$_REQUEST['conid']."','".$_REQUEST['problem']."','".$_REQUEST['dthser']."','".$_REQUEST['email']."','".$_REQUEST['address']."','".$_REQUEST['city']."','".$_REQUEST['lastname']."','".$problemid."')";
 
   include('mail.php');

  }
  
  else if($fetch['depart']=="Public Health Engineering Department"||$fetch['depart']=="E-mitra Complain")
  {
	  if($fetch['depart']=="Public Health Engineering Department")
	  {
		  $problemid='PH'.rand(1111,9999);
	  $ins="INSERT INTO `phed` (`firstname`, `problem`, `address`, `contactno`, `district`, `lastname`,`problemid`)  VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['problem']."','".$_REQUEST['address']."','".$_REQUEST['phone']."','".$_REQUEST			     ['city']."','".$_REQUEST['lastname']."','".$problemid."')";
      
	  include('mail.php');

      }
	  
	  if($fetch['depart']=="E-mitra Complain")
	  {
		  $problemid='EM'.rand(1111,9999);
			  $ins="INSERT INTO `emitra` (`firstname`, `problem`, `address`, `phone`, `district`, `lastname`,`problemid`)  VALUES ('".$_REQUEST['firstname']."','".$_REQUEST['problem']."','".$_REQUEST['address']."','".$_REQUEST['phone']."','".$_REQUEST			     ['city']."','".$_REQUEST['lastname']."','".$problemid."')";
			  
		include('mail.php');
				
	  }
  }
  

	
mysqli_query($db,$ins);

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
           <div class="reportfont col s6 offset-s3 "><?php echo $fetch['depart']; ?></div>
         </div>
         
         <!--form-->
               <div class="row">
         <form class="col s6 offset-s3" method="post" enctype="multipart/form-data">
           <div class="row">
            <div class="input-field col s6">
              <input  name="firstname" type="text" id="firstname" class="validate">
              <label>First Name</label>
            </div>
            <div class="input-field col s6">
              <input type="text" name="lastname" class="validate">
              <label >Last Name</label>
            </div>
          </div>
          
          <?php if($fetch['depart']=="BSNL Landline/Postpaid") 
          {?>
          <div class="row">
            <div class="input-field col s6">
              <input type="text" name="stdcode" class="validate">
              <label >Std. Code</label>
            </div>
            <div class="input-field col s6">
              <input type="text" name="telno" class="validate">
              <label >Telephone No.</label>
            </div>
          </div>
		  <?php
          }
		 ?>
         
         <?php if($fetch['depart']=="Discom Problems") 
          {?>
          <div class="row">
            <div class="input-field col s12">
              <input type="text" name="conid" class="validate">
              <label >Discom Id/Consumer Id</label>
            </div>
          </div>
		  <?php
          }
		 ?>
         
         
          <?php if($fetch['depart']=="LPG(Gas)") 
          {?>
          <div class="row">
              <div class="input-field col s6">
                <select name="lpgser" type="text">
                  <option value="ALL" disabled selected>Choose your option</option>
                  <option value="Indane">Indane Gas</option>
                  <option value="Bharat">Bharat Gas</option>
                  <option value="HP">HP Gas</option>
                  
                </select>
                <label>Lpg Service Provider </label>
              </div>
          </div>
		  <?php
          }
		 ?>
         
         <?php if($fetch['depart']=="DTH") 
          {?>
         <div class="row">
              <div class="input-field col s6">
                <select name="dthser" type="text">
                  <option value="ALL" disabled selected>Service Provider</option>
                  <option value="Airtel Digital TV">Airtel Digital TV</option>
                  <option value="Dish TV">Dish TV</option>
                  <option value="Reliance Digital TV">Reliance Digital TV</option>
                  <option value="Sun Direct">Sun Direct</option>
                  <option value="Male">Tata Sky</option>
                  <option value="Videocon d2h">Videocon d2h</option>
                  
                </select>
                <label>DTH </label>
              </div>
              
              <div class="input-field col s6">
              <input type="text" name="conid" class="validate">
              <label >Customer Id.</label>
            </div>
          </div>  
         <?php
          }
		 ?>
         
          <div class="row">
            <div class="input-field col s12">
              <input  type="email" name="email" class="validate">
              <label >Email</label>
            </div>
          </div>
          
          <div class="row">
          <div class="input-field col s6">
            <select name="city" >
            <option type="text" value="ALL">ALL DISTRICT</option><option value="21">Ajmer(21)</option><option value="6">Alwar(6)</option><option value="28">Banswara(28)</option><option value="31">Baran(31)</option><option value="17">Barmer(17)</option><option value="7">Bharatpur(7)</option><option value="24">Bhilwara(24)</option><option value="3">Bikaner(3)</option><option value="23">Bundi(23)</option><option value="29">Chittorgarh(29)</option><option value="4">Churu(4)</option><option value="11">Dausa(11)</option><option value="8">Dholpur(8)</option><option value="27">Dungarpur(27)</option><option value="1">Ganganagar(1)</option><option value="2">Hanumangarh(2)</option><option value="12">Jaipur(12)</option><option value="16">Jaisalmer(16)</option><option value="18">Jalore(18)</option><option value="32">Jhalawar(32)</option><option value="5">Jhunjhunu(5)</option><option value="15">Jodhpur(15)</option><option value="9">Karauli(9)</option><option value="30">Kota(30)</option><option value="14">Nagaur(14)</option><option value="20">Pali(20)</option><option value="33">Pratapgarh(33)</option><option value="34">RAJONLINE(34)</option><option value="25">Rajsamand(25)</option><option value="10">Sawai Madhopur(10)</option><option value="13">Sikar(13)</option><option value="19">Sirohi(19)</option><option value="22">Tonk(22)</option><option value="26">Udaipur(26)

</option></select>
            <label>District</label>   
          </div>
         
           <div class="input-field col s6">
              <input type="text" name="phone" class="validate">
              <label >Phone No.</label>
            </div>
          </div>
          
          <div class="row">
          <div class="input-field col s12">
            <textarea name="address" class="materialize-textarea" data-length="100"></textarea>
            <label>Address</label>
          </div>
          </div> 
         
          <?php if($fetch['depart']=="Road Issues"||$fetch['depart']=="Swachhata") 
          {?>
          	<div class="file-field col s12 input-field">
              <div class="btn">
                <span>Upload Image</span>
                <input name="fileToUpload" type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
		  <?php
          }
		 ?>
           
          <div class="row">
          <div class="input-field col s12">
            <textarea name="problem" type="text" class="materialize-textarea" data-length="200"></textarea>
            <label>Problem</label>
          </div>
          </div> 
          
                    <div class="row">
                <div class="col s4 offset-s4 center-align">
                    <button class="btn waves-effect waves-light" type="submit" value="submit" name="action">Submit
                                        </button>
                 </div>
          </div>
        </form>
        </div>
    <!--form-->
    
         <?php include('footer.php'); ?>
    </body>
</html>         
