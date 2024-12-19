<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $terms = isset($_POST['terms']) ? 'Yes' : 'No';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Online Registration Form</h2>
        <form id="registrationForm" action="index.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <label for="male"><input type="radio" name="gender" value="Male" id="male" required> Male</label>
                <label for="female"><input type="radio" name="gender" value="Female" id="female" required> Female</label>
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="terms" id="terms" required> I agree to the Terms and Conditions</label>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="submission">
                <h3>Registration Successful! Here is the information you submitted:</h3>
                <ul>
                    <li><strong>Name:</strong> <?= htmlspecialchars($name) ?></li>
                    <li><strong>Email:</strong> <?= htmlspecialchars($email) ?></li>
                    <li><strong>Phone:</strong> <?= htmlspecialchars($phone) ?></li>
                    <li><strong>Address:</strong> <?= nl2br(htmlspecialchars($address)) ?></li>
                    <li><strong>Date of Birth:</strong> <?= htmlspecialchars($dob) ?></li>
                    <li><strong>Gender:</strong> <?= htmlspecialchars($gender) ?></li>
                    <li><strong>Agreed to Terms:</strong> <?= htmlspecialchars($terms) ?></li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>