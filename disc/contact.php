<!doctype html>
<html lang="en">
  <head>
    <title>Raja The Grazing Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../assets/RajaLogo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../design.css">
    </head>
  <body>

    <!-- Navigation Bar -->
    <nav class="d-lg-flex justify-content-between align-items-center container-lg p-3">
        <img src="../assets/RajaLogo.png" alt="Raja The Grazing Table Logo">
        <a class="toggle-button" href="#" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
            <ul class="d-lg-flex list-inline text-end merriweather collapse navbar-lg-collapse" id="navbar-links">
                <a class="grey pe-3 " href="../index.html"><li>About</li></a>
                <a class="grey pe-3" href="packages.html"><li>Packages</li></a>
                <a class="grey pe-3" href="tablescapes.html"><li>Tablescapes</li></a>
                <a class="grey pe-3" href="featured.html"><li>Featured</li></a>
                <a class="grey pe-3" href="testimonials.html"><li>Testimonials</li></a>
                <a class="active" href="contact.php"><li>Contact</li></a>
            </ul>
    </nav>

    <main class="capsule">
    <header class="grid">
        <div class="description centered">
            <h1 class="headerSize uppercase merriweather-bold text-size-100 smallwhite">Raja</h1>
            <h2 class="text-size-25 merriweather smallwhite">Contact Information</h2><br>
        </div>
        <img class="rajaGridImage .img-fluid" src="../assets/rajaContact.png" alt="Raja Image">
    </header><br><br>


    <div class="mx-auto fill">
        <div class="d-lg-flex justify-content-between text-center">
            <h1 class="merriweather-bold text-size-40 readablegrey">Contact us</h1>
            <span class="line d-none d-lg-block"></span>
              <p class="merriweather readablegrey text-lg-start text-size-18">rajanagacity@gmail.com <br>(+63) 900 0000 000</p>
        </div>
        <?php
    if(!empty($_POST["send"])){
        $username = $_POST["fname"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $telephone = $_POST["telephone"];
        $subject = $_POST["subject"];
        $toEmail = $_POST["alexander.espinas@unc.edu.ph"];

        $mailHeaders = "Name: " .$userName."\r\n Email: ".$email."\r\n Phone: ".$telephone."\r\n Subject: ".$subject."\r\n Message: ".$message."\r\n";

        if(mail($toEmail, $username, $mailHeaders)){
            $message = "Your Information is Recieved Successfuly.";
        }
    }
  ?>
        <form action="mail.php" method="POST" style="width: 100%;;">
            <input class="w-100 merriweather ps-lg-3 text-size-18" type="text" id="fname" name="fname" placeholder="Name" required><br><br>
            <input class="w-100 merriweather ps-lg-3 text-size-18" type="text" id="email" name="email" placeholder="Email Adress" required><br><br>
            <input class="w-100 merriweather ps-lg-3 text-size-18" type="tel" id="telephone" name="telephone" placeholder="Phone Number"><br><br>
            <input class="w-100 merriweather ps-lg-3 text-size-18" type="text" id="subject" name="subject" placeholder="Subject" required><br><br>
            <textarea class="w-100 merriweather ps-lg-3 text-size-18" name="message" id="message" placeholder="Enter Message Here." required></textarea>
            <p class="merriweather grey text-size-18">Reply will be sent through Email or Text within 24 hours.</p>
            <?php if(!empty($message)){ ?>
              <p class="merriweather gold text-size-18"><?php echo $message;?></p>
            <?php } ?>
            <input class="merriweather px-4 text-size-18 btnsubmit" type="submit" value="send">
        </form>
    </div><br><br>

    <div class="d-xl-flex justify-content-between text-center">
      <div class="m-auto">
        <h1 class="merriweather-bold text-size-100">We're Here</h1>
        <p class="merriweather text-size-25 fst-italic">Ready for a good cup of Coffee</p><br>
      </div>
      <div class="mapouter mx-auto mx-xl-0"><div class="gmap_canvas"><iframe height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=13.660052,%20123.250755&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
    </div>
    

    <div class="d-lg-flex py-5 justify-content-around">
      <div class="ps-5 d-none d-lg-block">
          <h1 class="merriweather-bold uppercase white ">Raja</h1>
          <h2 class="merriweather text-size-18 white">The Grazing Table</h2>
          <p class="merriweather white">We are eager to go farther with the belief that <br> Raja the Grazing Table is in God???s hands.            </p>
      </div>
      <div class="bottom-phone-nav">
          <h1 class="merriweather-bold uppercase white">Visit Us!</h1>
          <br>
          <ul class="d-flex list-inline align-items-center">
              <li><img src="../assets/Facebook.png" alt="Facebook Logo"></li>
              <li><a class="ps-3 White nav-link text-size-18 merriweather" href="https://www.facebook.com/RajaNagaCity">Raja The Grazing Table</a></li>
          </ul>
          <br> 
          <ul class="d-flex list-inline align-items-center">      
              <li><img src="../assets/Instagram.png" alt="Instagram Logo"></li>
              <li><a class="ps-3 White nav-link text-size-18 merriweather" href="https://www.instagram.com/rajathegrazingtable/">@rajathegrazingtable</a></li>
          </ul>
      </div>
  </div>
    </main>  
    <script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>
    <script type="importmap">
    {
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js",
        "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.esm.min.js"
      }
    }
    </script>
    <script type="module">
      import * as bootstrap from 'bootstrap'

      new bootstrap.Popover(document.getElementById('popoverButton'))
    </script>
    
  </body>
</html>