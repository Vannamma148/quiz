<?php 
include 'connection.php';

$errors=array();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['textarea'];

    if(empty($name)){
			array_push($errors,"Enter Your Name!");
		}
		
		
		if(empty($email)){
			array_push($errors,"Enter Your email!");
		}

    if(empty($feedback)){
			array_push($errors,"Enter Your Feedback!");
		}
		

    $query="insert into feedback values('$name','$email','$feedback');";

    $user=mysqli_query($con,$query);

    if($query)
    {
        echo "Your Message Is Sent!";
    }
}
?>
<!DOCTYPE html>
  <head>
    <title>feedback</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="contact.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
      <section class="contact">
        <div class="content">
          <h2>
          Connect With Us
          </h2>
          <p>
            We would love to respond to your queries and help you succeed.
            Feel free to get in touch with us.<br></p>
           <p> Here, you can contact us and give your valuable feedback.
          </p>
        </div>
        <div class="container">
            <div class="contactInfo">
              <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i> <br>
                </div>
                <div class="text">
                  <h3>Address</h3>
                  <p>
                    Vikhroli(E), MUMBAI 400 083,<br>INDIA</p>
                </div>
              </div>
              <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="text">
                  <h3>Mobile</h3>
                  <p><a href="tel:9619357302">+91 9619357302</a></p>
                </div>
              </div>
              <div class="box">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="text">
                  <h3>Email</h3>
                  <p><a href="mailto:vannamma31@gmail.com">Vannamma31@gmail.com</a></p>
                </div>
              </div>
            </div>
            <div class="contactForm">
              <form method="POST">
                <h2>Send Feedback</h2>
                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span>Full Name</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>Email</span>
                </div>

                <div class="inputBox">
                    <textarea name="textarea"  cols="18" rows="2" required="required"></textarea>
                    <span>Type your message...</span>
                </div>

                <div class="inputBox">
                    <input type="submit" name="submit" value="Send">

                </div>
              </form>
            </div>
        </div>
      </section>
  </body>
</html>