<?php

    require_once '../gabai-database.php';
    $userdetails = $gabai->get_userdata();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
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

       .english {
         margin-left: 30%;
        }
        #sidebarMenu {
          display: none!important;
        }
        .fil {
            margin-left: 15%!important;
        }
        .esp {
            margin-left: 30%!important;
        }
        .his {
            margin-left: 15%;
        }
        .rowan {
          margin-left: -4%;
          margin-right: -15%;
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
            <h1 class="w-100 me-3">Classes</h1>
    
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../Homepage.html">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>

    <div class="container-fluid">
      <div class="row rowan" >
        <nav id="sidebarMenu" class="col-md-1 col-lg-1 d-md-block sidebar" style="padding-left:5px; padding-bottom:350px; background-color: #E0B894;">
            <div class="sidebar py-3" id="sidebar">
                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                  <li class="nav-item">
                    <a href="./user-homepage.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Calendar" data-bs-original-title="Calendar">
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
                    <a href="./user-classes.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Classes" data-bs-original-title="Classes">
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
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-3" style="background-color:#E9E3D7 ; margin-left: 0%!important; width: 91%; ">
          <main class="mt-3 mb-3" style="background-color:#E0B894 ;">
            <div class="row">
                <div class="col-lg-4 col-sm-6 math">
                  <div class="card text-center hover-shadow-lg hover-translate-y-n10 box math">
                    <div class="px-4 py-5">
          <img src="./Images/pencil.png" class="clslogo" width="45%" >
                    </div>
                    <div class="px-4 pb-5">
                      <h5>Math</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="card text-center hover-shadow-lg hover-translate-y-n10 box2 sci">
                    <div class="px-4 py-5">
          <img src="./Images/pencil.png" class="clslogo" width="45%" >
                    </div>
                    <div class="px-4 pb-5">
                      <h5>Science</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="card text-center hover-shadow-lg hover-translate-y-n10 box3 english">
                    <div class="px-4 py-5">
          <img src="./Images/pencil.png" class="clslogo" width="45%" >
                    </div>
                    <div class="px-4 pb-5">
                      <h5>English</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="card text-center hover-shadow-lg hover-translate-y-n10 box fil">
                    <div class="px-4 py-5">
          <img src="./Images/pencil.png" class="clslogo" width="45%" >
                    </div>
                    <div class="px-4 pb-5 math">
                      <h5>Filipino</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="card text-center hover-shadow-lg hover-translate-y-n10 box2 esp">
                    <div class="px-4 py-5">
          <img src="./Images/pencil.png" class="clslogo" width="45%" >
                    </div>
                    <div class="px-4 pb-5">
                      <h5>E.S.P</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="card text-center hover-shadow-lg hover-translate-y-n10 box3 his">
                    <div class="px-4 py-5">
          <img src="./Images/pencil.png" class="clslogo" width="45%" >
                    </div>
                    <div class="px-4 pb-5">
                      <h5>History</h5>
                    </div>
                  </div>
                </div>
              </div>

          </main>
      </main>
    </div>
  </div>  
 
  

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>