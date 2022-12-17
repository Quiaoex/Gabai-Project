<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
     <style>
       body {
        background-color: #FFE3CA;
       }
      
      
      .p-3 {
           padding-bottom: 0%!important; 
           padding-top: 0%!important; 
      }
      .mb-3 {
           margin-bottom: 1rem!important; 
           
      }
      .border-bottom {
         border: none;
      }
      .txt {
        margin-left: 2%;
      }
      .rounder-circle {
        width: 10%;
      }
      .nav-pills {
    --bs-nav-pills-border-radius: 0.375rem;
    --bs-nav-pills-link-active-color: #fff;
    --bs-nav-pills-link-active-bg: #FFE3CA;
      }
     .con {
      padding-bottom: 20.3%;
     }
      .sidebar {
        background-color: #fff;
        margin: 0%;
        padding-bottom: 24.3%!important;
      }
      .ewan {
        padding-top: 0%;
        margin-top: 20%;
      }
      .py-3 {
     padding-top: 0%!important; 
     padding-bottom: 1rem; 
      }
      .page-holder {
        margin-left: 1%;
      }
      .main {
        width: 90vw;
      }

     </style>
    
  </head>
  <body>
    <header class="p-3 mb-3 bg-light">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img src="./Images/gabai.png" width="90%" class="logo">
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          </ul>
          
          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="./Images/icon.png" alt="mdo" width="40" height="40" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../Homepage.html">Sign out</a></li>
              
            </ul>
            
          </div>
          <h6 class="txt"> User D. Name</h6>
        </div>
      
    </header>
    <div class="d-flex align-items-stretch">
      <div class="sidebar py-3" id="sidebar">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
          <li class="nav-item">
            <a href="./user-homepage.html" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Calendar" data-bs-original-title="Calendar">
              <img src="./Images/calendar.png" alt="mdo" width="40" height="40" class="ewan">
            </a>
          </li>
          <li>
            <a href="./user-notes.html" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Notes" data-bs-original-title="Notes">
              <img src="./Images/notes.png" alt="mdo" width="40" height="40" class="ewan">
              <h6>Notes</h6>
            </a>
          </li>
          <li>
            <a href="./user-classes.html" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Classes" data-bs-original-title="Classes">
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
      <div class="page-holder bg-light">
        <div class="container-fluid main">
          <div class="row">
						<div class="col-12 col-lg-8 col-xl-5 d-flex">
							
						</div>
						<div class="col-12 col-lg-4 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<span class="badge bg-info float-end">Today</span>
									<h5 class="card-title mb-0">Daily feed</h5>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-start">
										<img src="img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Ashley Briggs">
										<div class="flex-grow-1">
											<small class="float-end">5m ago</small>
											<strong>Ashley Briggs</strong> started following <strong>Stacie Hall</strong><br>
											<small class="text-muted">Today 7:51 pm</small><br>

										</div>
									</div>

									<hr>
									<div class="d-flex align-items-start">
										<img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Chris Wood">
										<div class="flex-grow-1">
											<small class="float-end">30m ago</small>
											<strong>Chris Wood</strong> posted something on <strong>Stacie Hall</strong>'s timeline<br>
											<small class="text-muted">Today 7:21 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
												Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing...
											</div>
										</div>
									</div>

									<hr>
									<div class="d-flex align-items-start">
										<img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Stacie Hall">
										<div class="flex-grow-1">
											<small class="float-end">1h ago</small>
											<strong>Stacie Hall</strong> posted a new blog<br>

											<small class="text-muted">Today 6:35 pm</small>
										</div>
									</div>

									<hr>
									<div class="d-grid">
										<a href="#" class="btn btn-primary">Load more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
        </div>
      </div>
      </div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>                 