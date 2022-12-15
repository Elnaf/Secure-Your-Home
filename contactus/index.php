<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="/contactus/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">28 Rue Notre Dame des Champs, 75006 Paris</div>
          <div class="text-two"></div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one"> 01 49 54 52 00</div>
          <div class="text-two"> 01 49 54 52 00</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">secureyourhome.isep@gmail.com</div>
          <div class="text-two"></div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you require any work from us or have any questions about our services, please send us a message from this page. It is our pleasure to help you.</p>
        <form>
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
            <input type="text" name="message" placeholder="Message">
          
        </div>
        <div class="button">
          <input type="button" value="Send Now" onclick="submitform()">
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>