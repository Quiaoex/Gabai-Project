<?php
      
      require_once ('../gabai-database.php');
      $userdetails = $gabai->get_userdata();
      $gabai->add_note();
      $note = $gabai->get_notes();

      
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

    <div class="col-4 col-sm-12 col-md-4">
                
              <div class="notebox">
                  <div class="notedatecontainer"><h6>6 June</h6></div>
                  <textarea name="notetitle" class="form-control noteheading" maxlength="25" placeholder="Title"></textarea>
                  <div class="notecontainer">
                    <textarea name="notebody" class="notedata form-control" style="height: 190px" placeholder="Body"></textarea>
                  </div>
                  <div class="noteaction">
                  <button name="add" class="fa fa-floppy-o savebutton" id="savebtn">add</button>
                  <button name="delete" class="fa fa-trash deletebutton" id="deletebtn">delete</button>
                  </div>
                </div>
              </div>
    </form>

        
            

</body>
</html>