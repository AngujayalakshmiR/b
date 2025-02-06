<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Task Manager</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="icon" type="image/png" href="img/ktglogo.jpg">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css"> -->
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        
        /* Gradient background for thead */
        thead  {
            background: linear-gradient(to right, #4568dc, #b06ab3);
            color: white;
        }

        /* Center align action buttons */
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        /* Styling for buttons */
        .btn-action {
            border: none;
            background: transparent;
            font-size: 18px;
            transition: transform 0.2s ease-in-out;
        }

        .btn-action:hover {
            transform: scale(1.2);
        }

        .btn-edit {
            color: #28a745;
        }

        .btn-delete {
            color: #dc3545;
        }

        /* Add Customer Button */
        .add-employee-btn {
            float: right;
            background: #007bff;
            color: white;
            font-size: 16px;
            padding: 8px 16px;
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
        }

        .add-employee-btn i {
            margin-right: 5px;
        }

        .add-employee-btn:hover {
            background: #0056b3;
            transform: scale(1.1);
        }

         /* Modal Header Gradient Background */
    .modal-header {
        background: linear-gradient(to right, #4568dc, #b06ab3);
        color: white;
    }

    /* Adjust close button color */
    .modal-header .close {
        color: white;
        opacity: 1;
    }

    .modal-header .close:hover {
        color: #f8f9fa;
    }


    .upload-icon {
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
}

.upload-label:hover .upload-icon {
    transform: scale(1.2);
    color: #007bff;
}

.upload-icon.bounce {
    animation: bounce 0.5s ease-in-out;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

/* Icon Styling */
.photo-icon{
    color: #5796d8;
}
.aadhar-icon{
    color: rgb(212, 212, 69);
}
.pan-icon{
    color:rgb(250, 148, 65);
}
.photo-icon, .aadhar-icon, .pan-icon {
    font-size: 24px;
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
}

/* Hover Animation */
.photo-icon:hover, .aadhar-icon:hover, .pan-icon:hover {
    transform: scale(1.3);
    color: #007bff;
}

/* Bounce Effect on File Icon */
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

.photo-icon:hover, .aadhar-icon:hover, .pan-icon:hover {
    animation: bounce 0.5s ease-in-out;
}

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(to bottom, #4568dc,#4568dc, #b06ab3);">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon " style="font-size: large;">KTG
                </div>
                <div class="sidebar-brand-text mx-2" style="font-size: large;">DASHBOARD<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="margin-bottom: 0px;">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="customer.php">Customer</a>
                        <a class="collapse-item active" href="employee.php">Employee</a>
                        <a class="collapse-item" href="designation.php">Employee Type</a>
                        <a class="collapse-item" href="projecttype.php">Project Type</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider" style="margin-bottom: 0px;">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Project Creation</span></a>
            </li>
            <hr class="sidebar-divider" style="margin-bottom: 0px;">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daily Updates</span></a>
            </li>
            <hr class="sidebar-divider" style="margin-bottom: 0px;">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Work Reports</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="img/profileicon.png" style="width: 3rem;height: 3rem;">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Master > Employee Details</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employee Details <button class="add-employee-btn" data-toggle="modal" data-target="#addEmployeeModal">
                                <i class="fas fa-plus"></i> Add Employee
                            </button></h6>
                           
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="thead">
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Ph Number</th>
                                            <th>Address</th>
                                            <th>Photo</th>
                                            <th>Aadhar Card</th>
                                            <th>Pan Card</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>JayaVarshini</td>
                                            <td>App Developer</td>
                                            <td>1234567890</td>
                                            <td>No.123, Nehru Nagar, Karur-639006, Tamil Nadu, India</td>
                                            <td>
                                                <i class="fas fa-camera-retro photo-icon" title="Photo"></i>
                                            </td>
                                            <td>
                                                <i class="fas fa-id-card aadhar-icon" title="Aadhar Card"></i>
                                            </td>
                                            <td>
                                                <i class="fas fa-id-badge pan-icon" title="Pan Card"></i>
                                            </td>
                                            <td class="action-buttons">
                                                <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Suriya</td>
                                            <td>Full Stack Developer</td>
                                            <td>9876543210</td>
                                            <td>No.143, Vijaya Street, Chennai-5, Tamil Nadu, India</td>
                                            <td>
                                                <i class="fas fa-camera-retro photo-icon" title="Photo"></i>
                                            </td>
                                            <td>
                                                <i class="fas fa-id-card aadhar-icon" title="Aadhar Card"></i>
                                            </td>
                                            <td>
                                                <i class="fas fa-id-badge pan-icon" title="Pan Card"></i>
                                            </td>
                                            <td class="action-buttons">
                                                <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mohan</td>
                                            <td>UI / UX Designer</td>
                                            <td>4567891234</td>
                                            <td>No.11/A, Sengunthar Nagar, Karur-639006, Tamil Nadu, India</td>
                                            <td>
                                                <i class="fas fa-camera-retro photo-icon" title="Photo"></i>
                                            </td>
                                            <td>
                                                <i class="fas fa-id-card aadhar-icon" title="Aadhar Card"></i>
                                            </td>
                                            <td>
                                                <i class="fas fa-id-badge pan-icon" title="Pan Card"></i>
                                            </td>
                                            <td class="action-buttons">
                                                <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn-action btn-delete"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>


<!-- Add Employee Modal -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 25px; overflow: hidden;">
            <div class="modal-header" style="border-top-left-radius: 25px; border-top-right-radius: 25px;"      >
                <h5 class="modal-title" id="addEmployeeModalLabel">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <!-- Left Side -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="employeeName">Name:</label>
                                <input type="text" class="form-control" id="employeeName" placeholder="Enter employee name">
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation:</label>
                                <input type="text" class="form-control" id="designation" placeholder="Enter designation">
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number:</label>
                                <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="employeeAddress">Address:</label>
                                <textarea class="form-control" id="employeeAddress" rows="3" placeholder="Enter address"></textarea>
                            </div>
                        </div>
<!-- Right Side -->
<div class="col-md-6">
    <div class="card p-3 shadow-sm">
        
        <div class="form-group text-center">
            <label for="employeePhoto" class="upload-label d-block font-weight-bold">
                <i class="fas fa-camera-retro fa-2x text-primary upload-icon"></i>
                <p class="mt-2">Upload Photo</p>
            </label>
            <input type="file" class="form-control-file d-none" id="employeePhoto" onchange="updateFileName(this, 'photoFileName')">
            <p class="file-name mt-2 text-muted" id="photoFileName">No file chosen</p>
        </div>

        <div class="form-group text-center">
            <label for="aadharCard" class="upload-label d-block font-weight-bold">
                <i class="fas fa-id-card fa-2x text-success upload-icon"></i>
                <p class="mt-2">Upload Aadhar Card</p>
            </label>
            <input type="file" class="form-control-file d-none" id="aadharCard" onchange="updateFileName(this, 'aadharFileName')">
            <p class="file-name mt-2 text-muted" id="aadharFileName">No file chosen</p>
        </div>

        <div class="form-group text-center">
            <label for="panCard" class="upload-label d-block font-weight-bold">
                <i class="fas fa-id-badge fa-2x text-danger upload-icon"></i>
                <p class="mt-2">Upload Pan Card</p>
            </label>
            <input type="file" class="form-control-file d-none" id="panCard" onchange="updateFileName(this, 'panFileName')">
            <p class="file-name mt-2 text-muted" id="panFileName">No file chosen</p>
        </div>

    </div>
</div>


                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Add Employee</button>
                </form>
            </div>
        </div>
    </div>
</div>


            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Knock the Globe Technologies 2025</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<!-- Bootstrap 4.6.0 JavaScript -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script> -->
<script>
    function updateFileName(input, fileNameId) {
    const fileInput = input.files[0];
    
    // Ensure the input has a file
    if (fileInput) {
        document.getElementById(fileNameId).textContent = fileInput.name;
    } else {
        document.getElementById(fileNameId).textContent = "No file chosen";
    }

    // Add bounce animation to the icon
    const icon = input.previousElementSibling.querySelector(".upload-icon");
    icon.classList.add("bounce");

    // Remove animation after it plays once
    setTimeout(() => {
        icon.classList.remove("bounce");
    }, 500);
}

</script>
</body>

</html>