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
     <style>
        select {
            cursor: pointer;
        }
     

        .container-fluid {
            max-width: 850px;
            margin-top: 20px;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h4 {
            color: #2562a3;
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            transition: 0.3s ease-in-out;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #4568dc;
            box-shadow: 0 0 5px rgba(69, 104, 220, 0.5);
        }

        .card {
            border-radius: 8px;
        }

        .upload-label {
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .upload-label:hover {
            transform: scale(1.1);
        }

        .btn-gradient {
            background: linear-gradient(to right, #4568dc, #b06ab3);
            border: none;
            transition: transform 0.3s ease-in-out, opacity 0.3s;
            font-weight: bold;
            color: white;
        }

        .btn-gradient:hover {
            transform: scale(1.05);
            opacity: 0.9;
            color: white;
        }


        .file-name {
            font-size: 12px;
            margin-bottom: 0px;
            transition: color 0.3s;
        }

        .file-name:hover {
            color: #2562a3;
        }
    </style>
    <style>
/* Add bounce animation */
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}
.bounce {
    animation: bounce 0.5s ease;
}
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(to bottom, #4568dc,#4568dc, #b06ab3);">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon " style="font-size: large;">KTG
                </div>
                <div class="sidebar-brand-text mx-2" style="font-size: large;">DASHBOARD<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
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
                        <a class="collapse-item " href="employee.php">Employee</a>
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
            <li class="nav-item active">
                <a class="nav-link" href="projectcreation.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Project Creation</span></a>
            </li>
            <hr class="sidebar-divider" style="margin-bottom: 0px;">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="dailyupdates.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daily Updates</span></a>
            </li>
            <hr class="sidebar-divider" style="margin-bottom: 0px;">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="reports.php">
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
                    <h4>Add Project</h4>
                    <form action="projectcreation.php" method="GET">
                        <div class="row">
                            <!-- Left Side -->
                            <div class="col-md-7">
                            <div class="form-group">
                                    <label for="customer"><b>Customer</b></label>
                                    <select class="form-control form-control-sm" id="customer">
                                        <option value="">Select Customer Company</option>
                                        <option value="Kurinji Cements">Kurinji Cements</option>
                                        <option value="Gowin">Gowin</option>
                                    </select>
                                </div>
                                <div class="row">
                                <div class="form-group col-6">
                                    <label for="projecttype"><b>Project Type:</b></label>
                                    <select class="form-control form-control-sm" id="projecttype">
                                        <option value="">Select Project Type</option>
                                        <option value="Manager">Designing</option>
                                        <option value="Team Lead">Web Application</option>
                                        <option value="Software Engineer">Mobile Application</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="No. of Days"><b>No. of Days:</b></label>
                                    <input type="number" class="form-control form-control-sm" id="days" placeholder="Enter No. of Days">
                                </div></div>
                                <div class="form-group">
                                    <label for="projecttitle"><b>Project Title:</b></label>
                                    <!-- <textarea class="form-control form-control-sm" id="projecttitle" rows="1" placeholder="Enter Project Title"></textarea> -->
                                    <input type="text" class="form-control form-control-sm" id="projecttitle" placeholder="Enter Project Title">
                                </div>
                                <div class="card p-2 shadow-sm text-center">
                                <div class="form-group" style="margin-top: 8px; margin-bottom:8px;">
    <label for="requirementfile" class="upload-label d-block font-weight-bold">
        <i class="fas fa-folder file-icon fa-lg text-warning upload-icon"></i> <!-- Add upload-icon class -->
        <p class="mt-1">Upload Requirement File</p>
    </label>
    <input type="file" class="form-control-file d-none" id="requirementfile" onchange="updateFileName(this, 'requirementfile-name')">
    <p class="file-name text-muted" id="requirementfile-name">No file chosen</p> <!-- Unique ID -->
</div>
</div>
                                
                            </div>
                
                            <!-- Right Side -->
                            <div class="col-md-5">
                           
<div class="mt-4 position-relative">
    <label for="addemployee"><b>Add Employee:</b></label><br>
    <button type="button" class="btn btn-warning" id="addEmployeeBtn">
        <i class="fas fa-user-plus"></i> Add Employee
    </button>

    <!-- Dropdown Container -->
    <div id="dropdownContainer" class="mt-2 p-3 rounded shadow" 
        style="display: none; border: 1px solid #ccc; background: white; position: absolute; width: auto; min-width: 320px; z-index: 100;">
        
        <div id="employeeDropdown" class="row"></div>

        <!-- OK Button in Bottom-Right -->
        <div class="d-flex justify-content-end mt-2">
            <button type="button" class="btn btn-success btn-sm px-3" id="confirmSelection">OK</button>
        </div>
    </div>

    <!-- Selected Employees Display -->
    <div id="selectedEmployeesContainer" class="mt-2"><b>Selected Employees:</b> 
        <span id="selectedEmployees">Nil</span>
    </div>
</div>
<div class="mt-4 position-relative">
    <label for="addtaskflow"><b>Add Task Flow:</b></label><br>
    <button type="button" class="btn btn-info" id="addtaskflowBtn">
        <i class="fas fa-tasks"></i>&nbsp Add Task Flow 
    </button>

    <!-- Dropdown Container -->
    <div id="dropdownContainer1" class="mt-2 p-3 rounded shadow" 
        style="display: none; border: 1px solid #ccc; background: white; position: absolute; width: auto; min-width: 320px; z-index: 100;">
        
        <div id="taskflowDropdown" class="row"></div>

        <!-- OK Button in Bottom-Right -->
        <div class="d-flex justify-content-end mt-2">
            <button type="button" class="btn btn-success btn-sm px-3" id="confirmSelection1">OK</button>
        </div>
    </div>

    <!-- Selected Employees Display -->
    <div id="selectedtaskflowContainer" class="mt-2"><b>Selected Task Flow:</b> 
        <span id="selectedtaskflow">Nil</span>
    </div>
</div>


                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient btn-lg mt-3">Submit</button>
                    </form>
                </div>
                
                
                <!-- /.container-fluid -->

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
    <script>
// Employee Dropdown Logic
let employees = ["Pavitra", "Jayavarshini", "Suriya", "Mohan", "Naveen", "Anbumani", "Sivakumar", "Venkatesh"];
employees.sort(); // Sort employees alphabetically
let selectedEmployees = new Set();

document.getElementById('addEmployeeBtn').addEventListener('click', function () {
    let dropdownContainer = document.getElementById('dropdownContainer');
    let dropdownList = document.getElementById('employeeDropdown');

    dropdownContainer.style.display = 'block'; // Show dropdown
    dropdownList.innerHTML = ''; // Clear previous list

    employees.forEach(emp => {
        let wrapper = document.createElement('div');
        wrapper.classList.add('col-6', 'd-flex', 'align-items-center', 'mb-1'); 

        let label = document.createElement('label');
        label.textContent = emp;
        label.classList.add('mr-auto', 'text-wrap');
        label.style.wordBreak = 'break-word';
        label.style.flex = '1';
        label.style.marginBottom = "0";
        label.style.whiteSpace = 'normal';

        let checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.value = emp;
        checkbox.checked = selectedEmployees.has(emp);

        checkbox.addEventListener('change', function () {
            if (this.checked) {
                selectedEmployees.add(this.value);
            } else {
                selectedEmployees.delete(this.value);
            }
        });

        wrapper.appendChild(label);
        wrapper.appendChild(checkbox);
        dropdownList.appendChild(wrapper);
    });
});

// OK Button Click - Updates Selection
document.getElementById('confirmSelection').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('dropdownContainer').style.display = 'none';
    document.getElementById('selectedEmployees').textContent = [...selectedEmployees].join(', ') || "Nil";
});

// Task Flow Dropdown Logic
let taskflow = ["UI/UX", "Backend", "Functionality", "Testing", "Designing"];
taskflow.sort();
let selectedTaskflow = new Set();

document.getElementById('addtaskflowBtn').addEventListener('click', function () {
    let dropdownContainer = document.getElementById('dropdownContainer1');
    let dropdownList = document.getElementById('taskflowDropdown');

    dropdownContainer.style.display = 'block'; // Show dropdown
    dropdownList.innerHTML = ''; // Clear previous list

    taskflow.forEach(task => {
        let wrapper = document.createElement('div');
        wrapper.classList.add('col-6', 'd-flex', 'align-items-center', 'mb-1');

        let label = document.createElement('label');
        label.textContent = task;
        label.classList.add('mr-auto', 'text-wrap');
        label.style.wordBreak = 'break-word';
        label.style.flex = '1';
        label.style.marginBottom = "0";
        label.style.whiteSpace = 'normal';

        let checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.value = task;
        checkbox.checked = selectedTaskflow.has(task);

        checkbox.addEventListener('change', function () {
            if (this.checked) {
                selectedTaskflow.add(this.value);
            } else {
                selectedTaskflow.delete(this.value);
            }
        });

        wrapper.appendChild(label);
        wrapper.appendChild(checkbox);
        dropdownList.appendChild(wrapper);
    });
});

// OK Button Click - Updates Task Flow Selection
document.getElementById('confirmSelection1').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('dropdownContainer1').style.display = 'none';
    document.getElementById('selectedtaskflow').textContent = [...selectedTaskflow].join(', ') || "Nil";
});
</script>
<script>
    function updateFileName(input, fileNameId) {
        const fileInput = input.files[0];
        
        // Ensure the input has a file
        const fileNameElement = document.getElementById(fileNameId);
        
        if (fileInput) {
            fileNameElement.textContent = fileInput.name;
            // Change the color to red when a file is uploaded
            fileNameElement.style.color = 'red';
        } else {
            fileNameElement.textContent = "No file chosen";
            // Reset the color if no file is selected
            fileNameElement.style.color = 'initial';
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
                    <a class="btn btn-primary" href="login.php">Logout</a>
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

    // Get the correct file name display element
    const fileNameElement = document.getElementById(fileNameId);
    
    if (!fileNameElement) {
        console.error("Element with ID '" + fileNameId + "' not found!");
        return;
    }

    if (fileInput) {
        fileNameElement.textContent = fileInput.name;
        fileNameElement.style.color = 'red';
    } else {
        fileNameElement.textContent = "No file chosen";
        fileNameElement.style.color = 'initial';
    }

    // Get the upload icon
    const icon = document.querySelector(".upload-icon");
    
    if (icon) {
        icon.classList.add("bounce");

        // Remove animation after 500ms
        setTimeout(() => {
            icon.classList.remove("bounce");
        }, 500);
    } else {
        console.error("Upload icon not found!");
    }
}
</script>
</body>

</html>