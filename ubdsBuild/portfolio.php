<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio — Magusntez Digital Studio</title>
<link rel="stylesheet" href="style.css">
<style>
.portfolio-thumb { background: linear-gradient(135deg, var(--silver) 0%, #dde4f5 100%); }
.thumb-1 { background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%); }
.thumb-2 { background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); }
.thumb-3 { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); }
.thumb-4 { background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%); }
.thumb-5 { background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%); }
.thumb-6 { background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%); }
.thumb-7 { background: linear-gradient(135deg, #ffedd5 0%, #fed7aa 100%); }
.thumb-8 { background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%); }
.thumb-9 { background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); }
.case-study {
  background: var(--white); border: 1px solid var(--border);
  border-radius: var(--radius); overflow: hidden;
  box-shadow: var(--shadow); margin-bottom: 3rem;
}
.case-inner { display: grid; grid-template-columns: 1fr 1fr; }
.case-visual { min-height: 320px; display: flex; align-items: center; justify-content: center; font-size: 5rem; }
.case-content { padding: 3rem; }
.case-content h3 { font-size: 1.6rem; color: var(--navy); margin-bottom: .5rem; }
.case-category { font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: .1em; color: var(--indigo); margin-bottom: 1rem; }
.case-content p { color: var(--slate); margin-bottom: 1.5rem; }
.case-results { display: grid; grid-template-columns: repeat(3,1fr); gap: 1rem; margin-top: 1.5rem; }
.result-stat { text-align: center; }
.result-stat .num { font-family: 'Playfair Display', serif; font-size: 1.6rem; color: var(--navy); font-weight: 700; }
.result-stat .lbl { font-size: 0.75rem; color: var(--slate); text-transform: uppercase; letter-spacing: .06em; }
@media(max-width:700px){ .case-inner{grid-template-columns:1fr} .case-visual{min-height:180px} }
</style>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="page-hero">
  <span class="section-eyebrow">Our Work</span>
  <h1>Portfolio of Digital Excellence</h1>
  <p>Handpicked projects across web, mobile, PWA, e-commerce, and custom software — each one a story of real business results.</p>
</div>

<section>
  <div class="section-inner">
    <div class="portfolio-filter">
      <button class="filter-btn active">All Work</button>
      <button class="filter-btn">Web Design</button>
      <button class="filter-btn">PWA</button>
      <button class="filter-btn">Mobile App</button>
      <button class="filter-btn">E-Commerce</button>
      <button class="filter-btn">UI/UX</button>
      <button class="filter-btn">Custom Software</button>
    </div>

    <!-- FEATURED CASE STUDIES -->
    <div class="case-study">
      <div class="case-inner">
        <div class="case-visual thumb-1"> <img src="../assets/img/retailflow.jfif" alt="RetailFlow E-Commerce Platform"
         class="case-img"></div>
        <div class="case-content">
          <div class="case-category">E-Commerce • Headless Commerce</div>
          <h3>RetailFlow ext-Gen Online Store</h3>
          <p>RetailFlow needed to replace a slow Magento installation with a modern headless store. We architected a Next.js storefront backed by Shopify Plus, with a custom PWA layer enabling offline browsing and sub-1-second page loads.</p>
          <div class="card-tags"><span class="tag">Next.js</span><span class="tag">Shopify Plus</span><span class="tag">PWA</span><span class="tag">Stripe</span></div>
          <div class="case-results">
            <div class="result-stat"><div class="num">+140%</div><div class="lbl">Revenue Growth</div></div>
            <div class="result-stat"><div class="num">0.8s</div><div class="lbl">Avg. Load Time</div></div>
            <div class="result-stat"><div class="num">+62%</div><div class="lbl">Conversion Rate</div></div>
          </div>
        </div>
      </div>
    </div>

    <div class="case-study">
      <div class="case-inner" style="direction:rtl">
        <div class="case-visual thumb-2">
            <img src="../assets/img/healthbridge.png."
         class="case-img">
