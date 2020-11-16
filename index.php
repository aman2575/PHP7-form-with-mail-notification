<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
<br>
<h2>Send Email Form Contact page using PHP</h2>
<div class="row">
    <div class="col-md-2">
</div>
    <div class="col-md-8">

    <form action="" method="post">
    <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
  </div>
  <div class="form-group">
    <label >Contact:</label>
    <input type="text" name="contact" class="form-control" id="contact" placeholder="Phn. No">
  </div>
  <div class="form-group">
    <label >Message:</label>
    <input type="text"  class="form-control" id="message" placeholder="message" name="message">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Send Here..</button>
</form>
</div>
</div>
    <div class="col-md-2">

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $contact= $_POST['contact'];
    $message= $_POST['message'];

    if($name=''|| $email='' || $contact='' || $message=''){
        echo "<script>alert('All Fields are required')</script>";
    }
    else{
        $from = "Amantechsol";
        $webmaster = "Amantech@sol.com";
        $to = "klaustheripper01@gmail.com";

        $subject = "Conact Us From Amantechsol";

        $headers = "From: " . $from . "<" .$webmaster . ">\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = "<html><body>";
        $message .="<p>Name :".$_POST['name']   ."</p>";
        $message .="<p>Email :".$_POST['email']   ."</p>";
        $message .="<p>Contact :".$_POST['contact']   ."</p>";
        $message .="<p>Message :".$_POST['message']   ."</p>";
        $message = "</body></html>";

        $sendmail = mail($to, $subject, $message, $headers);

        echo "<script>alert('ThankYou for Contact')<script>";
        echo "<script>window.open('index.php?sent=Your Form has been submitted','_self')</script>";
    }


}
?>