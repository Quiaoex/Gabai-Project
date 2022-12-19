<?php

    require_once ('../gabai-database.php');
    $userdetails = $gabai->get_userdata();
    $id = $_GET[$userdetails['id']];
    $notes = $gabai->get_user_notes();
    $grpnotes = $gabai->get_grp_notes();



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
        <ul>
            <?php foreach ($notes as $notes){?>
                <li><?php echo $notes['user_id'];?> | <?php echo $notes['note_id'];?> |<?php echo $notes['note_title'];?> | <?php echo $notes['note_body']; ?></li>
            <?php }?>
        </ul>
        <ul>
            <?php foreach ($grpnotes as $grpnotes){?>
                <li><?php echo $grpnotes['group_id'];?> | <?php echo $grpnotes['group_name_id'];?>| <?php echo $grpnotes['group_name'];?> 
                | <?php echo $grpnotes['members'];?> 
                | <?php echo $grpnotes['group_note_title']; ?>| <?php echo $grpnotes['group_note_body']; ?></li>
            <?php }?>
        </ul>

</body>
</html>