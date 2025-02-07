<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #4568dc, #b06ab3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }
        .container {
    position: relative;
    z-index: 1; /* Ensures it's not affected by the SweetAlert overlay */
}

        .login-container {
            background: rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            width: 100%;
            max-width: 450px; /* Adjust maximum width */
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-control {
            border-radius: 5px;
            padding: 12px;
            font-size: 18px;
            width: 100%;
        }
        .btn-custom {
            background:rgb(252, 76, 255);
            color: white;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            font-size: 20px;
            padding: 12px;
        }
        .btn-custom:hover {
            background:rgb(154, 77, 218);
            transform: scale(1.05);
            color: white;
        }
        .password-container {
            position: relative;
        }
        .eye-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .heading {
            font-size: 3rem;
            font-weight: bold;
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }
        .bubbles {
            position: absolute;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            top: 0;
            left: 0;
        }
        .bubble {
            position: absolute;
            bottom: -10vh;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: floatUp linear infinite;
        }
        @keyframes floatUp {
            from { transform: translateY(0); opacity: 1; }
            to { transform: translateY(-110vh); opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="bubbles"></div>
    <div class="container">
        <h1 class="heading">KTG Task Manager</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-container">
                    <h2 class="text-white mb-4">Login</h2>
                    <form id="loginForm">
                        <div class="form-group">
                            <input type="text" id="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group password-container">
                            <input type="password" id="password" class="form-control" placeholder="Password">
                            <span class="eye-icon" onclick="togglePassword()">
                                <i class="fa fa-eye-slash" id="toggleEye"></i>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-custom btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            let passwordField = document.getElementById("password");
            let eyeIcon = document.getElementById("toggleEye");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            } else {
                passwordField.type = "password";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            }
        }
        document.addEventListener("DOMContentLoaded", function () {
            const bubbleContainer = document.querySelector(".bubbles");
            for (let i = 0; i < 30; i++) {
                let bubble = document.createElement("div");
                let size = Math.random() * 60 + 10;
                bubble.classList.add("bubble");
                bubble.style.width = `${size}px`;
                bubble.style.height = `${size}px`;
                bubble.style.left = `${Math.random() * 100}vw`;
                bubble.style.animationDuration = `${Math.random() * 5 + 3}s`;
                bubble.style.animationDelay = `${Math.random() * 2}s`;
                bubbleContainer.appendChild(bubble);
            }
        });
        
    </script>
<script>
    $(document).ready(function() {
        $("#loginForm").submit(function(event) {
            event.preventDefault(); // Prevent default form submission
            let username = $("#username").val();
            let password = $("#password").val();

            if (username === "ktgadmin" && password === "ktg2025") {
                Swal.fire({
                    title: "Login Successful!",
                    text: "Welcome back to KTG Task Manager",
                    icon: "success",
                    confirmButtonColor: "#6a0dad",
                    backdrop: `rgba(0, 0, 0, 0.4)`, // Darken overlay but keep content fixed
                    allowOutsideClick: false, // Prevents closing on outside click
                    didOpen: () => {
                        document.body.style.overflow = 'hidden'; // Prevents page movement
                    },
                    willClose: () => {
                        document.body.style.overflow = 'auto'; // Restores scrolling
                    }
                }).then(() => {
                    window.location.href = "index.php";
                });
            } else {
                Swal.fire({
                    title: "Login Failed",
                    text: "Invalid username or password!",
                    icon: "error",
                    confirmButtonColor: "#ff4c4c",
                    backdrop: `rgba(0, 0, 0, 0.4)`, // Ensures no displacement
                    didOpen: () => {
                        document.body.style.overflow = 'hidden';
                    },
                    willClose: () => {
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });
    });
</script>



</body>
</html> -->
