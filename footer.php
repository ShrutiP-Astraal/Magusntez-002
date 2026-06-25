
<style>
    .footer_custom {
    background: #0f172a; /* dark premium look */
}

.footer-link {
    color: #cbd5e1;
    text-decoration: none;
    display: block;
    margin-bottom: 6px;
    transition: 0.3s;
}

.footer-link:hover {
    color: #ffffff;
    padding-left: 4px;
}
</style><!-- ================= FOOTER ================= -->
<!-- ================= FOOTER ================= -->
<footer class="footer_custom text-white pt-5 pb-3">

    <div class="container">

        <div class="row text-start">

            <!-- Company Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="fw-bold">Magusnetz</h5>
                <p class="text-muted">
                    We build <strong>high-performance websites</strong>, 
                    <strong>mobile applications</strong>, and 
                    <strong>custom digital solutions</strong> that help businesses grow online.
                </p>

                <!-- Social -->
                <div>
                    <a class="btn btn-outline-light btn-sm me-2" href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="btn btn-outline-light btn-sm me-2" 
                       href="https://www.instagram.com/magusnetz/" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a class="btn btn-outline-light btn-sm" href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
<div class="col-lg-2 col-md-6 mb-4">
    <h6 class="fw-bold">Quick Links</h6>
    <ul class="list-unstyled">
        <li><a href="index.php" class="footer-link">Home</a></li>
        <li><a href="who_we_are.php" class="footer-link">About Us</a></li>
        <li><a href="what-we-do.php" class="footer-link">Services</a></li>
        <li><a href="start-project.php" class="footer-link">Start a Project</a></li>
    </ul>
</div>

<!-- Services -->
<div class="col-lg-3 col-md-6 mb-4">
    <h6 class="fw-bold">Our Services</h6>
    <ul class="list-unstyled">
        <li><a href="web-development.php" class="footer-link">Website Development</a></li>
        <li><a href="mobile-app-development.php" class="footer-link">Mobile App Development</a></li>
        <li><a href="custom-software.php" class="footer-link">Custom Software Solutions</a></li>
        <li><a href="digital-marketing.php" class="footer-link">Digital Marketing</a></li>
        <li><a href="edtech-development.php" class="footer-link">EdTech Development</a></li>
    </ul>
</div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h6 class="fw-bold">Contact Us</h6>

                <p class="mb-1">
                    <i class="bi bi-envelope-fill me-2"></i>
                    <a href="mailto:magusnetz@gmail.com" class="footer-link">
                        magusnetz@gmail.com
                    </a>
                </p>

                <p class="mb-1">
                    <i class="bi bi-telephone-fill me-2"></i>
                    <a href="tel:+917798408372" class="footer-link">
                        +91 7798408372
                    </a>
                </p>

                <p class="text-muted small mt-2">
                    Available Mon–Sat | 10 AM – 7 PM
                </p>
            </div>

        </div>

        <hr class="border-light">

        <!-- Bottom -->
        <div class="text-center small">
            © <?php echo date("Y"); ?> <strong>Magusnetz</strong>. All Rights Reserved.
        </div>

    </div>

</footer><!-- ================= SCRIPTS ================= -->

<!-- Bootstrap 5 (ONLY ONE VERSION) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (ONLY if you REALLY need it) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- AOS Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JS -->
<script src="js/scripts.js"></script>

<!-- Initialize AOS -->
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<!-- WhatsApp Widget
<script>
(function (w, d, s, u) {
    w.gbwawc = {
        url: u,
        options: {
            waId: "+917798408372",
            siteName: "Magusnetz",
            siteTag: "Chat with us",
            widgetPosition: "LEFT",
            triggerMessage: "Need Help?",
            welcomeMessage: "Hi! How can we help you?",
            brandColor: "#25D366"
        },
    };
    var h = d.getElementsByTagName(s)[0],
        j = d.createElement(s);
    j.async = true;
    j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
    h.parentNode.insertBefore(j, h);
})(window, document, "script", "https://waw.gallabox.com");
</script> -->

</body>
</html>
