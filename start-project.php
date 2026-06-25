<!DOCTYPE html>
<html lang="en">

<?php include_once('header.php'); ?>



    <!-- HERO / HEADER -->
    <div class="bg-light py-5">
        <div class="container text-center">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" data-aos="fade-up">
                <ol class="breadcrumb justify-content-center mb-3">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Contact
                    </li>
                </ol>
            </nav>

            <!-- Title -->
            <h1 class="display-4 fw-bold" data-aos="fade-up">
                Contact Us
            </h1>

            <!-- Subtitle -->
            <p class="lead text-muted mt-3" data-aos="fade-up" data-aos-delay="200">
                Let’s discuss your ideas and build something amazing together 🚀
            </p>

        </div>
    </div>


    <!-- CONTACT SECTION -->
    <div class="contact_us">
        <div class="con_space">
            <div class="container">
                <div class="row">
<div class="col-xl-5 col-lg-12">

    <div class="feature-description" data-aos="fade-right">

        <h2>
            Start Your Project With Us 🚀
        </h2>

        <p class="mt-3">
            Looking for <strong>web development</strong>, 
            <strong>mobile app development</strong>, or 
            <strong>custom digital solutions</strong>? 
            We specialize in building high-performance, scalable, and user-focused 
            digital products tailored to your business goals.
        </p>

        <p>
            From idea to execution, we guide you through every step — planning, design, 
            development, and launch. Our goal is to create solutions that not only look great 
            but also deliver real business results.
        </p>

        <!-- NEW SECTION -->
        <div class="mb-4">
            <h5 class="fw-bold">💡 What You Can Expect</h5>
            <ul class="list-unstyled mt-2">
                <li>✔ Clear project roadmap & strategy</li>
                <li>✔ Modern UI/UX design approach</li>
                <li>✔ Scalable and secure architecture</li>
                <li>✔ Transparent communication</li>
                <li>✔ On-time delivery</li>
            </ul>
        </div>

        <!-- NEW SECTION -->
        <div class="mb-4">
            <h5 class="fw-bold">🛠 Our Expertise</h5>
            <ul class="list-unstyled mt-2">
                <li>🌐 Business & Portfolio Websites</li>
                <li>🛒 E-commerce Platforms</li>
                <li>🎓 LMS & EdTech Systems</li>
                <li>📱 Mobile Applications</li>
                <li>⚙ Custom Web Applications</li>
            </ul>
        </div>

        <hr>

        <!-- TRUST SECTION -->
        <div class="mb-4">
            <h6 class="fw-bold">Why Choose Us?</h6>
            <ul class="list-unstyled">
                <li>✅ 100% Custom-built solutions</li>
                <li>✅ SEO-friendly & mobile responsive</li>
                <li>✅ Fast delivery with ongoing support</li>
                <li>✅ Scalable systems for future growth</li>
            </ul>
        </div>

        <!-- CONTACT INFO -->
        <div class="feature-left mb-3">
            <div class="feature-icon">
                <i class="bi bi-envelope-fill"></i>
            </div>
            <div class="feature-content">
                <p class="mb-0">
                    Email us<br>
                    <a href="mailto:magusnetz@gmail.com">
                        magusnetz@gmail.com
                    </a>
                </p>
            </div>
        </div>

        <div class="feature-left">
            <div class="feature-icon">
                <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="feature-content">
                <p class="mb-0">
                    Call us<br>
                    <a href="tel:+917798408372">
                        +91 7798408372
                    </a>
                </p>
            </div>
        </div>

    </div>
</div>


                    <!-- RIGHT SIDE FORM -->
                    <!-- RIGHT SIDE FORM -->
<div class="offset-xl-1 col-xl-6 col-lg-10 offset-lg-1 mt30">

