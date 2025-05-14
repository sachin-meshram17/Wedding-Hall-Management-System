<?php
$host = 'localhost';  
$dbname = 'wedding_hall_management';  
$username = 'root';  // Default for XAMPP  
$password = '';  // Default is empty for XAMPP  

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
<?php
//require_once 'db.php';

if (!$pdo) {
    die("Database connection is not established.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $mobile = $_POST['mobile'];

    try {
        $stmt = $pdo->prepare("INSERT INTO users (fullname, email, username, password, mobile) VALUES (:fullname, :email, :username, :password, :mobile)");
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->execute();

        echo "<script>alert('Registration successful! Redirecting to dashboard...'); window.location.href='dashboard.php';</script>";
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Register</title>  
    <link rel="stylesheet" href="css/styles.css">  
</head>  
<body>  

<div class="container">  
    <h2>Register</h2>  
    <form method="POST" action="register.php">
    <input type="text" name="fullname" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="mobile" placeholder="Mobile Number" required>
    <button type="submit">Register</button>
    
    </form>
</div>  

</body>  
</html>