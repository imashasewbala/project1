<?php

$conn = mysqli_connect('localhost','root','','portfolio');

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 

 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <style>
    
   
/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #272829;
}

a {
  color: white;
  text-decoration: none;
  font-weight: bold;
}

a:hover {
  color: #37b3ed;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #149ddd;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 28px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #2eafec;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  width: 300px;
  transition: all ease-in-out 0.5s;
  z-index: 9997;
  transition: all 0.5s;
  padding: 0 15px;
  background: #040b14;
  overflow-y: auto;
}

#header .profile img {
  margin: 15px auto;
  display: block;
  width: 120px;
  border: 8px solid #2c2f3f;
}

#header .profile h1 {
  font-size: 24px;
  margin: 0;
  padding: 0;
  font-weight: 600;
  -moz-text-align-last: center;
  text-align-last: center;
  font-family: "Poppins", sans-serif;
}

#header .profile h1 a,
#header .profile h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .profile .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #212431;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#header .profile .social-links a:hover {
  background: #149ddd;
  color: #fff;
  text-decoration: none;
}

#main {
  margin-left: 300px;
}

@media (max-width: 1199px) {
  #header {
    left: -300px;
  }

  #main {
    margin-left: 0;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu {
  padding: 30px 0 0 0;
}

.nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu>ul>li {
  position: relative;
  white-space: nowrap;
}

.nav-menu a,
.nav-menu a:focus {
  display: flex;
  align-items: center;
  color: #a8a9b4;
  padding: 12px 15px;
  margin-bottom: 8px;
  transition: 0.3s;
  font-size: 15px;
}

.nav-menu a i,
.nav-menu a:focus i {
  font-size: 24px;
  padding-right: 8px;
  color: #6f7180;
}

.nav-menu a:hover,
.nav-menu .active,
.nav-menu .active:focus,
.nav-menu li:hover>a {
  text-decoration: none;
  color: #fff;
}

.nav-menu a:hover i,
.nav-menu .active i,
.nav-menu .active:focus i,
.nav-menu li:hover>a i {
  color: #149ddd;
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  background-color: #149ddd;
  color: #fff;
  width: 40px;
  height: 40px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  line-height: 0;
  border-radius: 50px;
  cursor: pointer;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active #header {
  left: 0;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: url("assets/img/food1.jpg") top center;
  background-size: cover;
}

#hero:before {
  content: "";
  background: rgba(5, 13, 24, 0.3);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

#hero .hero-container {
  position: relative;
  z-index: 2;
  min-width: 300px;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 64px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}

#hero p {
  color: #fff;
  margin-bottom: 50px;
  font-size: 26px;
  font-family: "Poppins", sans-serif;
}

#hero p span {
  color: #fff;
  padding-bottom: 4px;
  letter-spacing: 1px;
  border-bottom: 3px solid #149ddd;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background: #f5f8fd;
}

