<?php
    include_once './register-user.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gabai</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/Webhomepagestyle.css">
    <script src="./JS/log-in-scripts.js"></script>
  </head>
  <body style="overflow-x: hidden; overflow-y: auto; font-family:Roboto;" onkeydown="">
    <header class="p-3 text- hdr1">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <img src="./Images/Gabai.png" width="100vw" height="100%" class="logo"/>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-secondary"></a></li>
          </ul>
          <div class="text-end mx-3">
          <button type="button" class="btn  logn mx-3" data-bs-toggle="modal" data-bs-target="" style="font-family:Roboto; background:#542C0C;" >
          ABOUT</button>
            <button type="button" class="btn  logn " data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-family:Roboto; background:#542C0C;">
            LOGIN</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
                    <div class="modal-content shadow mdlbg">
                      <div class="modal-header p-5 pb-4 border-bottom-0 text-center">
                        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                        <a href="./Admin UI/admin-login.php" type="hidden" accesskey="a"></a>
                        <h1 class="fw-bold mb-0 fs-1 ">Welcome back! User</h1>
                        <button type="button" class="btn-close closebtn" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>               
                        <div class="modal-body p-5 pt-0">
                          <form class="" method="GET" action="">
                            <div class="form-floating mb-3">
                              <input type="text" class="form-control rounded-3 " id="email-input" placeholder="name@example.com">
                                <label for="floatingInput">Email or Username</label>
                            </div>
                              <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="password-input" placeholder="Password">
                                  <label for="floatingPassword">Password</label>
                                  <a href="#" class="link-primary">Forgot Password?</a>
                              </div>
                              
                             
                                <button class="w-100 mb-2 btn btn-lg rounded-3 btn lgnmdl" type="button" onclick="log_in_user()">LOG IN</button>
                                  
                           </form>
                           
                        </div>
                      </div>
                  </div>
                </div>
          </div>
        </div>
    </header>
    <div class="container-fluid">
<div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2 edetext">
           <!-- Heading -->
            <h1 class=" text-center text-md-start mb-5" style="font-size:50px;">
              <b>Welcome to </b><span class="" style="color: #542C0C; "><b>GABAI</b></span>. <br>
                
            </h1>
          <!-- Text -->
            <p class="lead text-center text-md-start text-dark mb-6 mb-lg-8 " style="font-size: medium;">
              Keep track of important things you need to get done in one place.
            </p>
            <p class="lead text-center text-md-start text-dark mb-6 mb-lg-8 fw-bold fs-4 "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>  Create Schedules</p>
            <p class="lead text-center text-md-start text-dark mb-6 mb-lg-8 fw-bold fs-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>  Reach your goals</p>
            <p class="lead text-center text-md-start text-dark mb-6 mb-lg-8 fw-bold fs-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>  Connect with your Instructors or Students</p>
          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">
            <!-- Image -->
              <img src="Images/04 1.png" class="img-fluid mw-md-130 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate clndr" alt="..." data-aos="fade-up" data-aos-delay="100">
            </div>
          </div>   
               
            <div class="row align-items-center text-endm ">
              <div class="  col-6 order-md-2 lstbtn" style="padding-left: 350px;">
              <!-- Buttons -->
              
                <button type="button" class="btn logn" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="font-family:Roboto; background:#542C0C;" >Sign Up</button>

             
              
              
              
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">
              <!-- Image -->
              <div class="text-end text-md-start">
                <img src="./Images/01 1.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate ppl" alt="..." data-aos="fade-up" data-aos-delay="100">
              </div>
  
            </div>
          </div>
         
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content shadow mdlbg ">
              <div class="modal-header p-5 pb-4 border-bottom-0 text-center">
                <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                <h1 class="fw-bold mb-0 fs-1 ">Let's be productive together!</h1>
                <button type="button" class="btn-close closebtn" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>               
                <div class="modal-body p-5 pt-0">
                  <form class="" action="" method="POST">
                    <div class="row">
                      <div class="form-floating">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control rounded-3" name="firstname" id="firstname" placeholder="name@example.com">
                          <label for="firstname">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control rounded-3" name="lastname" id="lastname" placeholder="name@example.com">
                          <label for="lastname">Last Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control rounded-3" name="email" id="email" placeholder="name@example.com">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control rounded-3" name="password" id="password" placeholder="name@example.com">
                        <label for="password">Password</label>
                    </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3 " id="confirmpassword" placeholder="Password">
                          <label for="confirmpassword">Confirm Password</label>
                          
                      </div>
                      <button class="w-100 mb-2 btn btn-lg rounded-3 btn lgnmdl" type="submit">SIGN UP</button>
                                  
                    </form>
                 </div>
               </div>
          </div>
                      
  
  
        











          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  </body>
</html>