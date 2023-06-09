<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BabyXpress</title>
  <link rel="stylesheet" href="./index.css">
</head>
<body>
  <header>
    <h1>BabyXpress</h1>
    <img src="./View/resources/logobxp.png" alt="logo BabyXpress" width="120" height="120">
  </header>
    <nav>
        <hr style="width:100%" />
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#vision">Vision and Mission</a></li>
        <li><a href="#why-us">Why Us?</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>

  <main>
    <section id="home">
      <h1>Welcome to BabyXpress!</h1>
      <p>Book a reliable babysitter for your little ones with ease.</p>
      <div class="auth-buttons">
        <button class="register-button" onclick="window.location.href = '../LoginRegister/register.php';">Register</button>
        <button class="login-button" onclick="window.location.href = '../LoginRegister/login.php';">Login</button>
        
      </div>
    </section>
    <section id="about">
      <h2>About Us</h2>
      <div class="about-text">
      <p>We are a team of experienced babysitters dedicated to providing the best care for your children. You don’t have to worry anymore. We are here
        to support hardworking parents that are struggling with childcare. We aim to make it easier for you to find and hire trusted babysitters.</p>
        <p> </p>
        <p>Available whenever and wherever you need.</p>
      </div>
    </section>
    <section id="vision">
      <h2>Vision</h2>
      <p>Our vision is to become the go-to platform for parents looking for trusted babysitters.</p>
      <h3>Mission</h3>
      <p>Our mission is to provide a safe and nurturing environment for your children while you're away.</p>
    </section>
    <section id="why-us">
      <h2>Why Choose Us?</h2>
      <h4>We, Babysitters,</h4>
      <h5>C H E R I S H</h5>
      <ul>
        <li>Caring, a heart-centered approach</li>
        <li>Helpful, always reliable and agile</li>
        <li>Embody a service mindset, advocate for the need of others</li>
        <li>Responsive, uphold a high standard by accepting critics and ensuring a trustworthy growth</li>
        <li>Impactful, desire to deliver services that makes a difference</li>
        <li>Supportivem able to understand and provide the needed service</li>
        <li>Have fun, find joy!</li>
      </ul>
    </section>
    <section id="contact">
      <h2>Contact Us</h2>
      <h6>Have any questions? We'd love to hear from you.</h6>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        <button type="submit">Send</button>
      </form>
    </section>
  </main>
</body>
</html>