<?php
if(isset($_GET['status'])) {
    if($_GET['status'] == 'success') {
        echo '<div class="alert alert-success">✅ Your project request has been submitted successfully!</div>';
    } elseif($_GET['status'] == 'error') {
        echo '<div class="alert alert-danger">❌ Something went wrong. Please try again.</div>';
    }
}
?>
        <form action="form_backend.php" method="POST">

    <div class="service-form" data-aos="fade-left">

        <h3 class="mb-2">Start Your Project 🚀</h3>

        <p class="text-muted mb-4">
            Share your requirements in detail so we can understand your vision and provide the best solution.
        </p>

        <div class="row">

            <!-- Name -->
            <div class="col-md-6">
                <input name="first_name" type="text" placeholder="First Name" class="form-control mb-3" required>
            </div>

            <div class="col-md-6">
                <input name="last_name" type="text" placeholder="Last Name" class="form-control mb-3" required>
            </div>

            <!-- Email -->
            <div class="col-12">
                <input name="email" type="email" placeholder="Email Address" class="form-control mb-3" required>
            </div>

            <!-- Phone -->
            <div class="col-12">
                <input name="phone" type="text" placeholder="Phone Number" class="form-control mb-3" required>
            </div>

            <!-- Company -->
            <div class="col-12">
                <input name="company" type="text" placeholder="Company / Business Name (Optional)" class="form-control mb-3">
            </div>

            <!-- Project Type -->
            <div class="col-12">
                <select name="project_type" class="form-control mb-3">
                    <option value="">Select Project Type</option>
                    <option>Website Development</option>
                    <option>Mobile App Development</option>
                    <option>E-commerce Website</option>
                    <option>LMS / EdTech Platform</option>
                    <option>Custom Software</option>
                    <option>UI/UX Design Only</option>
                </select>
            </div>

            <!-- Services Needed -->
            <div class="col-12 mb-3">
                <label class="mb-2">Services Required</label><br>

                <input type="checkbox" name="services[]" value="Design"> Design
                <input type="checkbox" name="services[]" value="Development" class="ms-3"> Development
                <input type="checkbox" name="services[]" value="SEO" class="ms-3"> SEO
                <input type="checkbox" name="services[]" value="Maintenance" class="ms-3"> Maintenance
            </div>

            <!-- Budget -->
            <div class="col-md-6">
                <select name="budget" class="form-control mb-3">
                    <option value="">Select Budget</option>
                    <option>₹5,000 – ₹10,000</option>
                    <option>₹10,000 – ₹25,000</option>
                    <option>₹25,000 – ₹50,000</option>
                    <option>₹50,000+</option>
                </select>
            </div>

            <!-- Timeline -->
            <div class="col-md-6">
                <select name="timeline" class="form-control mb-3">
                    <option value="">Project Timeline</option>
                    <option>Urgent (1-2 Weeks)</option>
                    <option>1 Month</option>
                    <option>2-3 Months</option>
                    <option>Flexible</option>
                </select>
            </div>

            <!-- Existing Website -->
            <div class="col-12">
                <input name="website" type="url" placeholder="Existing Website (if any)" class="form-control mb-3">
            </div>

            <!-- Reference -->
            <div class="col-12">
                <input name="reference" type="text" placeholder="Reference Website / Example (Optional)" class="form-control mb-3">
            </div>

            <!-- Features -->
            <div class="col-12">
                <textarea name="features" rows="3" 
                    placeholder="Key Features Needed (e.g., login, payment, dashboard...)" 
                    class="form-control mb-3"></textarea>
            </div>

            <!-- Message -->
            <div class="col-12">
                <textarea name="message" rows="4" 
                    placeholder="Describe your project idea in detail..." 
                    class="form-control mb-3"></textarea>
            </div>

            <!-- Submit -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary rounded-pill button_custom px-4 py-2 w-100">
                    🚀 Start My Project
                </button>
            </div>

        </div>

    </div>

</form>
</div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const alertBox = document.getElementById("alertBox");

    if (alertBox) {

        // Remove URL parameters (clean URL)
        if (window.history.replaceState) {
            let cleanUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
            window.history.replaceState({ path: cleanUrl }, "", cleanUrl);
        }

        // Auto hide after 4 seconds
        setTimeout(() => {
            alertBox.style.transition = "opacity 0.5s ease";
            alertBox.style.opacity = "0";

            setTimeout(() => {
                alertBox.style.display = "none";
            }, 500);

        }, 4000);
    }

});
</script>
<?php include_once('footer.php'); ?>

</html>