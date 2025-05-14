<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding_hall_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$contact_success = false;
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Input Validation
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = "Please fill in all required fields (Name, Email, and Message).";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } else {
        // Insert using prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, subject, message, timestamp) VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

        if ($stmt->execute()) {
            $contact_success = true;
            $stmt->close();
        } else {
            $error_message = "Error submitting your message. Please try again.";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        /* Background with subtle gradient */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #ff9966, #ff5e62);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .contact-container {
            width: 50%;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #333;
            margin-bottom: 15px;
            font-size: 28px;
        }

        .contact-form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            text-align: left;
        }

        .contact-form input,
        .contact-form textarea,
        .contact-form select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }

        .contact-form input:focus,
        .contact-form textarea:focus,
        .contact-form select:focus {
            border-color: #ff5e62;
            box-shadow: 0px 0px 5px rgba(255, 94, 98, 0.3);
        }

        .contact-form button {
            background: #ff5e62;
            color: white;
            border: none;
            padding: 12px 18px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
            font-weight: bold;
        }

        .contact-form button:hover {
            background: #e04b53;
            transform: scale(1.05);
        }

        .contact-info {
            margin-top: 20px;
            text-align: center;
        }

        .contact-info p {
            margin: 8px 0;
            font-size: 16px;
        }

        .contact-info a {
            color: #ff5e62;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        /* Success & Error Messages */
        .success-message,
        .error-message {
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            font-size: 16px;
            text-align: center;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
        }
        .back-button {
            position: fixed;
            bottom: 10px;
            left: 10px;
            padding: 8px 16px;
            background-color: #ff6600;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .back-button:hover {
            background-color: #cc5200;
        }

    </style>
</head>
<body>
<a href="javascript:history.back()" class="back-button">Back</a>

    <div class="contact-container">
        <h1>Contact Us</h1>

        <?php if (!empty($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <?php if ($contact_success): ?>
            <div class="success-message">Thank you! Your message has been sent successfully.</div>
        <?php endif; ?>

        <div class="contact-form">
            <form action="contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone (Optional):</label>
                <input type="tel" id="phone" name="phone">

                <label for="subject">Subject:</label>
                <select id="subject" name="subject">
                    <option value="general">General Inquiry</option>
                    <option value="booking">Booking Question</option>
                </select>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Email: <a href="mailto:info@yourweddinghalls.com">info@yourweddinghalls.com</a></p>
            <p>Phone: <a href="tel:+15551234567">+1-555-123-4567</a></p>
            <p>Address: 123 Main Street, Anytown, USA</p>
        </div>
    </div>

</body>
</html>