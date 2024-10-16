<?php


session_start();


require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Home</title>

<head>
    <?php

    include 'php/head.php'

    ?>


</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.php"></a></h1>
      
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
         
          
          <li class="dropdown"><a href="register-candidates.php"><span>Register</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li><a href="register-candidates.php">Student Register</a></li>
              <li><a href="register-company.php">Admin Register</a></li>
             
            </ul>
          </li>
          <li class="dropdown"><a href="login-candidates.php"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login-candidates.php">Student Login</a></li>
              
              <li><a href="admin/index.php">Admin Login</a></li>
              <li><a href="login-company.php">Company Login</a></li>
             
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>placement portal</span></h1>
      <h2>Connecting Dreams with Opportunities – Explore, Apply, Succeed with our Placement Portal.</h2>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="./img/about3.jpg" class="img-fluid" alt="" style="height: 500px; width: 700px" />
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>About Us</h3>
          <p class="fst-italic">
            Welcome to our placement portal, a dynamic platform dedicated to transforming the way companies and
            candidates connect. With a commitment to excellence and innovation, we are reshaping the landscape of
            recruitment, making it more efficient, transparent, and rewarding for all parties involved.
          </p>
          <p>
            Here are some key aspects of our website:
            <br />
          <ul>
            <li>
              <i class="ri-check-double-line"></i>User-Friendly Interface:  Ensure the portal is easy to navigate for both employers and candidates, with intuitive features for job posting, resume submission, and application tracking.
            </li>
            <br />
            <li>
              <i class="ri-check-double-line"></i>Diverse Job Opportunities: Provide a wide range of job opportunities across industries and roles to cater to the diverse needs of candidates.
            </li>
            <br />
            <li>
              <i class="ri-check-double-line"></i>Feedback Mechanism:  Allow candidates to provide feedback on the recruitment process, helping improve the overall experience for future users.
            </li>
            <br />
            <li>
              <i class="ri-check-double-line"></i>Resume Upload: Allow candidates to upload their resumes to their profiles for easy application to job listings.
            </li>
            <br />
            <li>
              <i class="ri-check-double-line"></i>Communication Tools:Provide basic communication tools, such as messaging or email, for candidates and employers to interact.
            </li>
          </ul>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="image col-lg-6" style="
              background-image: url('./img/FEATURES.jpg');
              position: relative;
              left: -30px;
              background-repeat: no-repeat;
            " data-aos="fade-right"></div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-receipt"></i>
            <h4>Our Value's</h4>
            <p>
              At the heart of our portal are our core values: integrity, transparency, and inclusivity. We believe in
              treating everyone with respect and fairness, regardless of their background or experience. We are
              committed to maintaining the highest standards of ethics and professionalism in all our interactions,
              ensuring that both employers and candidates trust us as their preferred recruitment partner.
            </p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-cube-alt"></i>
            <h4>Our Mission</h4>
            <p>
              Our mission is simple yet profound: to bridge the gap between talented professionals and exciting career
              opportunities. We believe that every individual deserves to find a job that not only matches their skills
              and experience but also aligns with their passions and ambitions. By facilitating meaningful connections,
              we empower both employers and candidates to achieve their goals and fulfill their potential.
            </p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-images"></i>
            <h4>How we help Employer's</h4>
            <p>
              For employers, we offer a streamlined recruitment process that saves time, reduces costs, and ensures
              access to a diverse pool of qualified candidates. Our advanced matching algorithms and intelligent filters
              help companies find the perfect fit for their team, whether they are looking for entry-level talent or
              seasoned professionals.
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>
 
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p> Mahavir Education Trust Chowk <br> W.T Patil Marg, D P Rd <br>  next to Duke's Company, Chembur <br> Mumbai, Maharashtra 400088</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>examcell@sakec.ac.in<br>contact@sakec.ac.in</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>02267978100<br>02267978100</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <!-- <h3>Shah and Anchor</h3>
            <p>
              Mahavir Education Trust Chowk <br> W.T Patil Marg, D P Rd <br>  next to Duke's Company, Chembur <br> Mumbai, Maharashtra 400088
              <strong>Phone:</strong>02267978100<br>
              <strong>Email:</strong> sakec@sakec.ac.in<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

        
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->


  <?php

include 'php/footer.php';
?>

<!-- End Footer -->



</body>

</html>
