<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About — Magusntez Digital Studio</title>
<link rel="stylesheet" href="style.css">
<style>
.values-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; }
.value-card { border-left: 4px solid #F4B400; padding: 1.5rem; background: var(--off-white); border-radius: 0 var(--radius) var(--radius) 0; }
.value-card h4 { color: var(--navy); margin-bottom: .4rem; font-family: 'Inter', sans-serif; font-size: 1rem; font-weight: 700; }
.value-card p { font-size: 0.88rem; color: var(--slate); }
.about-intro { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; }
.about-image-placeholder { height: 400px; background: linear-gradient(135deg, #F5F9FF 0%, #DDEBFF 100%); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; font-size: 6rem; }
@media(max-width:700px){ .about-intro,.values-grid{ grid-template-columns:1fr } }
</style>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="page-hero">
  <span class="section-eyebrow">Who We Are</span>
  <h1>A Studio Built on Craft, Code & Curiosity</h1>
  <p>Magusntez is an independent digital studio. We believe the best digital work happens at the intersection of deep technical skill and genuine creative thinking.</p>
</div>

<!-- ABOUT INTRO -->
<section>
  <div class="section-inner">
    <div class="about-intro">
      <div>
        <span class="section-eyebrow">Our Story</span>
        <h2 style="font-size:2.2rem; color:var(--navy); margin:1rem 0">Started by Makers, for Makers</h2>
        <p style="color:var(--slate); margin-bottom:1.25rem">Magusntez was founded with one conviction: that most digital agencies were too big to care about quality, or too small to handle complexity. We set out to be the alternative — a studio that combines enterprise-grade technical capability with boutique attention to every project.</p>
        <p style="color:var(--slate); margin-bottom:1.25rem">Over eight years, we've delivered 200+ projects — from fast-growth startups launching their first product, to established enterprises rebuilding legacy systems. We don't chase volume. We choose clients who care as much about their product as we do.</p>
        <p style="color:var(--slate)">Today our team of designers, engineers, and strategists operates across time zones, delivering work that holds up under scrutiny — and stands out in the market.</p>
      </div>
      <div class="about-image-placeholder">🏛️</div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="bg-silver">
  <div class="section-inner">
    <div class="section-header">
      <span class="section-eyebrow">What We Stand For</span>
      <h2>Our Values</h2>
      <p>Not mantras on a wall — the actual principles that govern how we work, decide, and treat every project.</p>
    </div>
    <div class="values-grid">
      <div class="value-card">
        <h4>🎯 Outcome Over Output</h4>
        <p>We measure success by what your project achieves in the market, not how many screens we delivered. Deliverables are means, not ends.</p>
      </div>
      <div class="value-card">
        <h4>🔬 Craft Without Compromise</h4>
        <p>Every line of code is reviewed. Every pixel is intentional. We don't ship something we wouldn't put our own name on.</p>
      </div>
      <div class="value-card">
        <h4>🤝 Partnership, Not Transaction</h4>
        <p>We're an extension of your team, not a vendor. We push back when we disagree and celebrate when you win.</p>
      </div>
      <div class="value-card">
        <h4>🔭 Curious by Default</h4>
        <p>Technology moves fast. We maintain a learning culture where experimentation is encouraged and knowledge is shared freely.</p>
      </div>
      <div class="value-card">
        <h4>💬 Radical Transparency</h4>
        <p>No smoke and mirrors. Timelines, risks, and decisions are communicated clearly, early, and often — even when it's uncomfortable.</p>
      </div>
      <div class="value-card">
        <h4>🌍 Sustainable Ambition</h4>
        <p>We build for longevity — maintainable code, scalable architecture, and digital products that last well beyond the launch day.</p>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section>
  <div class="section-inner">
    <div class="section-header">
      <span class="section-eyebrow">The People</span>
      <h2>Meet Our Core Team</h2>
      <p>A tight-knit group of specialists who bring genuine expertise — and genuine investment — to every project.</p>
    </div>
    <div class="card-grid card-grid-4">
      <div class="card team-card">
        <div class="team-avatar" style="background:var(--indigo)">SP</div>
        <h4>Shruti Patil</h4>
        <div class="role">Founder & Creative Director</div>
        <p style="font-size:.85rem; color:var(--slate)">12 years in product design. Former lead designer at two Series B startups. Obsessed with the space between beautiful and functional.</p>
      </div>
      <div class="card team-card">
        <div class="team-avatar" style="background:#0891B2">AP</div>
        <h4>Aruna Patil</h4>
        <div class="role">Head of Engineering</div>
        <p style="font-size:.85rem; color:var(--slate)">Full-stack architect with deep expertise in React, Node.js, and cloud infrastructure. Ex-Amazon, ex-Grab. Builder of systems that scale.</p>
      </div>
      <div class="card team-card">
        <div class="team-avatar" style="background:#059669">JK</div>
        <h4>Jaee Kashelkar</h4>
        <div class="role">Lead Mobile Developer</div>
        <p style="font-size:.85rem; color:var(--slate)">React Native and Flutter specialist. 8+ years building apps with 4.5+ star ratings. Passionate about performance and offline-first design.</p>
      </div>
      <div class="card team-card">
        <div class="team-avatar" style="background:#D97706">SL</div>
        <h4>Sunita Lima</h4>
        <div class="role">Digital Strategy Lead</div>
        <p style="font-size:.85rem; color:var(--slate)">Former McKinsey consultant turned digital strategist. Bridges business goals with technical execution for clients who need both clarity and ambition.</p>
      </div>
      <div class="card team-card">
        <div class="team-avatar" style="background:#7C3AED">SD</div>
        <h4>Sapna Desai</h4>
        <div class="role">UX Research Lead</div>
        <p style="font-size:.85rem; color:var(--slate)">Human factors specialist with an academic background in cognitive psychology. Turns research insights into design decisions that users actually feel.</p>
      </div>
      <div class="card team-card">
        <div class="team-avatar" style="background:#BE185D">PS</div>
        <h4>Prachi Sutar</h4>
        <div class="role">Content & SEO Director</div>
        <p style="font-size:.85rem; color:var(--slate)">10 years in organic growth. Has taken three brands from zero to 100K+ monthly organic sessions. Content strategy as competitive advantage.</p>
      </div>
      <div class="card team-card">
        <div class="team-avatar" style="background:#0F766E">SP</div>
        <h4>Sonali Pawar</h4>
        <div class="role">DevOps & Cloud Architect</div>
        <p style="font-size:.85rem; color:var(--slate)">AWS Solutions Architect (Professional). Kubernetes, CI/CD, and infrastructure-as-code expert. Makes complex deployments feel routine.</p>
      </div>
      <div class="card team-card">
        <div class="team-avatar" style="background:#92400E">VA</div>
        <h4>Vaishnavi Anvekar</h4>
        <div class="role">Project Director</div>
        <p style="font-size:.85rem; color:var(--slate)">The person who keeps every project on time, on scope, and on budget — while keeping clients informed and happy at every stage.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY US -->
<section class="bg-navy">
  <div class="section-inner">
    <div class="section-header">
      <span class="section-eyebrow" style="color:var(--gold);background:rgba(245,158,11,.15)">Why Magusntez</span>
      <h2>What Makes Us Different</h2>
    </div>
    <div class="card-grid card-grid-3">
      <div class="card">
        <div class="card-icon">🏆</div>
        <h3>Senior-Only Execution</h3>
        <p>No juniors on client projects. Every deliverable is touched by a specialist with 7+ years in their discipline. You pay for expertise, you get expertise.</p>
      </div>
      <div class="card">
        <div class="card-icon">📋</div>
        <h3>Fixed-Scope Commitments</h3>
        <p>We scope carefully, quote accurately, and honour our commitments. No surprise invoices, no mid-project scope creep without mutual agreement.</p>
      </div>
      <div class="card">
        <div class="card-icon">🔓</div>
        <h3>You Own Everything</h3>
        <p>Full IP transfer on completion. Your code, your designs, your data. No vendor lock-in, no hosted-only arrangements, no hidden dependencies.</p>
      </div>
      <div class="card">
        <div class="card-icon">⏱️</div>
        <h3>On-Time Track Record</h3>
        <p>96% of our projects land within the agreed timeline. The other 4%? We inform you early, adjust scope transparently, and don't charge for our own delays.</p>
      </div>
      <div class="card">
        <div class="card-icon">🌐</div>
        <h3>Post-Launch Partnership</h3>
        <p>We offer managed support, retainer, and growth marketing services so the relationship continues long after launch day.</p>
      </div>
      <div class="card">
        <div class="card-icon">🧩</div>
        <h3>Niche Sector Depth</h3>
        <p>Healthcare, fintech, edtech, retail, logistics — deep vertical experience means less time ramping up and more time delivering value.</p>
      </div>
    </div>
  </div>
</section>

<div class="cta-band">
  <h2>Work With a Team That Cares</h2>
  <p>We keep our client list intentionally small so every project gets our full attention. Book a call to see if we're a fit.</p>
  <a href="contact.php" class="btn-white">Schedule a Call →</a>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
