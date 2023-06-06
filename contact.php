<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style3.css">

</head>
<body>
<?php include "header.php"; ?>

<div class="content">
    
    <div class="container">

      
      <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="row align-items-center">
            <div class="col-lg-4 ml-auto">
              <h3 class="mb-4"><u>Message:</u></h3>
              <p>If You need any Notes then send us request, We will provides notes within 3 to 4 working days. </p>
            </div>
            <div class="col-lg-7 mb-5 mb-lg-0">

              <h2 class="mb-5">Fill the Request. <br> Form.</h2>

              <form class="border-right pr-5 mb-5"  id="contactForm" name="contactForm" action="send.php" method="post">

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Name" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <textarea class="form-control" name="msg" id="msg" cols="30" rows="7" placeholder="Write your message" required></textarea><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" name="send" value="Send Request" class="btn btn-primary rounded-0 py-2 px-4">
                        <span class="submitting"></span>
                    </div>
                </div>

              </form>
            </div>
          </div>
        </div>  
        </div>
      </div>
  </div>
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>



<?php include "footer.php"; ?>
</body>
</html>