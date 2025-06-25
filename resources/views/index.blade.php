<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YuwaaTach - All Digital Services</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;400&display=swap&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <style>
    /* Dropdown on hover for desktop */
    @media (min-width: 992px) {
      .navbar .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
      <!-- Brand Logo Container - Positioned at far left on large screens -->
      <div class="brand-container">
        <a class="brand-logo" href="#">
          <div class="logo-icon">Y</div>
          <div class="logo-text">uwaaTech</div>
        </a>
      </div>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation Content -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.html">Portfolio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services <i class="fas fa-chevron-down ms-1" style="font-size: 0.7rem;"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="web-design.html"><i class="fas fa-laptop-code me-2"></i> Web
                  Designing</a></li>
              <li><a class="dropdown-item" href="web-hosting.html"><i class="fas fa-server me-2"></i> Web Hosting</a>
              </li>
              <li><a class="dropdown-item" href="video-editing.html"><i class="fas fa-video me-2"></i> Video Editing</a>
              </li>
              <li><a class="dropdown-item" href="graphics-designing.html"><i class="fas fa-paint-brush me-2"></i>
                  Graphics
                  Designing</a></li>
              <li><a class="dropdown-item" href="thumbnail-designing.html"><i class="fas fa-image me-2"></i> Thumbnail
                  Designing</a></li>
              <li><a class="dropdown-item" href="cyber-security.html"><i class="fas fa-shield-alt me-2"></i> Cyber
                  Security</a></li>
              <li><a class="dropdown-item" href="social-media-management.html"><i class="fas fa-hashtag me-2"></i>
                  Social Media Management</a></li>
              <li><a class="dropdown-item" href="seo.html"><i class="fas fa-search me-2"></i> SEO</a></li>
              <li><a class="dropdown-item" href="content-writing.html"><i class="fas fa-pen-fancy me-2"></i> Content
                  Writing</a></li>
              <li><a class="dropdown-item" href="digital-marketing.html"><i class="fas fa-bullhorn me-2"></i> Digital
                  Marketing</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="all-digital-services.html"><i class="fas fa-cubes me-2"></i> All
                  Digital Services</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gadjets.html">Gadjets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>

        <!-- Action Buttons -->
        <div class="d-flex gap-3">
          <a href="login.html" class="btn btn-outline-primary"><i class="fas fa-sign-in-alt me-2"></i> Login</a>
          <a href="register.html" class="btn btn-primary"><i class="fas fa-user-plus me-2"></i> Register</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section -->
    <header class="hero">
        <div class="carousel-bg">
            <div class="carousel-images">
                <img src="{{ asset('assets/upload/1.webp') }}" class="carousel-img active" alt="User Image 1">
                <img src="{{ asset('assets/upload/4.webp') }}" class="carousel-img" alt="User Image 4">
                <img src="{{ asset('assets/upload/9.webp') }}" class="carousel-img" alt="User Image 9">
                <img src="{{ asset('assets/upload/10.webp') }}" class="carousel-img" alt="User Image 10">
                <img src="{{ asset('assets/upload/11.jpg') }}" class="carousel-img" alt="User Image 11">
            </div>
        </div>
        <div class="container hero-content">
            <h1>All Digital Solutions for Business & Startups</h1>
            <p class="typing-effect"></p>
            <p class="description">We help you grow with video editing, web development, cybersecurity, social media,
                and more. Young, creative, and affordable—TechYuwaa is your one-stop digital partner.</p>
            <a href="all-digital-services.html" class="cta-btn">Explore Services</a>
            <!-- Search Bar -->
            <div class="hero-search">
                <div class="search-container">
                    <input type="text" class="search-input"
                        placeholder="Search for services, projects, or solutions...">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- Hero Section End -->

  <!-- About Section -->
  <section id="about" class="about-section py-5 bg-light">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="about-gallery d-flex flex-wrap gap-3 justify-content-center">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80"
              class="rounded shadow about-img" alt="Team Coding" style="width: 48%; max-width: 220px;">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=400&q=80"
              class="rounded shadow about-img" alt="Creative Design" style="width: 48%; max-width: 220px;">
            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=400&q=80"
              class="rounded shadow about-img" alt="Video Editing" style="width: 48%; max-width: 220px;">
            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80"
              class="rounded shadow about-img" alt="Digital Workspace" style="width: 48%; max-width: 220px;">
          </div>
        </div>
        <div class="col-lg-6">
          <h2 class="fw-bold mb-3">About YuwaaTech</h2>
          <p class="lead mb-3">YuwaaTech is a forward-thinking startup dedicated to empowering individuals and
            businesses with top-notch digital services. Our passionate team brings creativity, technical skill, and
            innovation to every project.</p>
          <ul class="list-unstyled mb-4">
            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Web Development & Hosting</li>
            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Video Editing & Creative Design</li>
            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Cyber Security & Social Media
              Management</li>
            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> SEO, Content Writing & Digital
              Marketing</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- portfolio -->
  <section id="portfolio" class="portfolio-section py-5 bg-white">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Our Portfolio</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="portfolio-item card border-0 shadow-sm h-100">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTaKoZbjfrcuZUmDmwh3HrcvSJcDjAbvQnsQ&s"
              class="img-fluid rounded-top" alt="Project 1">
            <div class="card-body">
              <h3 class="h5">Web Development Project</h3>
              <p>Custom website for a local business, enhancing their online presence and boosting sales.</p>
              <span class="badge bg-primary">Web Development</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio-item card border-0 shadow-sm h-100">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBHj3fDuGoBlCBQv4KRrv4OEQnq2tSthHV5vExpzPSISoZwtRaZlcOymYq2VChCaGv848&usqp=CAU"
              class="img-fluid rounded-top" alt="Project 2">
            <div class="card-body">
              <h3 class="h5">Video Editing Project</h3>
              <p>Professional video editing for a promotional campaign, increasing engagement by 40%.</p>
              <span class="badge bg-success">Video Editing</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio-item card border-0 shadow-sm h-100">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80"
              class="img-fluid rounded-top" alt="Project 3">
            <div class="card-body">
              <h3 class="h5">Graphics Design Project</h3>
              <p>Creative graphics and thumbnails for social media marketing, driving brand awareness.</p>
              <span class="badge bg-warning text-dark">Graphics Design</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio-item card border-0 shadow-sm h-100">
            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80"
              class="img-fluid rounded-top" alt="Project 4">
            <div class="card-body">
              <h3 class="h5">Cyber Security Audit</h3>
              <p>Comprehensive security audit and protection for a fintech startup, ensuring data safety.</p>
              <span class="badge bg-danger">Cyber Security</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio-item card border-0 shadow-sm h-100">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMr2RjIcApQ8R9JFsVcLwuTP73NmM-QkHryBXMnJ1fG68Zy5kmS32TO04fJuy68mkUzuc&usqp=CAU"
              class="img-fluid rounded-top" alt="Project 5">
            <div class="card-body">
              <h3 class="h5">Social Media Campaign</h3>
              <p>Managed and grew a brand's social media, reaching 10k+ followers in 3 months.</p>
              <span class="badge bg-info text-dark">Social Media</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio-item card border-0 shadow-sm h-100">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuTsNqivZ1JUvUVS884Ne7Va4Grv0PS4ScmIp8waoZIiv5MO73KuM6iXLRnr6QNmRsJFw&usqp=CAU"
              class="img-fluid rounded-top" alt="Project 6">
            <div class="card-body">
              <h3 class="h5">Team Collaboration</h3>
              <p>Our team worked with a global client to deliver a full suite of digital services, from design to
                deployment.</p>
              <span class="badge bg-secondary">Team Project</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="#contact" class="btn btn-primary btn-lg px-5 shadow">Start Your Project With Us</a>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services-section">
    <div class="container">
      <h2 class="fw-bold">Our Services</h2>
      <div class="services-grid">
        <a href="web-design.html" class="service-card service-link" style="text-decoration: none; color: inherit;">
          <img src="https://img.icons8.com/color/96/000000/source-code.png" alt="Web Development">
          <h3>Web Development</h3>
          <p>Custom websites, web apps, and e-commerce solutions tailored to your needs.</p>
          <span class="btn btn-outline-primary mt-3">Read More</span>
        </a>
        <a href="video-editing.html" class="service-card service-link" style="text-decoration: none; color: inherit;">
          <img src="https://img.icons8.com/color/96/000000/video-editing.png" alt="Video Editing">
          <h3>Video Editing</h3>
          <p>Professional video editing for YouTube, social media, and business promotions.</p>
          <span class="btn btn-outline-primary mt-3">Read More</span>
        </a>
        <a href="graphics-designing.html" class="service-card service-link"
          style="text-decoration: none; color: inherit;">
          <img src="https://img.icons8.com/color/96/000000/paint-palette.png" alt="Graphics Design">
          <h3>Graphics & Thumbnail Design</h3>
          <p>Eye-catching thumbnails, logos, and graphics to boost your brand identity.</p>
          <span class="btn btn-outline-primary mt-3">Read More</span>
        </a>
        <a href="cyber-security.html" class="service-card service-link" style="text-decoration: none; color: inherit;">
          <img src="https://img.icons8.com/color/96/000000/lock--v1.png" alt="Web Security">
          <h3>Web Security</h3>
          <p>Protect your digital assets with our comprehensive web security solutions.</p>
          <span class="btn btn-outline-primary mt-3">Read More</span>
        </a>
        <a href="social-media-management.html" class="service-card service-link"
          style="text-decoration: none; color: inherit;">
          <img src="https://img.icons8.com/color/96/000000/share--v1.png" alt="Social Media Management">
          <h3>Social Media Management</h3>
          <p>Grow your online presence with expert social media strategies and management.</p>
          <span class="btn btn-outline-primary mt-3">Read More</span>
        </a>
        <a href="all-digital-services.html" class="service-card service-link"
          style="text-decoration: none; color: inherit;">
          <img src="https://img.icons8.com/color/96/000000/services.png" alt="Other Digital Services">
          <h3>Other Digital Services</h3>
          <p>From SEO to content creation, we cover all your digital needs under one roof.</p>
          <span class="btn btn-outline-primary mt-3">Read More</span>
        </a>
      </div>
    </div>
  </section>
  <!-- Services Section End -->

  <!-- Testimonials Section -->
  <section class="testimonials-section py-5">
    <div class="container">
      <h2 class="text-center mb-5">What Our Clients Say</h2>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="testimonial-card p-4 text-center shadow-sm h-100">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-3" width="70"
              alt="Client 1">
            <p class="mb-2">“YuwaaTech delivered our website on time and exceeded our expectations. Highly recommended!”
            </p>
            <h5 class="mb-0">Amit Sharma</h5>
            <small class="text-muted">Startup Founder</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card p-4 text-center shadow-sm h-100">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle mb-3" width="70"
              alt="Client 2">
            <p class="mb-2">“Their video editing and graphics design services helped our brand stand out online.”</p>
            <h5 class="mb-0">Priya Verma</h5>
            <small class="text-muted">Marketing Lead</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card p-4 text-center shadow-sm h-100">
            <img src="https://randomuser.me/api/portraits/men/65.jpg" class="rounded-circle mb-3" width="70"
              alt="Client 3">
            <p class="mb-2">“Professional, creative, and reliable. Our go-to team for all digital needs.”</p>
            <h5 class="mb-0">Rahul Singh</h5>
            <small class="text-muted">Business Owner</small>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials Section End -->

  <!-- Gadjets -->
  <section id="gadjets" class="gadjets-section py-5 bg-white">
    <div class="container">
      <h2 class="text-center mb-5">Our Gadgets</h2>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4 col-sm-6">
          <div class="gadget-card card border-0 shadow-sm h-100 text-center p-4 gadget-link"
            data-href="gadjets.html#usb-killer" style="cursor:pointer;">
            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=400&q=80"
              class="gadget-img mb-3 rounded" alt="USB Killer" style="height:140px;object-fit:cover;">
            <h3 class="h5">USB Killer</h3>
            <p>A powerful USB device designed for security testing and hardware resilience research. Created by our
              hardware team.</p>
            <a href="gadjets.html#usb-killer" class="btn btn-outline-primary read-more-btn"
              onclick="event.stopPropagation();">Read More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gadget-card card border-0 shadow-sm h-100 text-center p-4 gadget-link"
            data-href="gadjets.html#wifi-jammer" style="cursor:pointer;">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=400&q=80"
              class="gadget-img mb-3 rounded" alt="WiFi Jammer" style="height:140px;object-fit:cover;">
            <h3 class="h5">WiFi Jammer</h3>
            <p>Portable WiFi jammer for network security demonstrations and ethical hacking workshops. Built by our IoT
              experts.</p>
            <a href="gadjets.html#wifi-jammer" class="btn btn-outline-primary read-more-btn"
              onclick="event.stopPropagation();">Read More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gadget-card card border-0 shadow-sm h-100 text-center p-4 gadget-link"
            data-href="gadjets.html#nodemcu" style="cursor:pointer;">
            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80"
              class="gadget-img mb-3 rounded" alt="NodeMCU" style="height:140px;object-fit:cover;">
            <h3 class="h5">NodeMCU Projects</h3>
            <p>Custom NodeMCU-based IoT gadgets for automation, monitoring, and smart solutions. Designed and programmed
              by our team.</p>
            <a href="gadjets.html#nodemcu" class="btn btn-outline-primary read-more-btn"
              onclick="event.stopPropagation();">Read More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gadget-card card border-0 shadow-sm h-100 text-center p-4 gadget-link"
            data-href="gadjets.html#raspberry-pi" style="cursor:pointer;">
            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80"
              class="gadget-img mb-3 rounded" alt="Raspberry Pi Toolkit" style="height:140px;object-fit:cover;">
            <h3 class="h5">Raspberry Pi Toolkit</h3>
            <p>Versatile Raspberry Pi setups for prototyping, security, and educational projects. Engineered by our
              creative minds.</p>
            <a href="gadjets.html#raspberry-pi" class="btn btn-outline-primary read-more-btn"
              onclick="event.stopPropagation();">Read More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="gadget-card card border-0 shadow-sm h-100 text-center p-4 gadget-link"
            data-href="gadjets.html#arduino" style="cursor:pointer;">
            <img src="https://images.unsplash.com/photo-1504196606672-aef5c9cefc92?auto=format&fit=crop&w=400&q=80"
              class="gadget-img mb-3 rounded" alt="Custom Arduino Devices" style="height:140px;object-fit:cover;">
            <h3 class="h5">Custom Arduino Devices</h3>
            <p>Innovative Arduino-based gadgets for automation, robotics, and STEM learning. Developed in-house by our
              engineers.</p>
            <a href="gadjets.html#arduino" class="btn btn-outline-primary read-more-btn"
              onclick="event.stopPropagation();">Read More</a>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="#contact" class="btn btn-primary btn-lg px-5 shadow">Request a Custom Gadget</a>
      </div>
    </div>
  </section>

  <!-- contact Section -->
  <section id="contact" class="contact-section">
    <div class="container">
      <h2 class="mb-4 text-center">Contact Us</h2>
      <form class="contact-form p-4 rounded shadow-sm bg-white mx-auto" style="max-width: 500px;">
        <div class="mb-3">
          <label for="contactName" class="form-label fw-semibold">Full Name</label>
          <input type="text" class="form-control" id="contactName" placeholder="Enter your full name" required>
        </div>
        <div class="mb-3">
          <label for="contactEmail" class="form-label fw-semibold">Email Address</label>
          <input type="email" class="form-control" id="contactEmail" placeholder="Enter your email address" required>
        </div>
        <div class="mb-3">
          <label for="contactSubject" class="form-label fw-semibold">Subject</label>
          <input type="text" class="form-control" id="contactSubject" placeholder="Subject" required>
        </div>
        <div class="mb-3">
          <label for="contactMessage" class="form-label fw-semibold">Message</label>
          <textarea class="form-control" id="contactMessage" rows="4" placeholder="Type your message here..."
            required></textarea>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
        </div>
      </form>
    </div>
  </section>
  <!-- contact Section End -->

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-about">
          <h5>About Us</h5>
          <p>We are a team of passionate students dedicated to revolutionizing digital services in Nepal.</p>
        </div>
        <div class="footer-contact">
          <h5>Contact</h5>
          <p>Email: info@yuwa.tech<br>Phone: +977 9841234567</p>
        </div>
        <div class="footer-follow">
          <h5>Follow Us</h5>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="footer-copyright">
        <p>&copy; 2025 YuwaaTech. Empowering Digital Nepal.</p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script>
    // Navbar mobile toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    const navOverlay = document.querySelector('.nav-overlay');
    navToggle.onclick = () => {
      navLinks.classList.toggle('open');
      navOverlay.classList.toggle('show');
    };
    navOverlay.onclick = () => {
      navLinks.classList.remove('open');
      navOverlay.classList.remove('show');
    };

    // Dropdown hover accessibility for desktop
    document.addEventListener('DOMContentLoaded', function () {
      if (window.innerWidth >= 992) {
        document.querySelectorAll('.navbar .nav-item.dropdown').forEach(function (dropdown) {
          dropdown.addEventListener('mouseenter', function () {
            const menu = dropdown.querySelector('.dropdown-menu');
            if (menu) menu.classList.add('show');
            const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
            if (toggle) toggle.setAttribute('aria-expanded', 'true');
          });
          dropdown.addEventListener('mouseleave', function () {
            const menu = dropdown.querySelector('.dropdown-menu');
            if (menu) menu.classList.remove('show');
            const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
            if (toggle) toggle.setAttribute('aria-expanded', 'false');
          });
        });
      }
    });

    // Close navbar on outside click for small screens
    const navbarCollapse = document.getElementById('navbarContent');
    document.addEventListener('click', function (e) {
      const isNavbarOpen = navbarCollapse.classList.contains('show');
      const isNavbarToggler = e.target.closest('.navbar-toggler');
      const isInsideNavbar = e.target.closest('#navbarContent');
      if (window.innerWidth < 992 && isNavbarOpen && !isNavbarToggler && !isInsideNavbar) {
        const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
        bsCollapse.hide();
      }
    });

    // Make gadget cards clickable except the Read More button
    document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('.gadget-link').forEach(function (card) {
        card.addEventListener('click', function (e) {
          // Prevent if the click is on the Read More button
          if (e.target.closest('.read-more-btn')) return;
          const href = card.getAttribute('data-href');
          if (href) window.location.href = href;
        });
      });
    });

    // Show welcome message if just logged in (works on index.html)
    window.addEventListener('pageshow', function () {
      if (localStorage.getItem('justLoggedIn') === 'true') {
        var alert = document.createElement('div');
        alert.className = 'alert alert-success text-center';
        alert.textContent = 'Welcome! You have successfully logged in.';
        var nav = document.querySelector('.navbar');
        if (nav && nav.parentNode) {
          nav.parentNode.insertBefore(alert, nav.nextSibling);
        } else {
          document.body.prepend(alert);
        }
        setTimeout(function () {
          alert.remove();
          localStorage.removeItem('justLoggedIn');
        }, 3000);
      }
    });

  // Simple Carousel Functionality
        const images = document.querySelectorAll('.carousel-img');
        let current = 0;

        function showSlide(idx) {
            images.forEach((img, i) => {
                img.classList.toggle('active', i === idx);
            });
            current = idx;
        }

        function nextSlide() {
            showSlide((current + 1) % images.length);
        }

        setInterval(nextSlide, 3000);

        // Typewriter Effect
        document.addEventListener('DOMContentLoaded', function () {
          console.log('Typewriter script running');
          const services = [
              "Video Editing & Thumbnail Design",
              "Web Development & Web Hosting",
              "Cyber Security & SEO Optimization",
              "Social Media Management & Content Writing",
              "Digital Marketing & Graphics Designing"
          ];
          let serviceIndex = 0;
          let charIndex = 0;
          let isDeleting = false;
          const typingElement = document.querySelector('.typing-effect');
          if (!typingElement) {
            console.warn('Typewriter: .typing-effect element not found!');
            return;
          } else {
            console.log('Typewriter: .typing-effect element found.');
          }

          function type() {
              const currentService = services[serviceIndex];
              const currentText = isDeleting
                  ? currentService.substring(0, charIndex - 1)
                  : currentService.substring(0, charIndex + 1);
              typingElement.textContent = currentText;

              let typeSpeed = isDeleting ? 75 : 150;

              if (!isDeleting && charIndex === currentService.length) {
                  typeSpeed = 2000; // Pause at end of word
                  isDeleting = true;
              } else if (isDeleting && charIndex === 0) {
                  isDeleting = false;
                  serviceIndex = (serviceIndex + 1) % services.length;
                  typeSpeed = 500; // Pause before typing new word
              }

              charIndex = isDeleting ? charIndex - 1 : charIndex + 1;
              setTimeout(type, typeSpeed);
          }

          type();
        });
  </script>
</body>
</html>