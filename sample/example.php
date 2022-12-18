<?php

    require_once ('../gabai-database.php');
    $notes = $gabai->get_notes();

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
            <?php foreach($notes as $notes){?>
                <li><?php echo $notes['note_title'];?> | <?php echo $notes['user_notes']; ?></li>
            <?php }?>
        </ul>
</body>
</html>