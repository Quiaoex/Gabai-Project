<?php
      
      require_once ('../gabai-database.php');
      $userdetails = $gabai->get_userdata();
      $gabai->add_note();
      $note = $gabai->get_notes();
      $id = $_GET['id'];
      $getid = $gabai->user_id($id);

      if(isset($userdetails)){
        if(($userdetails['access'] != "user")){
            echo '<script type="text/javascript">';
            echo ' alert("Cannot Log-in as Admin need to be User")';  //not showing an alert box.
            echo '</script>';
            
        }
    } else {
            header("Location: ../Homepage.php");
    }
    
      
print_r($userdetails);
      
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
                  <input type="hidden" name="id" value="<?php echo $userdetails['id']; ?>">
                  <input type="hidden" name="note_type" value="user">
                  <div class="notecontainer">
                  <textarea name="notetitle" class="form-control noteheading" maxlength="25" placeholder="Title"></textarea>
                  </div>
                  <div class="notecontainer">
                  <textarea name="notebody" class="notedata form-control" style="height: 190px" placeholder="Body"></textarea> 
                  <input type="hidden" name="created-by" value="<?php echo $userdetails['fullname']; ?>" >
                  </div>
                  <div class="noteaction">
                  <button name="add" class="fa fa-floppy-o savebutton" id="savebtn">add</button>
                  <button name="delete" class="fa fa-trash deletebutton" id="deletebtn">delete</button>
                  </div>
                </div>
              </div>
    </form>
    <?php print_r($getid) ?>
</body>
</html>