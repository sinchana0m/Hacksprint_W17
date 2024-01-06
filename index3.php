<!DOCTYPE html>
<html lang="en">
<head
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alumni Network | VVCE </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">VVCE Alumni Asocciation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <hr>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
        </li>
        </ul>
        <div class="d-flex">
        <a href="login2.html" class="btn btn-outline-light me-2" id="login-link">Login <span class="material-icons"></span></a>
        <a href="signup.html" class="btn btn-outline-light" id="signup-link">Sign Up</a>
        </div>
    </div>
    </div>
</nav>
</header>
<main class="container">
<section class="jumbotron text-center">
    <h1 class="display-4">Welcome to VVCE Alumni Network!</h1>
    <p class="lead">Connect, engage, and stay informed with your fellow alumni.</p>
    <a href="#" class="btn btn-primary"> Chat here</a>
    <hr>
<img src="vvce1.jpg",alt="image.1">
    <hr>
    <h1>Dashboard</h1>
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2019', '2020', '2021', '2022'],
                datasets: [{
                    label: 'No of Registrations',
                    data: [12, 19, 3, 5], 
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 0.5
                },
                {
                    label: 'No of Page Visits',
                    data: [7, 11, 15, 9], 
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 0.5
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <!--<embed type="text/html" src="dashbord.html" width="1000" height="800">-->
</section>
</main>  
<footer class="bg-dark text-white py-4">
    <div class="container">
        <p class="container-fluid">
            <b>Contact-us</b><br>
            <i class="material-icons">phone</i> +91 821 4276201<br>
            <i class="material-icons">mail</i> vvcealumninetwork@gmail.com<br>
            <i class="material-icons">location_on</i> P.B. No.206, Gokulam III Stage, Mysuru - 570 002, Karnataka, INDIA.<hr>
        </p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
