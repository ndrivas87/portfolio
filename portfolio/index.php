<?php
  //Message Vars
  $msg='';
  $msgClass='';
  //Check for submit
  if(filter_has_var(INPUT_POST, 'submit')){
    //Get Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //Check required feilds
    if(!empty($email) && !empty($name) && !empty($message)){
      //Passed
      //Check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        //failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      }else{
        //passed
        // Recipient Email
        $toEmail = 'ndrivas87@gmail.com';
        $subject = 'Contact Request From'.$name;
        $body = 'Contact Request
        <h4>Name</h4><p>'.$name.'</p>
        <h4>Email</h4><p>'.$email.'</p>
        <h4>Message</h4><p>'.$message.'</p>
        ';
      
        //EMail headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = "Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers = "From: " .$name. "<".$email.">". "\r\n";
        
        if(mail($toEmail, $subject, $body, $headers)){
          $msg = 'Your email has been sent';
        $msgClass = 'alert-success';

        }else{
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        }
      }
    }else{
      //Failed
      $msg = 'Please fill in all feilds';
      $msgClass = 'alert-danger';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Nancy Rivas | Front End Developer</title>
    <script
      src="https://kit.fontawesome.com/a09af50511.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/styles.css" />
  </head>

  <body>
    <header class="hero">
      <nav
        class="navbar navbar-expand-lg navbar-dark primary-color bd-navbar p-2"
      >
        <div class="container-fluid">
          <a class="navbar-brand pr-5 secondary-text" href="#">NR</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resume.html">Resume</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav ml-md-auto" id="social">
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/_nancy.rivas/"
                ><i class="fab fa-instagram"></i
              ></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://twitter.com/nrivas_dev"
                ><i class="fab fa-twitter"></i
              ></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/ndrivas87"
                ><i class="fab fa-github"></i
              ></a>
            </li>
          </ul>

          <a
            class="btn d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3 secondary-text"
            href="#contactMe"
            >Contact Me</a
          >
        </div>
      </nav>

      <div id="particles-js"></div>

      <div class="greeting d-flex justify-content-center">NancyRivas</div>
      <div class="languages">
        <i class="fab fa-html5 fa-3x"></i>
        <i class="fab fa-css3-alt fa-3x"></i>
        <i class="fab fa-js-square fa-3x"></i>
      </div>
    </header>

    <section class="container" id="bio">
      <div class="row justify-content-lg-between">
        <div class="col-md main-info">
          <h2>A little about me</h2>
          <p>
            Hello I’m Nancy a UX/UI designer front end developer and content
            creator from Canada. I know what you may be thinking, “That’s alot
            for one person to do”, and the only way I can explain it is that I
            absolutely love what I do. I started off as a front end developer
            and quickly fell in love with all that is creating for the web.
            Therefore I began learning on my own and expanding my skills day by
            day
          </p>
        </div>
      </div>
    </section>

    <section class="skills">
      <div class="container">
        <div class="row">
          <div class="col-md skills-icon">
            <i class="fas fa-pen-nib fa-2x"></i>
            <p>
            A good design goes a long way. I start with researching good user experience for all my projects. 
            I then design and implement them into my projects.
            </p>
          </div>
          <div class="col-md skills-icon">
            <i class="fas fa-laptop-code fa-2x"></i>
            <p>
            My favourite part in all of my projects is to get down and code. Using html, 
            css and javascript I can provide style and functionality to my sites.
            </p>
          </div>
          <div class="col-md skills-icon">
            <i class="fas fa-camera fa-2x"></i>
            <p>
            When I’m not coding, you can find me creating all sorts of content. This includes photography, 
            videography and drawing. I love creating and seeing what I can come up with.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="projects" id="projects">
      <h1>Recent Projects</h1>
      <div class="container">
        <div class="row">
          <div class="justify-content-center">
            <button class="btn btn-default filter-button" data-filter="all">
              All
            </button>
            <button
              class="btn btn-default filter-button"
              data-filter="web"
            >
              Web
            </button>
            <button class="btn btn-default filter-button" data-filter="design">
              Design
            </button>
            <button class="btn btn-default filter-button" data-filter="design">
              React
            </button>
          </div>

          <div class="row">
            <div class="gallery-item col-md-4 col-sm-6 filter design">
              <img src="photos/bundle.jpg" class="img-fluid"/>
              <div class="overlay">
                <h3 class="overlay-heading">IOS 14 Icon Pack</h3>
                <a href="resume.html" class="btn btn-light">Learn More</a>
              </div>
            </div>
            <div class="gallery-item col-md-4 col-sm-6 filter web">
              <img src="photos/fooddorm.jpg" class="img-fluid" />
              <div class="overlay">
                <h3 class="overlay-heading">Chef Food Dorm</h3>
                <a href="https://www.cheffooddorm.com/" class="btn btn-light">Visit Site</a>
              </div>
            </div>
            <div class="gallery-item col-md-4 col-sm-6 filter web">
              <img src="http://fakeimg.pl/365x365/" class="img-fluid" />
            </div>
            <div class="gallery-item col-md-4 col-sm-6 filter design">
              <img src="http://fakeimg.pl/365x365/" class="img-fluid" />
            </div>
            <div class="gallery-item col-md-4  filter design">
              <img src="http://fakeimg.pl/365x365/" class="img-fluid" />
            </div>
            <div class="gallery-item col-lg-4 filter design">
              <img src="http://fakeimg.pl/365x365/" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="parralax">
        <div class="quote">
          <div class="bubble">
            <p>I'm available for work, so let's chat</p>
          </div>
        </div>
      </div>
      <div id="contactMe">
        <h1>Say Hello!</h1>
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 col-md-offset-2">
            <div class="d-flex justify-content-center contact-form">

            <?php if($msg != ''): ?>
      <div class = "alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
  <?php endif; ?>

              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="contact-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name: ''; ?>" placeholder="Name" />
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email: ''; ?>" placeholder="Email" />
                </div>
                <div class="form-group">
                  <textarea
                    name="message"
                    id="message"
                    class="form-control"
                    cols="83"
                    rows="10"
                    placeholder="Message"
                  >
                  <?php echo isset($_POST['message']) ? $message: ''; ?>
                
                </textarea>
                </div>
                <div class="text-center form-group">
                  <button type="submit" name="submit" class="submitBtn btn-secondary">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        &copy Copyright 2020 Nancy Rivas | All Rights Reserved
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
