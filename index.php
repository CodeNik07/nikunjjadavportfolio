<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title>Nikunj Jadav</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">Portfolio.</a></div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#services">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

  <!-- Home Section Start -->
  <section class="home" id="home">
    <div class="home-content">
      <div class="text">
        <div class="text-one">Hello,</div>
        <div class="text-two">I'm Nikunj Jadav</div>
        <div class="text-three">Student</div>
        <div class="text-four">From Surat, Gujarat</div>
      </div>
      <div class="button">
        <a href="#contact"><button>Hire Me</button></a>
      </div>
    </div>
  </section>

  <!-- About Section Start -->
  <section class="about" id="about">
    <div class="content">
      <div class="title"><span>About Me</span></div>
      <div class="about-details">

        <div class="right">
          <div class="topic">Development Is My Passion</div>
          <p>
            Resourceful and dedicated Undergraduate student with excellent analytical skills and a demonstrated
            commitment to solving problem. Strong organizational abilities with proven successes managing
            multiple academic projects. Well-rounded and professional team player dedicated to continuing
            academic pursuits at a collegiate level.
          </p>
          <div class="button">
            <a href="./Nikunj Jadav.pdf"><button>Download CV</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- My Skill Section Start -->
  <!-- Section Tag and Other Div will same where we need to put same CSS -->
  <section class="skills" id="skills">
    <div class="content">
      <div class="title"><span>My Skills</span></div>
      <div class="skills-details">

        <div class="boxes">
          <div class="box">
            <div class="topic">HTML</div>
            <div class="per">90%</div>
          </div>
          <div class="box">
            <div class="topic">CSS</div>
            <div class="per">60%</div>
          </div>
          <div class="box">
            <div class="topic">JavScript</div>
            <div class="per">60%</div>
          </div>
          <div class="box">
            <div class="topic">React</div>
            <div class="per">40%</div>
          </div>
          <div class="box">
            <div class="topic">PHP</div>
            <div class="per">40%</div>
          </div>
          <div class="box">
            <div class="topic">Python</div>
            <div class="per">60%</div>
          </div>
          <div class="box">
            <div class="topic">Java</div>
            <div class="per">50%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- My Services Section Start -->
  <section class="services" id="services">
    <div class="content">
      <div class="title"><span>My Projects</span></div>
      <div class="boxes">
        <div class="box">
          <div class="icon">
            <i class="fas fa-desktop"></i>
          </div>
          <div class="topic">Price Tracker</div>
          <p>This project addresses the need for a dedicated price comparison solution tailored to the Government
            e-Marketplace (GeM) in India. GeM serves as a vital platform for government departments, organizations, and
            public sector undertakings to procure goods and services efficiently.</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-paint-brush"></i>
          </div>
          <div class="topic">Kanban Task Management Tool</div>
          <p>This project presents a simple yet effective Kanban Task Management Tool developed using the MERN stack
            (MongoDB, Express.js, React.js, Node.js). The tool facilitates streamlined task management by allowing users
            to create, update, and track tasks across various stages of a Kanban board. </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Me section Start -->
  <section class="contact" id="contact">
    <div class="content">
      <div class="title"><span>Contact Me</span></div>
      <div class="text">
        <div class="address">Want to get in touch with me? just feel free to drop me a line anytime. </div>
        <div id="contact-form">
          <div id="message"></div>
          <form method="post" action="" name="contactform" id="contactform">
            <input name="name" type="text" id="name" class="inputForm2" placeholder="Name">
            <input name="email" type="text" id="email" placeholder="Email">
            <textarea name="msg" id="comments" placeholder="Message"></textarea>
            <input type="submit" class="send_message transition" id="submit" value="Send Message" name="send" />
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer Section Start -->
  <footer>
    <div class="text">
      <span>Created By <a href="#">Nikunj Jadav</a> | &#169; 2024 All Rights Reserved</span>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
  if (isset($_POST["send"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    //Load Composer's autoloader
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings                     
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'dkthehell007@gmail.com';                     //SMTP username
        $mail->Password   = 'cgdhgjiblgtnitry';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('dkthehell007@gmail.com', 'Contact Form');
        $mail->addAddress('dkthehell007@gmail.com', 'Joe User');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact Form';
        $mail->Body    = "Sender name :- $name <br> Sender email :- $email <br> Sender Message :- $msg";

        $mail->send();
        echo '<div class="success"><p>Message sent successfully</p></div>';
    } catch (Exception $e) {
        echo '<div class="error">Message could not be sent. Mailer Error</div>';
    }


  }
?>

