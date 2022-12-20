<?php
      
      require_once ('../gabai-database.php');
      $userdetails = $gabai->get_userdata();
      $gabai->add_note();
      $gabai->add_group_note();
      $id = $userdetails['id'];
      $notes = $gabai->get_user_notes($id);
      $gabai->delete_note();


      if(isset($userdetails)){
        if(($userdetails['access'] != "user")){
            echo '<script type="text/javascript">';
            echo ' alert("Cannot Log-in as Admin need to be User")';  //not showing an alert box.
            echo '</script>';
            
        }
    } else {
            header("Location: ../index.php");
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
                  <div class="notecontainer">
                  <textarea name="nid" class="notedata form-control"  placeholder="note_ID"></textarea> 
                  </div>
                  <div class="noteaction">
                  <button name="add-note" class="fa fa-floppy-o savebutton" id="savebtn">add</button>
                  <input type="hidden" value="">
                  <button name="delete_note" class="fa fa-trash deletebutton" id="deletebtn">delete</button>
                  </div>
                </div>
              </div>
    </form>
    <tr>
            <td>
            <?php foreach ($notes as $notes){?>
                <th><?php print_r ($notes['id']); ?></th>
                <th><?php print_r ($notes['note_id']);?> </th>
                <th><?php print_r ($notes['note_title']);?> </th>
                <th><?php print_r ($notes['note_body']); ?></th>
            <?php } ?>
            </td>
        </tr>

    <!--<form method="POST" name="group-note-add">
    <div class="col-4 col-sm-12 col-md-4">
              <div class="notebox">
                  <div class="notedatecontainer"><h6>6 June</h6></div>
                  <input type="hidden" name="id" value="<?php echo $userdetails['id']; ?>">
                  <input type="hidden" name="note_type" value="group">
                  <div class="notecontainer">
                  <textarea name="groupnotetitle" class="form-control noteheading" maxlength="25" placeholder="Title"></textarea>
                  </div>
                  <div class="notecontainer">
                  <textarea name="groupnotebody" class="notedata form-control" style="height: 190px" placeholder="Body"></textarea> 
                  <input type="hidden" name="created-by" value="<?php echo $userdetails['fullname']; ?>" >
                  </div>
                  <div class="noteaction">
                  <button name="add-group-note" class="fa fa-floppy-o savebutton" id="savebtn">add</button>
                  <button  name="delete-group-note" class="fa fa-trash deletebutton" id="deletebtn">delete</button>
                  </div>
                </div>
              </div>
    </form>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>