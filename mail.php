<?php
        $firstname=$_REQUEST['firstname'];
		$email=$_REQUEST['email'];

require __DIR__ . '/twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC14e7b4d646788fe8469c6fb282d08851";
$token = "6bde7093252f86d13fea4126b2aa17cd";
$client = new Client($sid, $token);
?>
<script>
var phone="<?php echo $phone ?>";
</script>
<?php
$client->messages
    ->create(
        ''. $phone .'',
        array(
            'from' => '+12566394965',
            'body' => "Dear Customer, Your Complaint has been Registered successfully. Your Complain Id is : $problemid . Thank you for availing the service."
        )
    );



		echo'<script>
		var firstname = "<?php echo $firstname ?>";
		var email = "<?php echo $email ?>";
		
		 window.location="http://www.divyavrat.com/mail/message.php?subject=Complaint Registered&msg='. $firstname .'+Your Complaint has been successfully Registered.Your Problem id : +'. $problemid .'!&email='. $email .'" 
		 
		  				 
		 </script> ';
         
	

         
?>         