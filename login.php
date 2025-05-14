<?php
// login.php
session_start();

// Hardcoded Admin Credentials (Change these)
$admin_credentials = [
    'username' => 'admin',
    'password' => 'Admin@1234' // Strong password recommended
];

// Database connection
$host = 'localhost';
$dbname = 'wedding_hall_management';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // First check if admin credentials match
    if ($input_username === $admin_credentials['username'] && 
        $input_password === $admin_credentials['password']) {
        
        $_SESSION['user_id'] = 'admin';
        $_SESSION['username'] = $admin_credentials['username'];
        $_SESSION['role'] = 'admin';
        header("Location: dashboard_admin.php");
        exit();
    }

    // If not admin, check regular users
    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$input_username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($input_password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = 'user';
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid credentials!";
        }
    } catch(PDOException $e) {
        $error = "Database error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {  
    font-family: Arial, sans-serif;  
    background-color: #50aeda;  
    display: flex;  
    justify-content: center;  
    align-items: center;  
    height: 100vh;  
    margin: 0;  
}  

.container {  
    background-color: rgb(255, 255, 255);  
    padding: 20px;  
    border-radius: 15px;  
    box-shadow: 0 0 10px rgba(23, 16, 16, 0.1);  
    width: 300px;  
}  

h2 {  
    text-align: center;  
}  

input[type="text"],  
input[type="password"],  
input[type="email"],  
input[type="tel"] {  
    width: 100%;  
    padding: 10px;  
    margin: 10px 0;  
    border: 1px solid #ccc;  
    border-radius: 4px;  
    box-sizing: border-box;  
}  

input[type="text"]::placeholder,  
input[type="password"]::placeholder,  
input[type="email"]::placeholder,  
input[type="tel"]::placeholder {  
    color: #aaa;  
}  

button {  
    width: 100%;  
    padding: 10px;  
    background-color: #28a745;  
    color: white;  
    border: none;  
    border-radius: 4px;  
    cursor: pointer;  
}  

button:hover {  
    background-color: #218838;  
}  

.link {  
    text-decoration-color: #218838;
    display: block;  
    text-align: center;  
    margin-top: 10px;  
}
        /* .container { max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="password"] { width: 100%; padding: 8px; }
        button { background: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer; }
        .error { color: red; margin-top: 10px; }
        <link rel="stylesheet" href="css/styles.css"> */
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
        
        <form method="POST">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        
        <p>Regular user? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>