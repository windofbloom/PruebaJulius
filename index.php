<?php get_header(); ?>

  <body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="<?php echo get_template_directory_uri()?>/img/logo-naranja.svg" alt="Julius">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-lg-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!--Carousel-->
<div id="carousel" class="carousel slide carousel-fade carousel-dark" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri()?>/img/coworking.jpg" class="d-block w-100" alt="Young woman and man working side by side on their laptops">
        <div class="carousel-caption top-0 mt-4 mt-xl-0 d-md-block">
          <p class="title mt-5  animate__animated animate__fadeInUp">We are a marketing agency</p>
          <p class="subtitle animate__animated animate__fadeInUp">with digital DNA</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri()?>/img/team-working.jpg" class="d-block w-100" alt="Group of young people talking together">
        <div class="carousel-caption top-0 mt-xl-0 d-md-block">
          <p class="title mt5 animate__animated animate__fadeInUp">We base our work on:</p>
          <p class="subtitle animate__animated animate__fadeInUp">strategy, creativy, technology</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!--Main section-->
<main class="pt-5">
  <div class="container">
    <section class="row align-items-lg-center mb-5">
      <article class="col-12 col-lg-5" data-aos="fade-up">
        <h1 class="headlines">OUR <span class="fw-bold">PHILOSOPHY</span></h1>
        <p class="fs-5">
          As entrepreneurs, we are passionate about turning everything we put our minds to into a reality. 
          Over the years, we have focused on learning about empathy and listening closely to achieve a deep 
          understanding of what matters the most, creating a strong connection with our clients.
        </p>
        <a class="btn btn-success btn-lg fw-bold boton" href="#">Learn more about us</a>
      </article>
      <article class="col-12 col-lg-7 mt-4 mt-xs-auto">
        <img
          class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/digital-marketing-agencies.jpg"
          alt="team looking at a computer "
        />
      </article>
      <article class="col-12 col-lg-5 order-lg-1 mt-4 mt-xs-auto" data-aos="fade-up">
        <h2 class="headlines">OUR <span class="fw-bold">TRANSFORMATION</span></h2>
        <p class="fs-5">
          We consolidate with a new offer of digital services; a merger between equals, with a great collective 
          heritage. The work teams have been planning for more than a year the integration and as of today, 
          this offer materializes and the opening of the commercial operation in the United States, Spain, 
          Mexico and Colombia.
        </p>
      </article>
      <article class="col-12 col-lg-7 mt-5 mt-xs-auto">
        <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/financial-services-ind.jpg"
          alt="Couple looking at a tablet"
        />
      </article>
    </section>
  </div>
<!--Services-->
<div id="carouselServices" class="carousel slide container pt-5 pb-5 d-none d-sm-block" data-bs-ride="carousel">
  <div class="row">
    <div class="col-6">
        <h3 class="mb-3 headlines h1 text-center display-2" data-aos="fade-up">Serv<span class="fw-bold">ices</span></h3>
    </div>
    </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/marketing-automation-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Marketing Automation</h5>
            <p class="card-text">We use the data to contact our online users, send them custom content in the most optimal times, to generate a more efficient communication.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/performance-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Performance</h5>
            <p class="card-text">We combine digital marketing strategies and technology to improve the companies’ engagement with internet users</p>
            <a class="btn btn-success btn-lg fw-bold mt-3 boton" href="#">More about it</a>
          </div>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/technonoly-engineering.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Technology & Engineering</h5>
            <p class="card-text">We develop technological infrastructures adapted to the needs of the companies, supporting them in their digital transformation processes.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/strategy-and-consulting.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Strategy and Consulting</h5>
            <p class="card-text">We will support you in the design and implementation of your company’s digital strategy based on a consulting service</p>
            <a class="btn btn-success btn-lg fw-bold mt-5 boton" href="#">More about it</a>
          </div>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/nearshoring.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Why Is Nearshoring Relevant in Digital Marketing?</h5>
            <p class="card-text">We use the data to contact our online users, send them custom content in the most optimal times, to generate a more efficient communication.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselServices" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselServices" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="carouselServicesSmall" class="carousel slide container carousel-dark pt-5 pb-2 d-sm-none" data-bs-ride="carousel">
  <div class="row">
    <div class="col-6">
        <h3 class="mb-3 headlines h1 text-center display-2" data-aos="fade-up">Serv<span class="fw-bold">ices</span></h3>
    </div>
    </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/marketing-automation-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Marketing Automation</h5>
            <p class="card-text">We use the data to contact our online users, send them custom content in the most optimal times, to generate a more efficient communication.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/performance-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Performance</h5>
            <p class="card-text">We combine digital marketing strategies and technology to improve the companies’ engagement with internet users</p>
            <a class="btn btn-success btn-lg fw-bold mt-3 boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/technonoly-engineering.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Technology & Engineering</h5>
            <p class="card-text">We develop technological infrastructures adapted to the needs of the companies, supporting them in their digital transformation processes.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/strategy-and-consulting.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Strategy and Consulting</h5>
            <p class="card-text">We will support you in the design and implementation of your company’s digital strategy based on a consulting service</p>
            <a class="btn btn-success btn-lg fw-bold mt-5 boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">        
        <div class="card">
        <img src="<?php echo get_template_directory_uri()?>/img/nearshoring.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Why Is Nearshoring Relevant in Digital Marketing?</h5>
          <p class="card-text">We use the data to contact our online users, send them custom content in the most optimal times, to generate a more efficient communication.</p>
          <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
        </div>
      </div>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselServicesSmall" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselServicesSmall" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--Industries-->

