<?php
include './header.php';
?>




<div style="text-align:center">
  <h1 class="well">
    Submit Feedback
  </h1>
 <div class="container">
 <div class="col-md-5">
 <div class="form-area"> 
     <form method="post" action="" role="form">
         
         <?php
                if (isset($_POST['submit'])) {
                    $name= $_POST['name'];
              
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $subject = $_POST['subject'];
                   
                    $message = $_POST['message'];

                    

                        $insert = mysql_query("INSERT INTO feedback(id,name,email,mobile_number,subject,massage) VALUES('','$name','$email','$mobile','$subject','$message')");
                        if ($insert) {
                             header("location:contct.php");
                        } else {
                            echo "Sorry , sms not sent.";
                        }
                    
                    
                }
                ?>
         
 <br style="clear:both">
 <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
 <div class="form-group">
 <input type="text" class="form-control" id="name" name="name" placeholder="Name" [(ngModel)]="name" required>
 </div>
 <div class="form-group">
 <input type="email" class="form-control" id="email" name="email" placeholder="Email" [(ngModel)]="email" required>
 </div>
 <div class="form-group">
 <input type="phone" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" [(ngModel)]="mobile" required>
 </div>
 <div class="form-group">
 <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" [(ngModel)]="subject" required>
 </div>
 <div class="form-group">
 <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" [(ngModel)]="message" maxlength="140" rows="7"></textarea>              
 </div>
 <button type="button" id="submit" name="submit" class="btn btn-primary pull-right" >Submit Form</button>
 </form>
 </div>
 </div>
 </div>
</div>

<?php
include './footer.php';
?>