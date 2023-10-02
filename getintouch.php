<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $FullName = $_POST['FullName'];
        $Email = $_POST['Email'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Message = $_POST['Message'];

    $messageBody = 'Full Name: $FullName\nEmail: $Email\nPhone Number: $PhoneNumber\nMessage: $Message';

    if ( $messageBody) {
        echo "Your for is submetted.";
    } }
?>
<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="./getintouch.php" method="POST">
              <div>
                <input type="text" placeholder="Full Name"name="FullName" />
              </div>
              <div>
                <input type="email" placeholder="Email"name="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number"name="PhoneNumber"  />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message"name="Message"  />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>