<div id="carouselIndustries" class="carousel slide container pt-5 pb-5 d-none d-sm-block" data-bs-ride="carousel">
  <div class="row">
    <div class="col-6">
        <h3 class="mb-3 headlines h1 text-center display-2" data-aos="fade-up">Indus<span class="fw-bold">tries</span></h3>
    </div>
    </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/education-ind.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Education</h5>
            <p class="card-text">For this category, technology’s fast changes, new learning models and access to computer services through the Internet have increased the consumption of learning resources from multiple media and dynamics.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/retail-ind.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Retail</h5>
            <p class="card-text">In recent years, the retail sales channel has experienced significant changes due to a more demanding and connected end consumer, who prioritizes immediacy and access to multiple digital channels.</p>
            <a class="btn btn-success btn-lg fw-bold mt-3 boton" href="#">More about it</a>
          </div>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/cpg-ind.jpg" class="card-img-top boton" alt="...">
          <div class="card-body">
            <h5 class="card-title">CPG</h5>
            <p class="card-text">At Julius we understand the importance of creating digital marketing strategies for mass product marketers, which facilitate the brands’ presence in multiple channels, and to develop this strategy in the search for omnichannel marketing.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/digital-marketing-agencies.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Digital Marketing Agencies</h5>
            <p class="card-text">Agencies are under intense competition when it comes to finding and acquiring talent. They are competing against each other and other enterprises, such as retailers, e-commerce companies, and giants like Google and Facebook.</p>
            <a class="btn btn-success btn-lg fw-bold mt-2 boton" href="#">More about it</a>
          </div>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/financial-services-ind.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Financial Services</h5>
            <p class="card-text">One of the most digital-friendly sectors has been the financial sector, which has made efforts to develop solution hubs that allow users to access products and services from multiple digital touch points in an easy.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndustries" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselIndustries" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="carouselIndustriesSmall" class="carousel slide container carousel-dark pt-2 pb-5 d-sm-none" data-bs-ride="carousel">
  <div class="row">
    <div class="col-6">
        <h3 class="mb-3 headlines h1 text-center display-2" data-aos="fade-up">Indus<span class="fw-bold">tries</span></h3>
    </div>
    </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/education-ind.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Education</h5>
            <p class="card-text">For this category, technology’s fast changes, new learning models and access to computer services through the Internet have increased the consumption of learning resources from multiple media and dynamics.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/retail-ind.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Retail</h5>
            <p class="card-text">In recent years, the retail sales channel has experienced significant changes due to a more demanding and connected end consumer, who prioritizes immediacy and access to multiple digital channels.</p>
            <a class="btn btn-success btn-lg fw-bold mt-3 boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/cpg-ind.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">CPG</h5>
            <p class="card-text">At Julius we understand the importance of creating digital marketing strategies for mass product marketers, which facilitate the brands’ presence in multiple channels, and to develop this strategy in the search for omnichannel marketing.</p>
            <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/digital-marketing-agencies.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Digital Marketing Agencies</h5>
            <p class="card-text">Agencies are under intense competition when it comes to finding and acquiring talent. They are competing against each other and other enterprises, such as retailers, e-commerce companies, and giants like Google and Facebook.</p>
            <a class="btn btn-success btn-lg fw-bold mt-5 boton" href="#">More about it</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card-group">        
        <div class="card">
        <img src="<?php echo get_template_directory_uri()?>/img/financial-services-ind.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Financial Services</h5>
          <p class="card-text">One of the most digital-friendly sectors has been the financial sector, which has made efforts to develop solution hubs that allow users to access products and services from multiple digital touch points in an easy.</p>
          <a class="btn btn-success btn-lg fw-bold boton" href="#">More about it</a>
        </div>
      </div>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndustriesSmall" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselIndustriesSmall" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--Success stories-->
<div class="container">
  <section class="row align-items-lg-center mb-5">
    <article class="col-12 col-lg-8" data-aos="fade-up">
      <h1 class="headlines">SUCCESS <span class="fw-bold">STORIES</span></h1>
      <p class="fs-5">
        We would like to tell you all about how we’ve been successful in achieving goals together. 
        Find out more about our success stories and get inspired by them.
      </p>
      <a class="btn btn-success btn-lg fw-bold boton" href="#">View all</a>
    </article>
    <article class="col-12 col-lg-4 mt-4 mt-xs-auto">
      <img
        class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/historia-fuerza-de-ventas-1.jpg"
        alt="team looking at a computer "
      />
    </article>
  </section>
</div>

<!--CTA-->
<div>
  <div id="parallax" class="parallax-item">
    <p class="fw-bold display-4 h1 container col-12 col-lg-6">ARE YOU READY TO
      START A CONVERSATION?</p>
      <a class="btn btn-success btn-lg fw-bold boton2" href="#">View all</a>
  </div>
</div>

</main>

<?php get_footer(); ?>