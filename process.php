 <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
 $email = $_POST['email'];
  $dob = $_POST['dob'];
  $password = $_POST['password'];

  // Simple validation
 if (empty($name) || empty($email) || empty($dob) || empty($password)) {
   echo "Please fill in all fields.";
  } else {
    echo "Registration Successful!<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
  echo "Date of Birth: $dob<br>";
    // You can add more logic like storing the data in a database
  }
}
?> 



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surprise Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h1>Register Here</h1>
    <form id="registrationForm">
      <div class="form-field">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      
      <div class="form-field">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-field">
        <label for="phone">Phone Number:</label>
        <div class="phone-input">
          <span class="country-code">+91</span>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" placeholder="Enter 10-digit number" required>
        </div>
      </div>
      
      <div class="form-field">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      
      <div class="form-field">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      
      <div class="form-field">
        <button type="submit" id="submitBtn">Submit</button>
      </div>
    </form>
  </div>

  <!-- Surprise Popup -->
  <div id="popup" class="popup" style="display: none;">
    <div class="popup-content">
      <h2>Thank you for registering!</h2>
      <p>Your registration was successful. Here are your details:</p>
      <ul id="userDetails"></ul>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>

