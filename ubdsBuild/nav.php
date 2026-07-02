<?php
// nav.php — shared navigation include
$current = basename($_SERVER['PHP_SELF'], '.php');
function navActive($page, $current) {
    return $page === $current ? ' class="active"' : '';
}
?>
  
<nav class="nav">
  <div class="nav-inner">
   <a href="index.php" class="nav-logo">
    <img src="../assets/img/mg_logo.jpeg" alt="Magusnetz Logo" height="70">
</a>
    <ul class="nav-links">
      <li><a href="index.php"<?= navActive('index',$current) ?>>Home</a></li>
      <li><a href="services.php"<?= navActive('services',$current) ?>>Services</a></li>
      <li><a href="solutions.php"<?= navActive('solutions',$current) ?>>Solutions</a></li>
      <li><a href="portfolio.php"<?= navActive('portfolio',$current) ?>>Portfolio</a></li>
      <li><a href="about.php"<?= navActive('about',$current) ?>>About</a></li>
      <li><a href="pricing.php"<?= navActive('pricing',$current) ?>>Pricing</a></li>
      <li><a href="blog.php"<?= navActive('blog',$current) ?>>Insights</a></li>
      <li><a href="privacy-policy.php"<?= navActive('privacy-policy',$current) ?>>Privacy Policy</a></li>
      <li><a href="contact.php"<?= navActive('contact',$current) ?> class="nav-cta<?= $current==='contact'?' active':'' ?>">Get a Quote</a></li>
    </ul>
  </div>
</nav>
