<!DOCTYPE html>
<html lang="en">

<?php
include_once('header.php');?>


<section class="about_container">

    <!-- HERO -->
    <div class="bg-light py-5">
    <div class="container text-center">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" data-aos="fade-up">
            <ol class="breadcrumb justify-content-center mb-3">
                <li class="breadcrumb-item">
                    <a href="index.php" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    About
                </li>
            </ol>
        </nav>

        <!-- Title -->
        <h1 class="display-4 fw-bold" data-aos="fade-up">
            About Magusnetz
        </h1>

        <!-- Subtitle -->
        <p class="lead text-muted mt-3" data-aos="fade-up" data-aos-delay="200">
            We turn ideas into <strong>powerful digital experiences</strong> that drive growth, engagement, and results.
        </p>

    </div>
</div>


    <!-- WHO WE ARE -->
    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold">Who We Are</h2>
                <p class="text-muted mt-3">
                    At <strong>Magusnetz</strong>, we are a team of passionate 
                    <strong>developers, designers, and digital strategists</strong> dedicated to building 
                    <strong>high-performance websites</strong>, 
                    <strong>mobile applications</strong>, and 
                    <strong>custom software solutions</strong>.
                </p>
                <p class="text-muted">
                    We don’t just write code — we craft 
                    <strong>scalable digital ecosystems</strong> that help businesses 
                    <strong>grow, automate, and dominate their online presence</strong>.
                </p>
            </div>

            <div class="col-lg-6" data-aos="zoom-in">
                <img src="assets/img/whoarewe.jpg" class="img-fluid rounded shadow" height="80" width=450">
            </div>

        </div>
    </div>


    <!-- MISSION & VISION -->
    <div class="bg-light py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 mb-4" data-aos="fade-up">
                    <div class="p-4 shadow-sm h-100 bg-white rounded">
                        <h3>🎯 Our Mission</h3>
                        <p class="text-muted">
                            To empower businesses with 
                            <strong>innovative, scalable, and result-driven digital solutions</strong> 
                            that enhance efficiency, boost visibility, and drive measurable growth.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 shadow-sm h-100 bg-white rounded">
                        <h3>🚀 Our Vision</h3>
                        <p class="text-muted">
                            To become a trusted global technology partner known for delivering 
                            <strong>cutting-edge web and app solutions</strong> that redefine digital success.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- WHAT WE DO -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">What We Do</h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="200">
                We offer a complete range of digital services to help your business grow online.
            </p>
        </div>

        <div class="row text-center">

            <div class="col-md-3 mb-4" data-aos="zoom-in">
                <i class="bi bi-laptop display-5 text-primary"></i>
                <h5 class="mt-3">Web Development</h5>
                <p class="text-muted small">Modern, responsive, and SEO-friendly websites.</p>
            </div>

            <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <i class="bi bi-phone display-5 text-primary"></i>
                <h5 class="mt-3">App Development</h5>
                <p class="text-muted small">Android & iOS apps built for performance and scalability.</p>
            </div>

            <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <i class="bi bi-code-slash display-5 text-primary"></i>
                <h5 class="mt-3">Custom Software</h5>
                <p class="text-muted small">Tailored solutions for your business workflows.</p>
            </div>

            <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <i class="bi bi-megaphone display-5 text-primary"></i>
                <h5 class="mt-3">Digital Marketing</h5>
                <p class="text-muted small">SEO, social media, and growth strategies.</p>
            </div>

        </div>
    </div>


    <!-- WHY CHOOSE US -->
    <div class="bg-dark text-white py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4" data-aos="fade-up">Why Choose Magusnetz?</h2>

            <div class="row">

                <div class="col-md-4 mb-3" data-aos="fade-up">
                    <h5>⚡ Fast & Reliable</h5>
                    <p class="small text-light">We deliver projects on time without compromising quality.</p>
                </div>

                <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="200">
                    <h5>💡 Innovative Solutions</h5>
                    <p class="small text-light">Creative strategies tailored for your business success.</p>
                </div>

                <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="400">
                    <h5>🤝 Client-Focused</h5>
                    <p class="small text-light">We build long-term partnerships, not just projects.</p>
                </div>

            </div>
        </div>
    </div>


    <!-- CTA -->
    <div class="text-center py-5">
        <h3 class="fw-bold">Ready to Start Your Project?</h3>
        <p class="text-muted">Let’s turn your idea into a powerful digital solution.</p>
        <a href="start-project.php" class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 button_custom"">
        Start a Project
        </a>
    </div>

</section>
<?php
include_once('footer.php');         
?>