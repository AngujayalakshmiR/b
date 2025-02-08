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
 .thead th {
    font-size: 16px;  /* Reduce text size */
    padding: 6px 4px; /* Reduce padding */
    white-space: nowrap; /* Prevent text from wrapping */
}

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

 /* Reduce table font size */
 #dataTable {
        font-size: 14px; /* Adjust size as needed */
    }
tbody{
    border-color: #f8f9fa;
}
    /* Reduce padding for table cells */
    #dataTable th, #dataTable td {
        padding: 5px; /* Reduce padding */
        white-space: nowrap; /* Prevent text wrapping */
    }

    .status-icon {
            font-size: 1.2rem;
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }
        .ongoing { color: orange; animation: spin 1s linear infinite; }
        .pending { color: red; animation: pulse 1s infinite alternate; }
        .completed { color: green; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        @keyframes pulse { 0% { opacity: 0.6; } 100% { opacity: 1; } }
        
        /* Styled Dropdown */
        .status-dropdown {
            font-weight: bold;
            border: none;
            padding: 6px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
        }
        .status-ongoing { background: orange; color: white; }
        .status-completed { background: green; color: white; }
/* Fix missing left and bottom borders */
.table thead tr:first-child th:first-child {
    border-top-left-radius: 15px;
}
.table thead tr:first-child th:last-child {
    border-top-right-radius: 15px;
}
.table tbody tr:last-child td:first-child {
    border-bottom-left-radius: 15px;
}
.table tbody tr:last-child td:last-child {
    border-bottom-right-radius: 15px;
}
.table-container {
    border-radius: 15px;
    overflow: hidden;
    border: 1px solid #dee2e6; /* Ensures full border visibility */
}

/* Remove direct table border to avoid double borders */
.table {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
}

/* Apply border to all cells */
.table th, .table td {
    border: 1px solid #dee2e6;
}
    </style>

<style>
    .sidebar-brand-icon, .sidebar-brand-text {
        font-size: large;
        background: linear-gradient(to right, #4568dc, #b06ab3);
        -webkit-background-clip: text; /* Clip background to text */
        -webkit-text-fill-color: transparent; /* Make text color transparent to show gradient */
        font-weight: bold; /* Optional: Makes text more prominent */
    }
    /* Sidebar background */
    .sidebar {
        background-color: white !important;
        width: 250px; /* Adjust according to sidebar width */
    }

    /* Sidebar link styles */
    .l a.k{
        color: #333 !important; /* Dark text */
        border-radius: 8px; /* Rounded corners */
        transition: all 0.3s ease-in-out;
        padding: 12px 15px;
        font-size: 16px; /* Increased font size */
        display: flex;
        align-items: center;
        gap: 10px; /* Space between icon and text */
        width: 85%; /* Ensure links don’t take full width */
        margin: 0 auto; /* Center align */
    }

    /* Ensure icons are black */
    .l a.k i {
        color: black !important;
        font-size: 18px; /* Slightly larger icons */
        transition: color 0.3s ease-in-out;
    }

    /* Hover effect (only for non-active items) */
    .l:not(.active) a.k:hover {
        background-color: #f0f0f0 !important; /* Light grey */
        color: #000 !important; /* Dark text */
        border-radius: 8px;
        width: 90%; /* Keep it smaller than the sidebar */
        margin: 0 auto; /* Center align */
    }

    /* Keep icons black on hover for non-active items */
    .l:not(.active) a.k:hover i {
        color: black !important;
    }

    /* Active item style */
    .l.active {
        width: 90%;
        background: linear-gradient(to right, #4568dc, #b06ab3);
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        transform: scale(1.02); /* Slight lift effect */
        margin: 0 auto; /* Center align */
    }
    .collapse-item.active{
        width: 90%;
        background:white;
        color:white;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        transform: scale(1.02); /* Slight lift effect */
        margin: 0 auto; /* Center align */
    }
    /* Active item text & icon color */
    .l.active a.k{
        color: white !important;
    }

    /* Ensure icons turn white inside active links */
    .l.active a.k i {
        color: white !important;
    }
    footer{
        background:linear-gradient(to right, #4568dc, #b06ab3);
        color:white;
        padding:15px;
    }
    .master.active{
        width: 90%;
        background: linear-gradient(to right, #4568dc, #b06ab3);
        color:white;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        transform: scale(1.02); /* Slight lift effect */
        margin: 0 auto; /* Center align */
    }
    .master.active.collapse{
        background:white;
        border-radius: 8px;

    }
    .collapse{
        background:	#F8F8F8;
        border-radius: 10px;
        color:white;
    }
    .collapse-item.active{
        width: 90%;
        background: linear-gradient(to right, #4568dc, #b06ab3);
        color:white;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        transform: scale(1.02); /* Slight lift effect */
        margin: 0 auto; /* Center align */
    }
</style>

</head>



<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: white;">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon" style='font-size:20px'><b>KTG</b></div>
    <div class="sidebar-brand-text mx-2" style='font-size:20px'><b>DASHBOARD</b></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item l ">
    <a class="nav-link k" href="index.php" style="color: white;">
        <i class="fas fa-fw fa-tachometer-alt" style="font-size:20px"></i>
        <span><b>Dashboard</b></span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider" style="margin-bottom: 0px; color:#4568dc">

<!-- Nav Item - Master -->
<li class="nav-item l master">
    <a class="nav-link k collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo" style="color: black;">
        <i class="fas fa-fw fa-clipboard-list" style="font-size:20px; color:black;"></i>
        <span><b>Master</b></span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="customer.php" style="color: black;"><b>Customer</b></a>
            <a class="collapse-item" href="employee.php" style="color: black;"><b>Employee</b></a>
            <a class="collapse-item" href="designation.php" style="color: black;"><b>Designation</b></a>
            <a class="collapse-item" href="projecttype.php" style="color: black;"><b>Project Type</b></a>
            <a class="collapse-item " href="taskflow.php" style="color: black;"><b>Task Flow</b></a>
        </div>
    </div>
</li> 

<!-- Divider -->
<hr class="sidebar-divider" style="margin-bottom: 0px;">

<!-- Nav Item - Project Creation -->
<li class="nav-item l">
    <a class="nav-link k" href="projectcreation.php" style="color: black;">
        <i class="fas fa-fw fa-folder" style="font-size:20px"></i>
        <span><b>Project Creation</b></span>
    </a>
</li>

<hr class="sidebar-divider" style="margin-bottom: 0px;">

<!-- Nav Item - Daily Updates -->
<li class="nav-item l active">
    <a class="nav-link k" href="dailyupdates.php" style="color: black;">
        <i class="fas fa-fw fa-table" style="font-size:20px"></i>
        <span><b>Daily Updates</b></span>
    </a>
</li>

<hr class="sidebar-divider" style="margin-bottom: 0px;">

<!-- Nav Item - Work Reports -->
<li class="nav-item l">
    <a class="nav-link k" href="reports.php" style="color: black;">
        <i class="fas fa-fw fa-chart-area" style="font-size:20px"></i>
        <span><b>Work Reports</b></span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle side border-0" id="sidebarToggle"></button>
</div>

</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style=" background:linear-gradient(to right, #b06ab3, #4568dc);">

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

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="img-profile rounded-circle"
                src="img/profile.png" style="width: 3rem;height: 3rem;">
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
                    <h1 class="h3 mb-2 text-gray-800">Master > Daily Updates</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employee Details </h6>
                            <div> 
    <input type="date" id="dateFilter" class="form-control d-inline" style="width: auto;">
</div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                            <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Date</th>
            <th>Company</th>
            <th>Project Title</th>
            <th>Task Flow</th>
            <th>Total Days</th>
            <th>Task Type</th>
            <th>Description</th>
            <th>Duration</th>
            <th>Actual Time</th>
            <th>Module Status</th>
            <th>Project Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>JayaVarshini</td>
            <td>01-02-2025</td>
            <td>ABC Corp</td>
            <td>The project requires inbuilt updations and notifications.</td>
            <td>UI/UX,Backend,Functionality,Testing</td>
            <td>5</td>
            <td>Backend</td> <!-- Task Type -->
            <td>I completed half backend work</td>
            <td>4.5</td>
            <td>2</td>
            <td>
                <i class="fas fa-check-circle status-icon completed"></i>&nbsp&nbsp Completed
            </td> <!-- Module Status -->
            <td class="project-status">
                <!-- Status will be updated dynamically -->
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>JayaVarshini</td>
            <td>01-02-2025</td>
            <td>ABC Corp</td>
            <td>The project requires inbuilt updations and notifications.</td>
            <td>UI/UX,Backend,Functionality,Testing</td>
            <td>5</td>
            <td>Backend</td> <!-- Task Type -->
            <td>I completed half backend work</td>
            <td>4.5</td>
            <td>2</td>
            <td>
                <i class="fas fa-check-circle status-icon completed"></i>&nbsp&nbsp Completed
            </td> <!-- Module Status -->
            <td class="project-status">
                <!-- Status will be updated dynamically -->
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>JayaVarshini</td>
            <td>07-02-2025</td>
            <td>ABC Corp</td>
            <td>The project requires inbuilt updations and notifications.</td>
            <td>UI/UX,Backend,Functionality,Testing</td>
            <td>5</td>
            <td>Backend</td> <!-- Task Type -->
            <td>I completed half backend work</td>
            <td>4.5</td>
            <td>2</td>
            <td>
                <i class="fas fa-check-circle status-icon completed"></i>&nbsp&nbsp Completed
            </td> <!-- Module Status -->
            <td class="project-status">
                <!-- Status will be updated dynamically -->
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>JayaVarshini</td>
            <td>07-02-2025</td>
            <td>ABC Corp</td>
            <td>The project requires inbuilt updations and notifications.</td>
            <td>UI/UX,Backend,Functionality,Testing</td>
            <td>5</td>
            <td>Backend</td> <!-- Task Type -->
            <td>I completed half backend work</td>
            <td>4.5</td>
            <td>2</td>
            <td>
                <i class="fas fa-check-circle status-icon completed"></i>&nbsp&nbsp Completed
            </td> <!-- Module Status -->
            <td class="project-status">
                <!-- Status will be updated dynamically -->
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>JayaVarshini</td>
            <td>08-02-2025</td>
            <td>ABC Corp</td>
            <td>The project requires inbuilt updations and notifications.</td>
            <td>UI/UX,Backend,Functionality,Testing</td>
            <td>5</td>
            <td>Backend</td> <!-- Task Type -->
            <td>I completed half backend work</td>
            <td>4.5</td>
            <td>2</td>
            <td>
                <i class="fas fa-check-circle status-icon completed"></i>&nbsp&nbsp Completed
            </td> <!-- Module Status -->
            <td class="project-status">
                <!-- Status will be updated dynamically -->
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>JayaVarshini</td>
            <td>08-02-2025</td>
            <td>ABC Corp</td>
            <td>The project requires inbuilt updations and notifications.</td>
            <td>UI/UX,Backend,Functionality,Testing</td>
            <td>5</td>
            <td>Testing</td> <!-- Task Type -->
            <td>I completed half backend work</td>
            <td>4.5</td>
            <td>2</td>
            <td>
                <i class="fas fa-check-circle status-icon completed"></i>&nbsp&nbsp Completed
            </td> <!-- Module Status -->
            <td class="project-status">
                <!-- Status will be updated dynamically -->
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




            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                       <h6> <b>Copyright &copy; Knock the Globe Technologies 2025</b></h6>
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
 document.addEventListener("DOMContentLoaded", function () {
    let today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
    let dateInput = document.getElementById("dateFilter");

    dateInput.value = today; // Set default to today
    filterByDate(); // Automatically filter on page load

    // Apply filter immediately when date is changed
    dateInput.addEventListener("change", filterByDate);
});

function filterByDate() {
    let selectedDate = document.getElementById("dateFilter").value;
    if (!selectedDate) return;

    let formattedSelectedDate = selectedDate.split("-").reverse().join("-"); // Convert to DD-MM-YYYY
    let table = document.getElementById("dataTable");
    let rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");

    for (let i = 0; i < rows.length; i++) {
        let dateCell = rows[i].getElementsByTagName("td")[2];
        if (dateCell) {
            let rowDate = dateCell.textContent.trim();
            rows[i].style.display = (rowDate === formattedSelectedDate) ? "" : "none";
        }
    }
}
</script>
<script>
setTimeout(function () {
    document.querySelectorAll("tbody tr").forEach(row => {
        console.log(`Row has ${row.cells.length} cells`);
        
        if (row.cells.length < 13) {
            console.warn("Skipping row: Some cells are missing.");
            return;
        }
        
        let taskTypeCell = row.cells[7];
        let moduleStatusCell = row.cells[11];
        let projectStatusCell = row.cells[12];
        
        let taskType = taskTypeCell.innerText.trim();
        let moduleStatus = moduleStatusCell.innerText.trim();
        
        console.log(`Task Type: ${taskType}, Module Status: ${moduleStatus}`);
        
        if (moduleStatus.includes("Completed")&&taskType.includes("Testing") ) {
            projectStatusCell.innerHTML = `
                <button class="btn btn-success btn-sm" onclick="markCompleted(this)">Mark as Completed</button>
            `;
        } else {
            projectStatusCell.innerHTML = `
                <button class="btn btn-warning btn-sm">Ongoing</button>
            `;
        }
    });
}, 2000);

function markCompleted(button) {
    let row = button.closest("tr");
    let projectStatusCell = row.cells[12]; // Adjusted to match correct index
    
    projectStatusCell.innerHTML = `
        <span class="text-success"><i class="fas fa-check-circle"></i> Completed</span>
    `;
}
</script>
</body>

</html>