<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');
  .mail {
    font-family:'Lato', sans-serif;
    font-size: 20px;
  /* Center vertically and horizontally */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
    display:flex;justify-content:center;align-items:center;
      
  }
    a { text-decoration:none;}
</style>

<?php 
if(isset($_POST['submit'])){

    $to = "athenkosivinqi25@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['name'];
    $subject = "New mail from " .$fname;
    $message = $fname . " " . $fname . " wrote the following:" . "\n\n" . $_POST['Message'];
   
 
    $headers = "From: " .$from. "\r\n" .
"Reply-to: " .$from. "\r\n" .
"X-Mailer:  PHP/" . phpversion();
    mail($to,$subject,$message, $headers);
    
    echo "<div class='mail'>  Mail Sent. Thank you " . $fname .", we will contact you shortly.<br/> <a href='index.html'> Return Home</a>
    </div>";
   
    }
?>