<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pricing — Magusntez Digital Studio</title>
<link rel="stylesheet" href="style.css">
<style>
.pricing-intro { text-align:center; max-width: 680px; margin: 0 auto 3rem; }
.pricing-toggle { display:flex; align-items:center; justify-content:center; gap:1rem; margin-bottom:3rem; }
.toggle-label { font-weight:600; color:var(--slate); font-size:.9rem; }
.toggle-switch { position:relative; width:52px; height:28px; background: #F4B400; border-radius:20px; cursor:pointer; }
.toggle-switch::after { content:''; position:absolute; top:3px; left:3px; width:22px; height:22px; background:white; border-radius:50%; transition:left .2s; }
.toggle-save { background:var(--gold); color:var(--navy); font-size:.72rem; font-weight:700; padding:3px 10px; border-radius:20px; }
.faq-item { border-bottom:1px solid var(--border); padding:1.5rem 0; }
.faq-q { font-weight:700; color:var(--navy); margin-bottom:.5rem; cursor:pointer; display:flex; justify-content:space-between; }
.faq-a { color:var(--slate); font-size:.92rem; line-height:1.7; }
.retainer-grid { display:grid; grid-template-columns: repeat(4,1fr); gap:1.25rem; }
.retainer-card { border:1.5px solid var(--border); border-radius:var(--radius); padding:1.75rem; background:var(--white); box-shadow:var(--shadow); }
.retainer-card h4 { color:var(--navy); margin-bottom:.3rem; font-family:'Inter',sans-serif; font-size:1rem; font-weight:700; }
.retainer-price { font-family:'Playfair Display',serif; font-size:1.8rem; color:var(--indigo); margin:.5rem 0; }
.retainer-price span { font-size:1rem; color:var(--slate); font-family:'Inter',sans-serif; }
.retainer-card ul { list-style:none; margin-top:1rem; }
.retainer-card li { font-size:.85rem; color:var(--slate); padding:.35rem 0; border-bottom:1px solid var(--border); display:flex; gap:.5rem; }
.retainer-card li::before { content:'✓'; color: #F4B400; font-weight:700; }
@media(max-width:800px){ .retainer-grid{ grid-template-columns:1fr 1fr } }
@media(max-width:500px){ .retainer-grid{ grid-template-columns:1fr } }
</style>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="page-hero">
  <span class="section-eyebrow">Transparent Pricing</span>
  <h1>Investment That Drives Return</h1>
  <p>Clear, honest pricing with no hidden fees. Choose a project package or an ongoing retainer — we'll flex to your needs.</p>
</div>

<!-- PROJECT PACKAGES -->
<section>
  <div class="section-inner">
    <div class="section-header">
      <span class="section-eyebrow">Project Packages</span>
      <h2>Website & App Development</h2>
      <p>Fixed-scope packages with clear deliverables and timelines. Every package includes discovery, design, development, testing, and launch support.</p>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <h3>Starter</h3>
        <p style="color:var(--slate);font-size:.88rem;margin:.5rem 0 1.25rem">Perfect for small businesses needing a professional web presence fast.</p>
        <div class="price-amount">$3,500</div>
        <div class="price-period">one-time project fee</div>
        <ul class="pricing-features">
          <li>5-page responsive website</li>
          <li>Custom UI design (Figma)</li>
          <li>WordPress CMS setup</li>
          <li>On-page SEO setup</li>
          <li>Contact form & Google Maps</li>
          <li>SSL & hosting setup</li>
          <li>2 rounds of revision</li>
          <li>30 days post-launch support</li>
        </ul>
        <button class="btn-pricing" onclick="window.location='contact.php'">Get Started</button>
      </div>
      <div class="pricing-card featured">
        <div class="pricing-badge">Most Popular</div>
        <h3>Growth</h3>
        <p style="color:rgba(255,255,255,.7);font-size:.88rem;margin:.5rem 0 1.25rem">For growing businesses that need a powerful, high-converting platform.</p>
        <div class="price-amount">$9,800</div>
        <div class="price-period">one-time project fee</div>
        <ul class="pricing-features">
          <li>Up to 15 pages + blog</li>
          <li>Custom UI/UX design system</li>
          <li>React or Next.js frontend</li>
          <li>Headless CMS integration</li>
          <li>PWA with offline support</li>
          <li>Advanced SEO + schema</li>
          <li>CRM / newsletter integration</li>
          <li>Analytics & conversion setup</li>
          <li>4 rounds of revision</li>
          <li>60 days post-launch support</li>
        </ul>
        <button class="btn-pricing" onclick="window.location='contact.php'">Get Started</button>
      </div>
      <div class="pricing-card">
        <h3>Enterprise</h3>
        <p style="color:var(--slate);font-size:.88rem;margin:.5rem 0 1.25rem">Complex platforms, custom software, and mobile apps for scale.</p>
        <div class="price-amount">Custom</div>
        <div class="price-period">scoped to your requirements</div>
        <ul class="pricing-features">
          <li>Unlimited scope — we quote exactly</li>
          <li>Full UX research & strategy</li>
          <li>Custom web or mobile app</li>
          <li>API development & integration</li>
          <li>DevOps & cloud architecture</li>
          <li>Load testing & security audit</li>
          <li>Staff training & documentation</li>
          <li>90-day post-launch support</li>
          <li>Dedicated project manager</li>
          <li>SLA agreement available</li>
        </ul>
        <button class="btn-pricing" onclick="window.location='contact.php'">Request a Proposal</button>
      </div>
    </div>
  </div>
</section>

<!-- RETAINER / ONGOING -->
<section class="bg-silver">
  <div class="section-inner">
    <div class="section-header">
      <span class="section-eyebrow">Ongoing Services</span>
      <h2>Monthly Retainer Plans</h2>
      <p>Consistent, proactive digital support — design, development, content, and marketing — so your digital presence keeps growing after launch.</p>
    </div>
    <div class="retainer-grid">
      <div class="retainer-card">
        <h4>🔧 Maintain</h4>
        <div class="retainer-price">$299<span>/mo</span></div>
        <p style="font-size:.82rem;color:var(--slate)">Keep your site healthy and secure.</p>
        <ul>
          <li>Software updates & patches</li>
          <li>Weekly backups</li>
          <li>Uptime monitoring</li>
          <li>4 hrs support/month</li>
          <li>Monthly report</li>
        </ul>
      </div>
      <div class="retainer-card" style="border-color:var(--indigo)">
        <h4>🚀 Grow</h4>
        <div class="retainer-price">$799<span>/mo</span></div>
        <p style="font-size:.82rem;color:var(--slate)">Maintenance + active SEO & content.</p>
        <ul>
          <li>Everything in Maintain</li>
          <li>2 blog posts/month</li>
          <li>On-page SEO monitoring</li>
          <li>Google Analytics reporting</li>
          <li>10 hrs dev/design/month</li>
          <li>Monthly strategy call</li>
        </ul>
      </div>
      <div class="retainer-card">
        <h4>📣 Market</h4>
        <div class="retainer-price">$1,499<span>/mo</span></div>
        <p style="font-size:.82rem;color:var(--slate)">Full digital marketing engine.</p>
        <ul>
          <li>Everything in Grow</li>
          <li>Social media management (3 platforms)</li>
          <li>12 branded posts/month</li>
          <li>Email campaign (1/month)</li>
          <li>Ad campaign management</li>
          <li>20 hrs dev/design/month</li>
        </ul>
      </div>
      <div class="retainer-card">
        <h4>🏆 Partner</h4>
        <div class="retainer-price">$2,999<span>/mo</span></div>
        <p style="font-size:.82rem;color:var(--slate)">Dedicated team. Unlimited potential.</p>
        <ul>
          <li>Everything in Market</li>
          <li>Dedicated project manager</li>
          <li>40 hrs dev/design/month</li>
          <li>Weekly strategy calls</li>
          <li>CRO & A/B testing</li>
          <li>Priority SLA (4hr response)</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ADD-ONS -->
<section>
  <div class="section-inner">
    <div class="section-header">
      <span class="section-eyebrow">À La Carte</span>
      <h2>Common Add-On Services</h2>
    </div>
    <div class="card-grid card-grid-3">
      <div class="card" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem">
        <div><h3 style="font-size:1rem">Mobile App (React Native)</h3><p style="font-size:.85rem">iOS + Android from shared codebase</p></div>
        <div style="font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--navy);white-space:nowrap">From $14,000</div>
      </div>
      <div class="card" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem">
        <div><h3 style="font-size:1rem">E-Commerce (WooCommerce)</h3><p style="font-size:.85rem">Product catalogue, cart, checkout</p></div>
        <div style="font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--navy);white-space:nowrap">From $6,500</div>
      </div>
      <div class="card" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem">
        <div><h3 style="font-size:1rem">Brand Identity Package</h3><p style="font-size:.85rem">Logo, guidelines, collateral</p></div>
        <div style="font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--navy);white-space:nowrap">From $2,200</div>
      </div>
      <div class="card" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem">
        <div><h3 style="font-size:1rem">PWA Conversion</h3><p style="font-size:.85rem">Retrofit existing site to PWA</p></div>
        <div style="font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--navy);white-space:nowrap">From $1,800</div>
      </div>
      <div class="card" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem">
        <div><h3 style="font-size:1rem">Technical SEO Audit</h3><p style="font-size:.85rem">Full report + action plan</p></div>
        <div style="font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--navy);white-space:nowrap">$750</div>
      </div>
      <div class="card" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem">
        <div><h3 style="font-size:1rem">UX Audit</h3><p style="font-size:.85rem">Heuristic evaluation + report</p></div>
        <div style="font-family:'Playfair Display',serif;font-size:1.5rem;color:var(--navy);white-space:nowrap">$950</div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="bg-silver">
  <div class="section-inner">
    <div class="section-header">
      <span class="section-eyebrow">FAQ</span>
      <h2>Pricing Questions Answered</h2>
    </div>
    <div style="max-width:800px; margin:0 auto">
      <div class="faq-item">
        <div class="faq-q">Do you require a deposit? <span>+</span></div>
        <div class="faq-a">Yes. Project packages require a 50% deposit to begin, with the balance on completion. For projects over $20K we offer milestone-based payment schedules. Retainers are billed monthly in advance.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What if my project doesn't fit a standard package? <span>+</span></div>
        <div class="faq-a">Most complex projects are quoted custom. Share your requirements via our contact form and we'll prepare a detailed proposal with a fixed quote — not a vague estimate.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Are there any ongoing fees after project delivery? <span>+</span></div>
        <div class="faq-a">Only if you choose a retainer. The project fee is a one-time payment. You may incur third-party costs (hosting, domain, licensed software) which we'll advise on during scoping.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How long does a typical project take? <span>+</span></div>
        <div class="faq-a">Starter websites typically deliver in 3–4 weeks. Growth packages in 8–10 weeks. Mobile apps and custom software start at 12 weeks. We'll give you a precise timeline in your proposal.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Do you offer any guarantees? <span>+</span></div>
        <div class="faq-a">Yes. We guarantee satisfaction — if the final delivery doesn't match the agreed specification, we fix it at no charge. We also honour our stated timelines; if we're late through our own fault, we compensate proportionately.</div>
      </div>
    </div>
  </div>
</section>

<div class="cta-band">
  <h2>Let's Build Your Quote Together</h2>
  <p>Tell us what you need and we'll respond with a clear, itemised proposal within 2 business days.</p>
  <a href="contact.php" class="btn-white">Request a Free Proposal →</a>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
