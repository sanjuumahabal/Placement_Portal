<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/about.css" />
  <link rel="stylesheet" href="./css/bootstrap.min.css" />

  
<link href="./css/style2.css" rel="stylesheet">

</head>

<body>
     <?php 
        require_once("php/header.php")
    ?> 
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
</body>

</html>