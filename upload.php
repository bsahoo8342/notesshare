<?php
include "dbconn.php";
if (isset($_POST['upload'])) {
    $filename=rand(10,1000)."-".$_FILES['notes']['name'];
    $filesize=$_FILES['notes']['size'];
    $filetype=$_FILES['notes']['type'];
    $fileloca=$_FILES['notes']['tmp_name'];
    $folder="upload/";
    $nm=$_POST['nm'];
    $mail=$_POST['mail'];
    $sub=$_POST['sub'];

    if (move_uploaded_file($fileloca,$folder.$filename)){
        $sql="INSERT INTO `noteslist` (`SL No.`, `Name`, `Email`, `Subject`, `FileName`, `Type`, `Size`) VALUES (NULL, '$nm', '$mail', '$sub', '$filename', '$filetype', '$filesize');";
        mysqli_query($conn,$sql);
        echo "
        <script>
        file uploaded sucessfully!
        </script>
        ";
    }
    else{
        echo "File not uploaded";
    }

}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmail/src/Exception.php';
require 'PHPmail/src/PHPMailer.php';
require 'PHPmail/src/SMTP.php';

if(isset($_POST["upload"])){
    $mail= new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->Username='*';
    $mail->Password='*';

    $mail->setFrom('Notesshareofficial@gmail.com');

    $mail->addAddress($_POST["mail"]);
    $mail->isHTML(true);
    $mail->Subject= $_POST["sub"];
    $mail->Body = "Thank you $nm for your Note/book sharing. Your note/book publish in our website soon.";
    $mail->send();

    echo "
    <script>
    document.location.href='thank.php'
    </script>
    ";

}
