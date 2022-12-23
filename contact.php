<?php get_header(); ?>

  <body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="img/logo-naranja.svg" alt="Julius">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-lg-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Industries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Success Stories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Main section-->
  <!--Cabecero-->
  <div>
    <div id="parallax" class="parallax-item">
      <h1 class="fw-bold display-2">Marketing agency with digital DNA</h1>
    </div>
  </div>
    <!-- Contact -->
<main class="pt-5">

    <section id="contact" class="contact mt-4">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class=" h1 headlines fw-bold"><a id="about-us">CONTACT US</a></h2>
          <p class=" h3">More information</p>
        </div>
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

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
                <div class="loading">I accept all Terms and Conditions.</div>
                <div class="error-message"></div>
                <div class="sent-message">This site is protected by reCAPTCHA, and Google’s Privacy Policy and Terms and conditions applied.</div>
              </div>
              <div class="text-center"><button type="submit btn-form" class="btn btn-lg fw-bold boton">Send Message</button></div>
            </form>

          </div>
        </div>
      </div>
       <div class="mt-3">
          <iframe style="border:0; width: 100%; height: 200px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>
</main>
    <!-- End Contact Section -->
    
    
    <?php get_footer(); ?>