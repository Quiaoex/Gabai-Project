<?php

    require_once ('../gabai-database.php');
    $userdetails = $gabai->get_userdata();
    $user = $gabai->get_users();
    $delet = $gabai->delete_user();
    $add = $gabai->add_user();  

    if(isset($userdetails)){
        if(($userdetails['access'] != "admin")){
            echo '<script type="text/javascript">';
            echo ' alert("Cannot Log-in as User need to be Admin")';  //not showing an alert box.
            echo '</script>';
            header("Location: ../Admin-UI/admin-login.php");
        }
    } else {
        header("Location: ../Admin-UI/admin-login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
        <nav class="sb-topnav navbar navbar-expand pb-3 pt-3" style="background-color: #FFE3CA;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="admin-homepage.html"><img src="./assets/img/gabai.png" alt="" width="70"></a>
            <!-- Navbar Search-->
            <span class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></span>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                
                <li><p class="mt-3" style="color: black;" aria-placeholder="Admin Username"><b><?php echo $userdetails['fullname']; ?> </b></p></li>
                <li class="nav-item dropdown mt-2">
                    <a class="nav-link dropdown-toggle" style="color: #542C0C;" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item a-hover"  href="../Admin-UI/logout.php" onclick="">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
            <div id="layoutSidenav_content" style="background-color: #E9E3D7;">
                <main>
                    <div class="container-fluid px-4" style="margin-top: 50px; background-color: #E9E3D7;">
                        <h1 class="mt-4 pt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        <button   data-bs-toggle="modal" data-bs-target="#makereport" class="btn rounded-pill me-2" style="background-color: #542C0C; color: white;">Make Report</button>
                           <button name="add-user" class="btn rounded-pill" data-bs-toggle="modal" data-bs-target="#register" style="background-color: #542C0C; color: white;">ADD user</button>
                            <a href=""><img src="./assets/img/refresh.png" width="50" alt=""></a>
                        </ol>
                        <div class="card mb-4 rounded-5 mb-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Access</th>
                                            <th>Date Created</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Access</th>
                                            <th>Date Created</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody><?php foreach ($user as $user){?>
                                        <tr> <form action="" method="POST">
                                            <input type="hidden" name="user-id" value="<?php $user['user_id'];  ?>">
                                            <td><?php echo $uid = $user['user_id'];  ?></td>
                                            <td><?php echo $user['first_name']; ?></td>
                                            <td><?php echo $user['last_name']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><?php echo $user['access']; ?></td>
                                            <td><?php echo $user['date_created']; ?></td>
                                            <td><button name="delete" data-bs-toggle="modal" data-bs-target ="#deletemodal" type="submit" class="btn btn-danger deletebtn"> DELETE </button></td>
                                            </form></tr>
                                     <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
                <footer class="py-4 bg-light mt-5">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Gabai 2022</div>
                            <div>
                <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                <div type = "" class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="" method="POST">

                                <div class="modal-body">

                                    <input type="hidden" name="delete_id" id="delete_id" value=" <?php echo $uid; ?>">

                                    <h4> Do you want to Delete this Data ??</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> NO </button>
                                    <button type="submit" name="delete" class="btn btn-primary"> Yes !! Delete it. </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                <div type = "" class="modal fade" id="makereport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                <select name="access" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected aria-placeholder="Open this Select Menu"></option>
                                        <option value="xlsx">.xlsx</option>
                                        <option value="xls">.xls</option>
                                        <option value="csv">.csv</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> NO </button>
                                    <button type="submit" name="make_report" class="btn btn-primary">Make Report </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                
                <div type = "hidden" class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content shadow mdlbg ">
                        <div class="modal-header p-5 pb-4 border-bottom-0 text-center">
                            <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                            <h1 class="fw-bold mb-0 fs-1 ">ADD User</h1>
                            <button type="button" class="btn-close closebtn" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>               
                            <div class="modal-body p-5 pt-0">
                            <form class="" action="" method="POST">
                                <div class="row">
                                <div class="form-floating">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" name="fname" id="fname" placeholder="name@example.com">
                                    <label for="firstname">First Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" name="lname" id="lname" placeholder="name@example.com">
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
                                    <input type="password" class="form-control rounded-3 " name="confirm" id="confirmpassword" placeholder="Password">
                                    <label for="confirmpassword">Confirm Password</label>
                                    
                                </div>
                                <div class="form-floating">
                                    <select name="access" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected aria-placeholder="Open this Select Menu"></option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    <label for="floatingSelect">Access (user, admin)</label>
                                    </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid ">
                                    <button class="btn btn-block" style=" background-color: #542C0C; color: white;"name="register" type="submit" value="Create Account">Register</button>
                                    </div>
                                </div>           
                                </form>
                                
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="js/scripts.js">$(document).ready(function () {

    $('.deletebtn').on('click', function () {

    $('#deletemodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#delete_id').val(data[0]);

});
});</script>
    </body>
</html>
