<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>
    <section style="margin: 5%; background:whitesmoke; border-radius: 20px;">
        <h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: center;">Share Your Notes With Us.</h2>
        <hr>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="formGroupExampleInput">Full Name:</label>
          <input type="text" class="form-control" name="nm" id="formGroupExampleInput" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address:</label>
            <input type="email" class="form-control" name="mail" id="exampleFormControlInput1" placeholder="name@example.com" required>
          </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Subject:</label>
          <input type="text" class="form-control" name="sub" id="formGroupExampleInput2" placeholder="Subject">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Notes Information:</label>
            <input type="text" class="form-control" name="notesname" id="formGroupExampleInput2" placeholder="Notes Info" required>
          </div>
          <label >Upload Your Notes:</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="notes" id="inputGroupFile03" required>
            <label class="custom-file-label" for="inputGroupFile03">Select  file</label>
            <div id="file-upload-filename"></div>
        </div>
        <div class="form-group pt-3"><input class="btn btn-primary" name="upload" type="submit" value="Submit"></div>
      </form>
    </section>
    <script>
      var input = document.getElementById( 'inputGroupFile03' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {
  
  // the change event gives us the input it occurred in 
  var input = event.srcElement;
  
  // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
  var fileName = input.files[0].name;
  
  // use fileName however fits your app best, i.e. add it into a div
  infoArea.textContent = 'File name: ' + fileName;
}
    </script>
</body>
</html>