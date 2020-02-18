<?php
if(isset($_POST['submit'])){
    $to = "jlgl9999@hotmail.com";
    $from = $_POST['contactemail'];
    $subject = "Contact";
    $message = $_POST['message'];
    
    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
    
    echo "Mail Sent. Thank you, we will contact you shortly.";
    
    }
    ?>
    <div class="contact">

<form action="" method="post">
    <div class="row">
      <div class="col-75">
        <input type="text" id="contactemail" name="contactemail" placeholder="Email">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <textarea id="message" name="message" placeholder="Bla bla bla..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Go!">
    </div>
  </form>

</div>