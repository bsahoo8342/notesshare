<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmail/src/Exception.php';
require 'PHPmail/src/PHPMailer.php';
require 'PHPmail/src/SMTP.php';

if(isset($_POST["send"])){
    $mail= new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->Username='notesshareofficial@gmail.com';
    $mail->Password='kisfvaugudixntbl';

    $mail->setFrom('Notesshareofficial@gmail.com');

    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject= $_POST["subject"];
    $mail->Body = "Thank you for contact us. My team will contact you soon";
    $mail->send();

    echo "
    <script>
    document.location.href='last.php'
    </script>
    ";

}
    
?>
<?php
include "dbconn.php";
if(isset($_POST["send"])){
$name=$_POST['fname'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$message=$_POST['msg'];

//Insert Data
$ins= "INSERT INTO `contact` (`SL No.`, `Name`, `Email`, `Subject`, `Message`) VALUES (NULL, '$name', '$email', '$sub', '$message')";
$res=mysqli_query($conn, $ins);
        //check Data insert or not
        if($res){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> entry Successfully. 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>' ;
        }
        else{
            // echo "data Not inserted because --> ".mysqli_error($conn);  
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Data not entry Successfully, Please contact Admin!. 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>' ;
            }
}

?>