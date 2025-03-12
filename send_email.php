body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
  overflow-x: hidden;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
  position: sticky;
  top: 0;
  z-index: 1000;
}

header nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
}

header nav ul li {
  margin-right: 20px;
}

header nav a {
  color: #fff;
  text-decoration: none;
}

.main-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  width: 100%;
}

section {
  margin-bottom: 20px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  width: 80%;
}

h1 {
  font-size: 24px;
  margin-bottom: 10px;
}

p {
  font-size: 18px;
  margin-bottom: 20px;
}

.apply-btn {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.apply-btn:hover {
  background-color: #444;
}

.submit-btn {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
  margin-top: 20px;
  display: block;
}

.submit-btn:hover {
  background-color: #444;
}

.form-box {
  margin-bottom: 20px;
}

.form-box label {
  display: block;
  margin-bottom: 10px;
}

.form-box input[type="text"], .form-box input[type="email"], .form-box input[type="tel"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

#faq ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

#faq li {
  margin-bottom: 20px;
}

#faq h2 {
  font-size: 18px;
  margin-bottom: 10px;
}

#faq p {
  font-size: 16px;
  margin-bottom: 20px;
}

img {
  width: 100%;
  height: auto;
  margin-bottom: 20px;
}

@media only screen and (max-width: 768px) {
  section {
    width: 90%;
  }
}

@media only screen and (max-width: 480px) {
  section {
    width: 95%;
  }
  .form-box input[type="text"], .form-box input[type="email"], .form-box input[type="tel"] {
    padding: 5px;
  }
}<?php
  // Define the email address to send the email to
  $to = 'loaneasy377@gmail.com';

  // Define the subject of the email
  $subject = 'Loan Application';

  // Retrieve the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $loan_amount = $_POST['loan-amount'];

  // Create the email message
  $message = 'Name: ' . $name . '\nEmail: ' . $email . '\nPhone: ' . $phone . '\nLoan Amount: ' . $loan_amount;

  // Send the email
  mail($to, $subject, $message);

  // Redirect the user to a confirmation page
  header('Location: confirmation.html');
  exit;
?>