<?php
  define("TITLE", "Contact Us | Franklin's Fine Dining");
  include('includes/header.php');
?> 
  <div id="contact">
    <hr>
    
    <h1>Get in touch with us!</h1>

    <form action="" method="POST" id="contact-form">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name">

      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email">

      <label for="message">Your Message:</label>
      <textarea name="message" id="message"></textarea>

      <input type="checkbox" id="subscribe" value="Subscribe" name="subscribe"> <label for="subscribe">Subscribe to newsletter</label>
        
      <input type="submit" class="button next" name="contact_submit" value="Send Message">
    </form>
  </div>
  
<?php include('includes/footer.php'); ?>