</div>
        <div class="case-content" style="direction:ltr">
          <div class="case-category">Mobile App • Healthcare</div>
          <h3>HealthBridge — Patient Engagement App</h3>
          <p>A React Native app enabling patients to book appointments, access medical records, receive push reminders, and video-consult their GP. Integrated with HL7 FHIR APIs and deployed to both iOS App Store and Google Play simultaneously.</p>
          <div class="card-tags"><span class="tag">React Native</span><span class="tag">FHIR API</span><span class="tag">Firebase</span><span class="tag">Video SDK</span></div>
          <div class="case-results">
            <div class="result-stat"><div class="num">50K+</div><div class="lbl">Downloads in 3 mo.</div></div>
            <div class="result-stat"><div class="num">4.8★</div><div class="lbl">App Store Rating</div></div>
            <div class="result-stat"><div class="num">-35%</div><div class="lbl">No-Show Rate</div></div>
          </div>
        </div>
      </div>
    </div>

    <div class="case-study">
      <div class="case-inner">
        <div class="case-visual thumb-3">  <img src="../assets/img/builder.jfif"
         class="case-img"></div>
        <div class="case-content">
          <div class="case-category">SaaS • Construction Tech</div>
          <h3>BuilderIQ — Project Management SaaS</h3>
          <p>A multi-tenant SaaS platform for construction project management — real-time Gantt charts, subcontractor scheduling, document management, and mobile field reporting. Built from scratch in 14 weeks.</p>
          <div class="card-tags"><span class="tag">Laravel</span><span class="tag">React</span><span class="tag">PWA</span><span class="tag">AWS</span><span class="tag">MySQL</span></div>
          <div class="case-results">
            <div class="result-stat"><div class="num">300+</div><div class="lbl">Teams Onboarded</div></div>
            <div class="result-stat"><div class="num">14 wks</div><div class="lbl">Launch Timeline</div></div>
            <div class="result-stat"><div class="num">99.95%</div><div class="lbl">Uptime SLA</div></div>
          </div>
        </div>
      </div>
    </div>

    <!-- GRID PROJECTS -->
    <div class="section-header" style="margin-top: 3rem">
      <span class="section-eyebrow">More Projects</span>
      <h2>Selected Works</h2>
    </div>

    <div class="card-grid card-grid-3">
      <div class="portfolio-card">
        <div class="portfolio-thumb thumb-4"><img src="../assets/img/foodnest.jfif"
         class="case-img"></div>
        <div class="portfolio-body"></div>
          <h3>FoodNest — Restaurant Ordering PWA</h3>
          <p>Offline-capable PWA for a restaurant chain with in-app ordering, loyalty rewards, and push notification campaigns.</p>
          <div class="portfolio-meta">
            <div class="card-tags"><span class="tag">PWA</span><span class="tag">Node.js</span></div>
            <span style="font-size:.8rem;color:var(--slate)">F&B</span>
          </div>
        </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb thumb-5"><img src="../assets/img/edureach.jfif"
         class="case-img"></div>
        <div class="portfolio-body">
          <h3>EduReach — Learning Management System</h3>
          <p>Custom LMS for a university with course authoring, video streaming, assessments, certificates, and a gamified learner dashboard.</p>
          <div class="portfolio-meta">
            <div class="card-tags"><span class="tag">LMS</span><span class="tag">PHP</span></div>
            <span style="font-size:.8rem;color:var(--slate)">EdTech</span>
          </div>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb thumb-6"><img src="../assets/img/novapay.png"
         class="case-img"></div>
        <div class="portfolio-body">
          <h3>NovaPay — Fintech Dashboard</h3>
          <p>Real-time transaction dashboard, multi-currency wallet, KYC onboarding flow, and admin analytics for a fintech startup.</p>
          <div class="portfolio-meta">
            <div class="card-tags"><span class="tag">React</span><span class="tag">Node.js</span></div>
            <span style="font-size:.8rem;color:var(--slate)">Fintech</span>
          </div>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb thumb-7"><img src="../assets/img/images (1).jfif"
         class="case-img"></div>
        <div class="portfolio-body">
          <h3>EstateView — Property Listing Portal</h3>
          <p>Property search portal with map integration, virtual tours, agent CRM, and mortgage calculator — 40K+ listings.</p>
          <div class="portfolio-meta">
            <div class="card-tags"><span class="tag">Next.js</span><span class="tag">Mapbox</span></div>
            <span style="font-size:.8rem;color:var(--slate)">Real Estate</span>
          </div>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb thumb-8"><img src="../assets/img/images.jfif"
         class="case-img"></div>
        <div class="portfolio-body">
          <h3>TalentHub — Recruitment Platform</h3>
          <p>AI-assisted job matching platform with applicant tracking, interview scheduling, and employer branding pages.</p>
          <div class="portfolio-meta">
            <div class="card-tags"><span class="tag">React</span><span class="tag">AI/ML</span></div>
            <span style="font-size:.8rem;color:var(--slate)">HRTech</span>
          </div>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb thumb-9"><img src="../assets/img/greencart.jfif"
         class="case-img"></div>
        <div class="portfolio-body">
          <h3>GreenCart — Organic Grocery App</h3>
          <p>Flutter mobile app for an organic grocery delivery service — slot booking, live order tracking, subscription boxes, and loyalty.</p>
          <div class="portfolio-meta">
            <div class="card-tags"><span class="tag">Flutter</span><span class="tag">Firebase</span></div>
            <span style="font-size:.8rem;color:var(--slate)">Retail</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="cta-band">
  <h2>Want Results Like These?</h2>
  <p>Every project above started with a conversation. Let's start yours.</p>
  <a href="contact.php" class="btn-white">Tell Us About Your Project →</a>
</div>

<?php include 'footer.php'; ?>

<script>
document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  });
});
</script>
</body>
</html>