.section-title {
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  color: #173b6c;
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: #149ddd;
  bottom: 0;
  left: 0;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about .content h3 {
  font-weight: 700;
  font-size: 26px;
  color: #173b6c;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

.about .content ul strong {
  margin-right: 10px;
}

.about .content ul i {
  font-size: 16px;
  margin-right: 5px;
  color: #149ddd;
  line-height: 0;
}

.about .content p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Facts
--------------------------------------------------------------*/
.facts {
  padding-bottom: 30px;
}

.facts .count-box {
  padding: 30px;
  width: 100%;
}

.facts .count-box i {
  display: block;
  font-size: 44px;
  color: #149ddd;
  float: left;
  line-height: 0;
}

.facts .count-box span {
  font-size: 48px;
  line-height: 40px;
  display: block;
  font-weight: 700;
  color: #050d18;
  margin-left: 60px;
}

.facts .count-box p {
  padding: 15px 0 0 0;
  margin: 0 0 0 60px;
  font-family: "Raleway", sans-serif;
  font-size: 14px;
  color: #122f57;
}

.facts .count-box a {
  font-weight: 600;
  display: block;
  margin-top: 20px;
  color: #122f57;
  font-size: 15px;
  font-family: "Poppins", sans-serif;
  transition: ease-in-out 0.3s;
}

.facts .count-box a:hover {
  color: #1f5297;
}

/*--------------------------------------------------------------
# Akills
--------------------------------------------------------------*/
.skills .progress {
  height: 60px;
  display: block;
  background: none;
  border-radius: 0;
}

.skills .progress .skill {
  padding: 0;
  margin: 0 0 6px 0;
  text-transform: uppercase;
  display: block;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  color: #050d18;
}

.skills .progress .skill .val {
  float: right;
  font-style: normal;
}

.skills .progress-bar-wrap {
  background: #dce8f8;
  height: 10px;
}

.skills .progress-bar {
  width: 1px;
  height: 10px;
  transition: 0.9s;
  background-color: #149ddd;
}

/*--------------------------------------------------------------
# Resume
--------------------------------------------------------------*/
.resume .resume-title {
  font-size: 26px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 20px;
  color: #050d18;
}

.resume .resume-item {
  padding: 0 0 20px 20px;
  margin-top: -2px;
  border-left: 2px solid #1f5297;
  position: relative;
}

.resume .resume-item h4 {
  line-height: 18px;
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #050d18;
  margin-bottom: 10px;
}

.resume .resume-item h5 {
  font-size: 16px;
  background: #e4edf9;
  padding: 5px 15px;
  display: inline-block;
  font-weight: 600;
  margin-bottom: 10px;
}

.resume .resume-item ul {
  padding-left: 20px;
}

.resume .resume-item ul li {
  padding-bottom: 10px;
}

.resume .resume-item:last-child {
  padding-bottom: 0;
}

.resume .resume-item::before {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50px;
  left: -9px;
  top: 0;
  background: #fff;
  border: 2px solid #1f5297;
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 35px auto;
  list-style: none;
  text-align: center;
  background: #fff;
  border-radius: 50px;
  padding: 2px 15px;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 10px 15px 8px 15px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #272829;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  color: #149ddd;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap .portfolio-links {
  opacity: 1;
  left: 0;
  right: 0;
  bottom: -60px;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
  display: flex;
  justify-content: center;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #fff;
  font-size: 28px;
  text-align: center;
  background: rgba(20, 157, 221, 0.75);
  transition: 0.3s;
  width: 50%;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  background: rgba(20, 157, 221, 0.95);
}

.portfolio .portfolio-wrap .portfolio-links a+a {
  border-left: 1px solid #37b3ed;
}

.portfolio .portfolio-wrap:hover::before {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-links {
  opacity: 1;
  bottom: 0;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #149ddd;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #149ddd;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(5, 13, 24, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  margin-bottom: 20px;
}

.services .icon {
  float: left;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 54px;
  height: 54px;
  background: #149ddd;
  border-radius: 50%;
  transition: 0.5s;
  border: 1px solid #149ddd;
}

.services .icon i {
  color: #fff;
  font-size: 24px;
  line-height: 0;
}

.services .icon-box:hover .icon {
  background: #fff;
}

.services .icon-box:hover .icon i {
  color: #149ddd;
}

.services .title {
  margin-left: 80px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #343a40;
}

.services .title a:hover {
  color: #149ddd;
}

.services .description {
  margin-left: 80px;
  line-height: 24px;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
  overflow: hidden;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  text-align: center;
  min-height: 320px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50%;
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #111;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: #c3e8fa;
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 15px 15px 15px;
  padding: 20px;
  background: #fff;
  position: relative;
  margin-bottom: 35px;
  border-radius: 6px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.testimonials .testimonial-item p::after {
  content: "";
  width: 0;
  height: 0;
  border-top: 20px solid #fff;
  border-right: 20px solid transparent;
  border-left: 20px solid transparent;
  position: absolute;
  bottom: -20px;
  left: calc(50% - 20px);
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #149ddd;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #149ddd;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact {
  padding-bottom: 130px;
}

.contact .info {
  padding: 30px;
  background: #fff;
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .info i {
  font-size: 20px;
  color: #149ddd;
  float: left;
  width: 44px;
  height: 44px;
  background: #dff3fc;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #050d18;
}

.contact .info p {
  padding: 0 0 10px 60px;
  margin-bottom: 20px;
  font-size: 14px;
  color: #173b6c;
}

.contact .info .email p {
  padding-top: 5px;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  margin-right: 10px;
}

.contact .info .social-links a:hover {
  background: #149ddd;
  color: #fff;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #149ddd;
  color: #fff;
}

.contact .php-email-form {
  width: 90%;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form .form-group {
  margin-bottom: 15px;
}

.contact .php-email-form label {
  padding-bottom: 8px;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 15px;
}

.contact .php-email-form button[type=submit] {
  background: #149ddd;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #37b3ed;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 20px 0;
  background: #f9f9f9;
}

.breadcrumbs h2 {
  font-size: 26px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 15px;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #0e2442;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  padding: 15px;
  color: #f4f6fd;
  font-size: 14px;
  position: fixed;
  left: 0;
  bottom: 0;
  width: 300px;
  z-index: 9999;
  background: #040b14;
}

#footer .copyright {
  text-align: center;
}

#footer .credits {
  padding-top: 5px;
  text-align: center;
  font-size: 13px;
  color: #eaebf0;
}

@media (max-width: 1199px) {
  #footer {
    position: static;
    width: auto;
    padding-right: 20px 15px;
  }
}


 .button12-container {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

  </style>

  
</head>

<body>

  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/myProfile.jpg" alt="" class="img-fluid rounded-circle">

        <h1 class="text-light"><a href="index.html">Imasha Balasooriya</a></h1>

         <img src="assets/img/logo.jpg" alt="" class="img-fluid rounded-circle">
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Food</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Reviews</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav>
    </div>
  </header>

 
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Imasha Balasooriya</h1>
      <p>I'm <span class="typed" data-typed-items="Food lover,Food tasster,a person who likes to cook,
a person who likes to serve food"></span></p>

<a href="user_page.php" target="_blank"><mark>LOGIN</mark></a>




    </div>
  </section>

  <main id="main">

   
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Hi, I'm Imasha Balasooriya. Currently, I'm following a degree course at the University of Rajarata. I hope to become a web developer. Except for my ambition, I like to try different food.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Undergraduator</h3>
            <p class="fst-italic">
              These are small facts to introduce me.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>27 March 1999</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>imashasewwandi2703@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+942424254</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Kurunegala,Sri Lanka</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>24</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Undergraduate</span></li>
                  
                </ul>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section>

   
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>My university friends, school friends, and others like our food blogs. They enjoy its and appreciate lot. </p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy friends</strong>good comments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Catergories</strong>different items</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="583" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Followers</strong> willing to see</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> Bodim-mates</p>
            </div>
          </div>

        </div>

      </div>
    </section>

  
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Added recent project regarding degree program<br>It is about a car rental system. Anyone who is willing to rent a car can book as per their requirements.The purpose is to reduce the time</p>
        </div>

       
         <video controls>
  <source src="assets\img\project.mp4" type="video/mp4">

</video>


          

          </div>

        </div>

      </div>
    </section>



    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
         
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Imasha Balasooriya</h4>
              <p><em>Undergraduate of the University of Rajarata, Faculty of Applied Sciences, department of Computing.</em></p>
              <ul>
                 <li>Balasooriya watta,<br>
                Doratiyawa,<br>
                 Kurunegala
                <li>imashasewwandi2703@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Diploma in IT &amp; English</h4>
              <h5>2020-2021</h5>
              <p><em>Joseph Vaz Institute</em></p>
              <p>Completed an English diploma including grammar, writing, speaking, and comprehension.
            Completed an IT diploma including Ms Office, HTML, CSS, JS, internet</p>
            
             <h5>2019</h5>
              <p><em>British Council</em></p>
             <p> Completed an English diploma including grammar, writing, speaking, and comprehension.</p>
             <h5>2010-2011</h5>
            
              <p><em>Tomo Lanka Computer School</em></p>
              <p>Completed an IT diploma including Ms office package.
             <h5>2019</h5>
              <p><em>Vision English Academy</em></p>
               <p> Completed an English diploma including grammar, writing, speaking, and comprehension.</p>
           
            </div>


            <div class="resume-item">
              <h4>Graphic Design</h4>
              <h5>2019</h5>
              <p><em>Vocational Training</em></p>
              
            </div>
          </div>

           <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Memberships</h3>
            <div class="resume-item">
              <h4>Aiesecer</h4>
              <h5>Present</h5>
              <p><em>Rajarata University of Sri Lanka </em></p>
              <ul>
                <li>New memeber</li>
                <li>In international relation group </li>
                
              </ul>
            </div>
            <div class="resume-item">
              <h4>Rotaractor</h4>
              <h5>present</h5>
              <p><em>Rajarata University of Sri Lanka</em></p>
              <ul>
                <li>New member</li>
         
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>


    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Food</h2>
          <p>To me,food is an much about the moment,the occasion,the location and the company as it is about the taste.<br> Description about food are under the each of them</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">❤Food🍴🍽</li>
              <li data-filter=".filter-card">❤ Food🍴🍽</li>
              <li data-filter=".filter-web">❤Food🍴🍽</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/chef.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/chef.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Cook with US"><i class="bx bx-plus"></i></a>
              
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/f411.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/f411.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fruit Salad"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/f311.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/f311.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rice and curry"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
          </div>

          



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/f1911.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rice.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Patis making with bread flour"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/f211.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/f211.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lemon with fruit pieces(pineapple,mango,papaw and banana)"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/mango.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/f211.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="mango pieces"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/f1011.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/f1011.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Yellow rice with pineapple curry,chicken dewal,potato curry and papadam"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/f2211.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/f2211.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Roti with lunumiris"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/f711.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/f711.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sweet potato with lunumiris"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>



           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rice.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rice.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rice and curry(pineapple,polsambola and karawala"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rice1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rice1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rice and curry(male achcharu,chillie paste,polsambola,ash plantain chips and potato curry"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rice3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rice3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tomato rice with pasta and dahl curry"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rice4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rice4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Rice with soya and dahl curries and cucumber "><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/koththu.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/koththu.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Koththu with sauce "><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/biriyani.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/biriyani.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Biriyani with raita,papadam and egg "><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/tea.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/tea.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Mini tea party with bread and tomata sambola with mango chutney"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/egg.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/egg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Portion rice with egg curry and brinjol curry"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/egg2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/egg2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Rice with mackerel and polsambola"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/egg1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/egg1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Fried rice with prima koththumee"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/birth.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/birth.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Birthday celebration in 'Kesel kole' (made fried rice,vegetable salas ,dahl curry,and chicken)"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/rice5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/rice5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=" Rice and curry (Gotukola,potato curry with carrot,chillie paste and papadam) "><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pine.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/pine.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="pineapple chutney"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pickle.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/pickle.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pickle"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/bread.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/bread.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bread with soya curry and dahl and a banana"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/soup.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/soup.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Noodles soup with egg"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/ash.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/ash.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ash plantain chips mixed with chillie power and salt"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/f11.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/f11.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tomato rice with papadam"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>


    <section id="services" class="services">
      <div class="container">
        <script>
    // Simulated comments (You would fetch real comments from a server in a real scenario)
    const comments = [
      { name: "John Doe", comment: "Great portfolio!" },
      { name: "Jane Smith", comment: "I love your work!" }
    ];

    function displayComments() {
      const commentSection = document.getElementById("comment-section");
      commentSection.innerHTML = "";

      comments.forEach(comment => {
        const commentDiv = document.createElement("div");
        commentDiv.innerHTML = `<strong>${comment.name}</strong>: ${comment.comment}`;
        commentSection.appendChild(commentDiv);
      });
    }

    function addComment(event) {
      event.preventDefault();
      
      const nameInput = document.getElementById("name");
      const commentInput = document.getElementById("comment");

      const newComment = {
        name: nameInput.value,
        comment: commentInput.value
      };

      comments.push(newComment);
      displayComments();

      // Clear the form inputs after adding the comment
      nameInput.value = "";
      commentInput.value = "";
    }

    document.getElementById("comment-form").addEventListener("submit", addComment);

    // Display initial comments on page load
    displayComments();
  </script>

        <div class="section-title">
          <h2>Reviews</h2>
          <p>Amidst the symphony of our journey, these words echo like cherished melodies – testimonials from our beloved supporters who have fueled our ascent to where we stand today.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Ridmi Rasanjalee</h4>
            <p class="description">"Behold the culinary masterpiece – a visual feast that makes the heart race and taste buds tingle in anticipation. Every plate is a canvas of deliciousness, promising an experience that's as delightful as it is irresistible. Can hardly wait to savor every bite!"</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Amanda Jeewanthi</h4>
            <p class="description">"My taste buds are already celebrating just by looking at our sumptuous offerings. The anticipation is mouthwatering!"💗
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Malithi Samarajeewa</h4>
            <p class="description">"A visual feast that's stirring up my appetite! Everything looks so delectable and inviting."
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Venushka Premarathne</h4>
            <p class="description">"Deliciousness beckons! These dishes have already won me over with their irresistible appearance."
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Rashmi Dewanmini</h4>
            <p class="description">"Wow, talk about love at first sight for food! Each plate is a promise of culinary delight."
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Nimasha Kavindi</h4>
            <p class="description">"An invitation to indulge, right before my eyes. I'm counting down the seconds until I can dig in!"
</p>
          </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Adeesha Sathruwan</h4>
            <p class="description">"My eyes are feasting on the beauty of our food – the taste adventure ahead is something to cherish."
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Deshan Sevinda</h4>
            <p class="description">"The food artistry here is undeniable. I'm ready to turn this feast into unforgettable memories."</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Pulindu Dilsara</h4>
            <p class="description">"A true treat for both the eyes and the taste buds! I'm practically salivating just looking at it."❤
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Harini Kehara</h4>
            <p class="description">"I can almost taste the flavors just by gazing at our mouthwatering offerings. Can't resist!"

</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Chamodya Dinethmi</h4>
            <p class="description">"It's like our food is whispering promises of exquisite flavors, and I'm all ears (and taste buds)!"
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title">Vidun Sandeepa</h4>
            <p class="description">"Incredible aesthetics meet incredible taste! Eagerly awaiting the culinary magic about to unfold."</p>
          </div>

        </div>

      </div>
      <script>
        <script>
    // Simulated comments (You would fetch real comments from a server in a real scenario)
    const comments = [
      { name: "John Doe", comment: "Great portfolio!" },
      { name: "Jane Smith", comment: "I love your work!" }
    ];

    function displayComments() {
      const commentSection = document.getElementById("comment-section");
      commentSection.innerHTML = "";

      comments.forEach(comment => {
        const commentDiv = document.createElement("div");
        commentDiv.innerHTML = `<strong>${comment.name}</strong>: ${comment.comment}`;
        commentSection.appendChild(commentDiv);
      });
    }

    function addComment(event) {
      event.preventDefault();
      
      const nameInput = document.getElementById("name");
      const commentInput = document.getElementById("comment");

      const newComment = {
        name: nameInput.value,
        comment: commentInput.value
      };

      comments.push(newComment);
      displayComments();

      // Clear the form inputs after adding the comment
      nameInput.value = "";
      commentInput.value = "";
    }

    document.getElementById("comment-form").addEventListener("submit", addComment);

    // Display initial comments on page load
    displayComments();
  </script>
      </script>
    </section>

    <
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Partners</h2>
          <p>As I think teamwork is greater than initial work.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am an Information Technology undergraduate from RUSL.
          I am very passionate about improving my coding skills & developing applications & websites.
          And also i am very interest to Sports,Travel & spending my free time with my friends.
          Working for myself to improve my education skills and sport skills.
          Love to be a creative and talanted person
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/ridmi.jpg" class="testimonial-img" alt="">
                <h3>Ridmi Rasanjalee</h3>
                <h4>Undergraduator,Rotaractor &amp; member of Elle team</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am an Information Technology undergraduate from RUSL.
          I am very passionate about improving my coding skills & developing applications & websites.
          And also i am very interest to Sports,Travel & spending my free time with my friends.
          Working for myself to improve my education skills a
          Love to be a creative and talanted person
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/malithi.jpg" class="testimonial-img" alt="">
                <h3>Malithi Danushka</h3>
                <h4>Undergraduator,Rotaractor &amp; Aiesecer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am an Information Technology undergraduate from RUSL.
          I am very passionate about improving my coding skills & developing applications & websites.
          And also i am very interest to Sports,Travel & spending my free time with my friends.
          Working for myself to improve my education skills a
          Love to be a creative and talanted person
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/amanda.jpg" class="testimonial-img" alt="">
                <h3>Amanda Jeewanthi</h3>
                <h4>Undergraduator &amp; Rotaractor</h4>
              </div>
            </div>

           

           

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

<script>
  var swiper = new Swiper('.testimonials-slider', {
    loop: true,
    autoplay: {
      delay: 5000, // Autoplay delay in milliseconds
    },
    pagination: {
      el: '.swiper-pagination', // Pagination element
      clickable: true,
    },
  });
</script>

    </section>

    
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
         
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Missaka mawatha,Mihintale</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>imashasewwandi2703@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+94772424254</p>
              </div>

             
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <p>"We extend our heartfelt gratitude to all those who have immersed themselves in the vibrant tapestry of our portfolio. Your appreciation fuels our passion and drives us to craft even more enriching experiences. Thank you for journeying with us!",<br><hr>
                  Cravings compose the menu of dreams; let your thoughts spill like confetti, giving your taste buds a standing ovation and turning hunger into a masterpiece.</p>

                   <div class="button12-container">
                  <a href="diverse.php" class="btn btn-primary">Place Your Order</a>
                   <a href="add_new1.php" class="btn btn-primary">Give A Comment</a>
                 
                </div>
               
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>

  
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IS2703</span></strong>
      </div>
      <div class="credits">
        
        Designed by ISB</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>