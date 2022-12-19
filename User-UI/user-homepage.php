<?php
      
      require_once ('../gabai-database.php');
      $userdetails = $gabai->get_userdata();
      $gabai->add_note();

      if(isset($userdetails)){
          if(($userdetails['access'] != "user")){
              echo '<script type="text/javascript">';
              echo ' alert("Cannot Log-in as Admin need to be User")';  //not showing an alert box.
              echo '</script>';
              
          }
      } else {
              header("Location: ../Homepage.php");
      }
      
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Homepage</title>
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
        background-color: #fff;
        margin: 32px 10px;
        border: 4px solid #E0B894;
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
        font-weight: 600;
        padding: 0%;
        margin: 0%;
        
      }
      .noteaction {
        position: absolute;
        width: 25%;
        background-color:#E0B894;
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
        color: #fff;
        transition: 0.2s ease-in;
      }
      .noteaction .fa:hover {
        cursor: pointer;
        transform: scale(1.2);
      }

      .notedatecontainer {
        position: absolute;
        top: 0px;
        background:#E0B894;
        padding: 5px 15px 10px;
        color: #fff;
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
        background-color:#E0B894;
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
    <header class="py-3  border-bottom" style="background-color:#70452359;">
        <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1.5fr 2fr;">
          <div class="icon">
            <a href="../Admin/Admin-Homepage.php" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none " data-bs-toggle="dropdown" aria-expanded="false">
              <svg class="bi me-2" width="40" height="32"><img src="./Images/gabai.png" alt="Gabai" title="Gabai" width="60" height="50"></svg>
            </a>
            
          </div>
    
          <div class="d-flex align-items-center offset-2">
            <h1 class="w-100">Notes</h1>
            <div class="row">
            
              <div class="flex-shrink-0 dropdown"> 
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <b><?php echo $userdetails['fullname'] ?></b> <img  src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle ms-2">
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a name="logout" class="dropdown-item" href="./user-logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
      </header>

    <div class="container-fluid">
      <div class="row rowan" >
        <nav id="sidebarMenu" class="col-md-1 col-lg-1 d-md-block sidebar" style="padding-left: 5px; padding-bottom:350px; background-color: #E0B894;">
            <div class="sidebar py-3" id="sidebar">
                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                  <li class="nav-item">
                    <a href="./user-homepage.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Calendar" data-bs-original-title="Calendar">
                      <img src="./Images/calendar.png" alt="mdo" width="40" height="40" class="ewan">
                      <h6>My Planner</h6>
                    </a>
                  </li>
                  <li>
                      <a href="./user-notes.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Notes" data-bs-original-title="Notes">
                        <img src="./Images/notes.png" alt="mdo" width="40" height="40" class="ewan">
                        <h6>Notes</h6>
                      </a>
                    </li>
                  <li>
                    <a href="./user-classes.php " class="nav-link py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Classes" data-bs-original-title="Classes">
                      <img src="./Images/classes.png" alt="mdo" width="40" height="40" class="ewan">
                      <h6>Classes</h6>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link py-3 border-bottom rounded-0 botclass" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="List>" data-bs-original-title="List">
                      <img src="./Images/todo.png" alt="mdo" width="40" height="40" class="ewan">
                      <h6>To-do List</h6>
                    </a>
                  </li>
                  <li> 
                  </li>
                  <li>
                  </li>
                </ul>
              </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-3 gitna" style="background-color:#E9E3D7 ; margin-left: 0%!important; width: 91%; ">
          <main class="mt-3 mb-3 mainbox" style="background-color:white ;">
            <div class="row" id="row">
              <!-- <div class="col-4 col-sm-12 col-md-4">
                
              <div class="notebox">
                  <div class="notedatecontainer"><h6>6 June</h6></div>
                  <textarea class="form-control noteheading" maxlength="25">
      Note Heading</textarea
                  >
                  <div class="notecontainer">
                    <textarea class="notedata form-control" style="height: 190px">
      Note Text</textarea
                    >
                  </div>
                  <div class="noteaction">
                    <i class="fa fa-floppy-o" id="savebtn0"></i
                    ><i class="fa fa-trash" id="deletebtn0"></i>
                  </div>
                </div>
              </div> -->
            </div>
          
          <div>
           <button class="fa fa-plus" data-bs-toggle="modal" data-bs-target="#login" ></button>
          </div>

          <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
                    <div class="modal-content shadow" style="background-color: #E0B894;">
                      <div class="modal-header p-5 pb-4 border-bottom-0 text-center">
                        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                        <a href="./Admin-UI/admin-login.php" type="hidden" accesskey="a"></a>
                        <h1 class="fw-bold mb-0 fs-1 ">add notes</h1>
                        <button type="button" class="btn-close closebtn" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>               
                        <div class="modal-body p-5 pt-0">
                          <form class="" method="POST" action="">
                            <div class="form-floating mb-3">
                              <textarea name="notetitle" type="text" class="form-control rounded-3 " name="user-email" id="user-email" placeholder="name@example.com"></textarea>
                                <label for="floatingInput">Title</label>
                            </div>
                              <div class="form-floating mb-3">
                                <textarea name="notebody" type="text" class="form-control rounded-3" name="user-password" id="user-password" placeholder="password" style="height: 150px;"></textarea>
                                  <label for="floatingInput">Body</label>
                              </div>
                              <div class="mt-4 mb-0">
                                <div class="d-grid ">
                                  <button class="btn btn-block" style=" background-color: #542C0C; color: white;"name="add" type="submit" value="Log in">Add Note</button>
                                </div>
                              </div>
                           </form>
                           
                        </div>
          

          </main>
      </main>
    <script src="../JS/user-script.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>