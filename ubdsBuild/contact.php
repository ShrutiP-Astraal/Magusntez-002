<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact — Magusntez Digital Studio</title>
<link rel="stylesheet" href="style.css">
<style>
.contact-page { padding: 80px 5%; }
.trust-badges { display:grid; grid-template-columns:repeat(3,1fr); gap:1rem; margin-top:2.5rem; }
.badge { background:var(--silver); border-radius:10px; padding:1.25rem; text-align:center; }
.badge .badge-icon { font-size:1.5rem; margin-bottom:.4rem; }
.badge p { font-size:.8rem; color:var(--slate); font-weight:500; }
.map-placeholder { background:linear-gradient(135deg,var(--silver),#c7d2fe); border-radius:var(--radius); height:200px; display:flex; align-items:center; justify-content:center; font-size:2.5rem; margin-top:2rem; border:1px solid var(--border); }
.success-msg { display:none; background:#d1fae5; border:1px solid #6ee7b7; color:#065f46; border-radius:8px; padding:1rem 1.25rem; margin-top:1rem; font-size:.92rem; }
</style>
</head>
<body>
<?php
// Form processing
$submitted = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submitted = true;
    // In a real deployment: sanitise inputs, send email, save to DB
}
?>
<?php include 'nav.php'; ?>

<div class="page-hero">
  <span class="section-eyebrow">Let's Talk</span>
  <h1>Start Your Project Today</h1>
  <p>Tell us what you're building and we'll respond within one business day with a tailored plan.</p>
</div>

<section class="contact-page">
  <div class="section-inner">
    <div class="contact-grid">

      <!-- LEFT PANEL -->
      <div>
        <h2 style="color:var(--navy)">Get in Touch</h2>
        <p style="color:var(--slate);margin-bottom:2rem">Whether you're starting from scratch, rebuilding, or scaling — we'd love to hear about your project. No pushy sales, no jargon. Just an honest conversation about what we can build together.</p>

        <div class="contact-item">
          <div class="contact-icon">📧</div>
          <div>
            <div class="contact-label">Email</div>
            <div class="contact-value">hello@magusntez.com</div>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">📞</div>
          <div>
            <div class="contact-label">Phone</div>
            <div class="contact-value">+1 (555) 0190-0200</div>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">🕐</div>
          <div>
            <div class="contact-label">Working Hours</div>
            <div class="contact-value">Mon–Fri, 9:00 AM – 6:00 PM (GMT+0)</div>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">📍</div>
          <div>
            <div class="contact-label">Office</div>
            <div class="contact-value">Remote-first · Available globally</div>
          </div>
        </div>

        <div class="trust-badges">
          <div class="badge"><div class="badge-icon">⚡</div><p>1-day response guarantee</p></div>
          <div class="badge"><div class="badge-icon">🔒</div><p>NDA available on request</p></div>
          <div class="badge"><div class="badge-icon">🆓</div><p>Free initial consultation</p></div>
        </div>

        <div class="map-placeholder">🗺️</div>
      </div>

      <!-- FORM PANEL -->
      <div class="form-card">
        <?php if ($submitted): ?>
          <div style="text-align:center;padding:3rem 1rem">
            <div style="font-size:3rem;margin-bottom:1rem">✅</div>
            <h3 style="color:var(--navy);margin-bottom:.75rem">Message Sent!</h3>
            <p style="color:var(--slate)">Thank you for reaching out. A member of our team will be in touch within one business day.</p>
            <a href="index.php" class="btn-primary" style="display:inline-flex;margin-top:2rem">Back to Home</a>
          </div>
        <?php else: ?>
          <h3 style="color:var(--navy);margin-bottom:.25rem">Tell Us About Your Project</h3>
          <p style="color:var(--slate);font-size:.88rem;margin-bottom:1.75rem">All fields marked * are required. We'll reply within one business day.</p>

        <form action="form_backend.php" method="POST">
            <div class="form-row">
              <div class="form-group">
                <label>First Name *</label>
                <input type="text" name="first_name" placeholder="Alex" required>
              </div>
              <div class="form-group">
                <label>Last Name *</label>
                <input type="text" name="last_name" placeholder="Jordan" required>
              </div>
            </div>
            <div class="form-group">
              <label>Work Email *</label>
              <input type="email" name="email" placeholder="alex@company.com" required>
            </div>
            <div class="form-group">
              <label>Company / Organisation</label>
              <input type="text" name="company" placeholder="Company Name">
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" name="phone" placeholder="+1 555 000 0000">
            </div>
            <div class="form-group">
              <label>Service Interested In *</label>
              <select name="service" required>
                <option value="">— Select a service —</option>
                <optgroup label="Core Services">
                  <option>Web Design & Development</option>
                  <option>Progressive Web App (PWA)</option>
                  <option>Mobile App Development (iOS/Android)</option>
                  <option>E-Commerce (Shopify / WooCommerce)</option>
                  <option>UI/UX Design</option>
                  <option>Custom Software / SaaS</option>
                  <option>API Development & Integration</option>
                </optgroup>
                <optgroup label="Ancillary Services">
                  <option>Content Strategy & SEO</option>
                  <option>Social Media Management</option>
                  <option>Branding & Identity</option>
                  <option>Hosting, DevOps & Cloud</option>
                  <option>Website Maintenance & Support</option>
                  <option>AI & Chatbot Integration</option>
                </optgroup>
                <option>Not sure — need advice</option>
              </select>
            </div>
            <div class="form-group">
              <label>Estimated Budget</label>
              <select name="budget">
                <option value="">— Approximate budget range —</option>
                <option>Under $5,000</option>
                <option>$5,000 – $10,000</option>
                <option>$10,000 – $25,000</option>
                <option>$25,000 – $50,000</option>
                <option>$50,000+</option>
                <option>Ongoing retainer / TBD</option>
              </select>
            </div>
            <div class="form-group">
              <label>Ideal Timeline</label>
              <select name="timeline">
                <option>ASAP (within 1 month)</option>
                <option>1–3 months</option>
                <option>3–6 months</option>
                <option>6+ months / planning stage</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tell Us About Your Project *</label>
              <textarea name="message" placeholder="Describe your project, goals, and any key requirements. The more detail you share, the better we can prepare for our first conversation." required></textarea>
            </div>
            <div class="form-group">
              <label style="display:flex;align-items:flex-start;gap:.6rem;font-weight:400;cursor:pointer">
                <input type="checkbox" name="nda" style="width:auto;margin-top:3px"> I'd like to sign an NDA before discussing project details
              </label>
            </div>
            <button type="submit" class="btn-submit">Send Message — We'll Reply Within 24hrs →</button>
          </form>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<!-- ALTERNATE CONTACT METHODS -->
<section class="bg-silver" style="padding:60px 5%">
  <div class="section-inner">
    <div class="section-header">
      <span class="section-eyebrow">Prefer a Call?</span>
      <h2>Other Ways to Reach Us</h2>
    </div>
    <div class="card-grid card-grid-3">
      <div class="card" style="text-align:center">
        <div style="font-size:2.5rem;margin-bottom:1rem">📞</div>
        <h3>Book a Discovery Call</h3>
        <p>Schedule a free 30-minute call with a senior team member. No sales pitch — just an honest conversation about your project.</p>
        <a href="#" class="btn-primary" style="display:inline-flex;margin-top:1.5rem">Book on Calendly →</a>
      </div>
      <div class="card" style="text-align:center">
        <div style="font-size:2.5rem;margin-bottom:1rem">💬</div>
        <h3>Live Chat</h3>
        <p>Available weekdays 9–6 GMT. Our team typically responds within 10 minutes during business hours. No bots — real people.</p>
        <a href="#" class="btn-primary" style="display:inline-flex;margin-top:1.5rem">Start Chat</a>
      </div>
      <div class="card" style="text-align:center">
        <div style="font-size:2.5rem;margin-bottom:1rem">in</div>
        <h3>LinkedIn</h3>
        <p>Connect with us on LinkedIn for project enquiries, studio updates, and our latest articles and case studies.</p>
        <a href="#" class="btn-primary" style="display:inline-flex;margin-top:1.5rem">Find Us on LinkedIn →</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
