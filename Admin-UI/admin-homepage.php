<?php

    require_once ('../gabai-database.php');
    $userdetails = $gabai->get_userdata();

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
                            <button class="btn rounded-pill" style="background-color: #542C0C; color: white;">Make Report</button>
                            <a href=""><img src="./assets/img/refresh.png" width="50" alt=""></a>
                        </ol>
                        <div class="card mb-4 rounded-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Edit Acess</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Edit Acess</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                echo   "<tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <th><form action='POST'><button class='btn btn-primary' name='admin' type='submit'>Admin</button>
                                            <button class='btn btn-primary' name='user' type='submit'>User</button></form></th>
                                            <th><form action='POST'><button class='btn btn-danger' name='delete' type='submit'>Delete</button></form></th>
                                        </tr>";
                                        ?>
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
    </body>
</html>
