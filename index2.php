<?php
$servername = "localhost"; // 
$username = "root";
$password = "";
$database = "alumni_network";
$conn = new mysqli($servername, $username, $password, $database)
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function sanitizeInput($data) {
    global $conn;
    return mysqli_real_escape_string($conn, trim($data));
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);
    $sqlSelect = "SELECT * FROM student_data WHERE email_id='$email' AND password='$password'";
    $result = $conn->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email_id"] . "<br>";
        }
    } else {
    echo "Invalid email or password.<br>";
    }
$conn->close();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>  Login Form </title>
        <link rel="stylesheet" href="Style2.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="index.php" place method="post">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="form-link">
                            <a href="otp.html" class="forgot-pass">Forgot password?</a>
                        </div>
                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>
                    <div class="form-link">
                        <span>Don't have an account? <a href="signup.html" class="link signup-link">Signup</a</span>
                    </div>
                </div>
                <div class="line"></div>
                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>
            </div>      
        </section>
        <script src="script2.js"></script>
    </body>
</html>
