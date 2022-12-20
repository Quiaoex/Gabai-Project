<?php

    require_once ('../gabai-database.php');
    $userdetails = $gabai->get_userdata();
    $id = $userdetails['id'];
    $uid = $userdetails['groupid'];
    $notes = $gabai->get_user_notes($id);
    $grpnotes = $gabai->get_grp_notes($uid);
    
print_r($userdetails);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap");
      * {
        padding: 0px;
        margin: 0;
        box-sizing: border-box;
        font-family: "Work Sans", sans-serif;
      }
      .notebox {
        height: 400px;
        
        margin: 32px 10px;
        border: 4px solid #959595;
        border-radius: 10px;
        position: relative;
        padding: 15px;
        transition: 0.4s ease-in-out;
        /* box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.05); */
         border-top-left-radius: 0px;
         border-bottom-right-radius: 0px;
        /*border-top-right-radius: 0px; */
      }
      .notebox:hover {
        box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.1);
      }
      .noteheading {
        background-color: white;
        font-weight: 600;
        padding: 0%;
        margin: 0%;
        
      }
      .noteaction {
        position: absolute;
        width: 25%;
        background-color:#959595;
        padding: 10px;
        bottom: 0;
        right: 0;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 0px;
        display: flex;
        justify-content: space-around;
        align-items: center;
      }

      .noteaction .fa {
        color: black;
        transition: 0.2s ease-in;
      }
      .noteaction .fa:hover {
        cursor: pointer;
        transform: scale(1.2);
      }

      .notedatecontainer {
        position: absolute;
        top: 0px;
        background:#959595;
        padding: 5px 15px 10px;
        color: black;
        right: 0px;
        border-bottom-left-radius: 10px;
        border-top-right-radius: 10px ;
        width: auto;
        text-align: center;
      }
      h6 {
        margin: 0px;
        font-size: 15px;
      }

      .form-control {
        font-size: 23px;
        border: none;
        outline: none;
        
      }
      .form-control:focus {
        border: none;
        box-shadow: none;
        outline: none;
      }
      textarea {
        
        resize: none;
        overflow: hidden;
        height: auto;
        height: 50px;
      }

      .notedata {
        font-size: 17px;
        height: 205px;
      }
      .notecount {
        position: absolute;
        top: 0;
        left: 0;
        color: #fff;
        background-color: #000;
        width: 25px;
        text-align: center;
        border-bottom-right-radius: 5px;
        font-size: 14px;
        font-weight: 500;
      }
      h4 {
        text-align: right;
        position: absolute;
        right: 100px;
        bottom: 169px;
        font-weight: 500;
      }
      h4 img {
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: brightness(0%);
        position: absolute;
        margin-left: 20px;
      }
      #addbox .fa-plus {
        font-size: 25px;
        font-weight: 700;
        transform: 0.5s ease-out;
        background-image: url(pencil.png);
      }
      #addbox:hover {
        cursor: pointer;
        background-color:#E0B894;
        transform: scale(0.9);
      }
      #addbox:hover .fa-plus {
        color: #fff;
        transform: scale(1.4);
      }

      body {
        overflow-x: hidden;
        background-color:white;
        padding: 0px;
        padding-bottom: 0px;
      
      }
      .rowan {
        margin-right: -2%;
        margin-bottom: 0%;
        
      }
      .mainbox {
        padding-bottom: 50%;
      }
      header {
        margin-right: 0%!important;
      }
      #addbox {
        position: fixed;
        bottom: 30px;
        right: 25px;
        background-color:#959595;
        padding: 20px;
        border-radius: 100%;
        width: 80px;
        height: 80px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 4px solid white;
        transition: 0.3s ease-in;
        z-index: 1;
      }
        .box {
        width: 65%;
        border-radius: 40px;
        background-color: #E9E3D7;
        margin-left: 30%;
        margin-top: 5%;
        margin-bottom: 5%;
        
      }
      .box2 {
        width: 65%;
        border-radius: 40px;
        background-color: #E9E3D7;
        margin-left: 15%;
        
        margin-top: 5%;
        margin-bottom: 5%;
        
      }
      .box3 {
        width: 65%;
        border-radius: 40px;
        background-color: #E9E3D7;
        margin-left: 0%;
        margin-top: 5%;
        margin-bottom: 10%;
      }
      @media (max-width: 990px) { 
        .rowan {
          margin-left: -4%;
          margin-right: -15%;
        }
      
        #sidebarMenu {
          display: none!important;
        }
        
    }
    </style>
</head>
<body>
        
        <ul>
            <?php foreach ($grpnotes as $grpnotes){?>
                <li><?php echo $grpnotes['group_id'];?> | <?php echo $grpnotes['group_name_id'];?>| <?php echo $grpnotes['group_name'];?> 
                | <?php echo $grpnotes['member_unique_id'];?> | <?php echo $grpnotes['created_by'];?> 
                | <?php echo $grpnotes['group_note_title']; ?>| <?php echo $grpnotes['group_note_body']; ?></li>
            <?php }?>
        </ul>
        <ul>

        
        <tr>
            <td>
            <?php foreach ($notes as $notes){?>
                <th><?php print_r ($notes['user_id']); ?></th>
                <th><?php print_r ($notes['note_id']);?> </th>
                <th><?php print_r ($notes['note_title']);?> </th>
                <th><?php print_r ($notes['note_body']); ?></th>
            <?php } ?>
            </td>
        </tr>
        
</body>
</html>