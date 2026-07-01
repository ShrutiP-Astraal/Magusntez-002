<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insights — Magusntez Digital Studio</title>
<link rel="stylesheet" href="style.css">
<style>
.blog-grid { display:grid; grid-template-columns: 1fr 1fr; gap:2rem; }
.blog-featured { grid-column: span 2; display:grid; grid-template-columns:1.4fr 1fr; gap:3rem; background:var(--white); border:1px solid var(--border); border-radius:var(--radius); overflow:hidden; box-shadow:var(--shadow); }
.blog-featured-thumb { background:linear-gradient(135deg,#e0e7ff,#c7d2fe); min-height:280px; display:flex; align-items:center; justify-content:center; font-size:5rem; }
.blog-featured-body { padding:2.5rem 2.5rem 2.5rem 0; display:flex; flex-direction:column; justify-content:center; }
.blog-card { background:var(--white); border:1px solid var(--border); border-radius:var(--radius); overflow:hidden; box-shadow:var(--shadow); transition:all .3s; }
.blog-card:hover { box-shadow:var(--shadow-lg); transform:translateY(-3px); }
.blog-thumb { height:180px; display:flex; align-items:center; justify-content:center; font-size:3rem; }
.blog-body { padding:1.5rem; }
.blog-cat { font-size:.72rem; font-weight:700; text-transform:uppercase; letter-spacing:.1em; color:var(--indigo); margin-bottom:.5rem; display:block; }
.blog-body h3 { font-size:1.1rem; color:var(--navy); margin-bottom:.5rem; line-height:1.35; }
.blog-body p { font-size:.87rem; color:var(--slate); line-height:1.6; }
.blog-meta { display:flex; justify-content:space-between; align-items:center; margin-top:1rem; font-size:.78rem; color:var(--slate); }
.blog-author { display:flex; align-items:center; gap:.5rem; }
.author-dot { width:24px; height:24px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:.7rem; font-weight:700; color:white; }
.tag-cloud { display:flex; flex-wrap:wrap; gap:.5rem; margin-bottom:2.5rem; }
@media(max-width:750px){ .blog-grid,.blog-featured{ grid-column:unset; grid-template-columns:1fr } .blog-featured-body{ padding:1.5rem } }
.alert-success{
    background:#d1fae5;
    color:#065f46;
    padding:15px;
    border-radius:8px;
    margin-bottom:20px;
}

.alert-warning{
    background:#fef3c7;
    color:#92400e;
    padding:15px;
    border-radius:8px;
    margin-bottom:20px;
}

.alert-danger{
    background:#fee2e2;
    color:#991b1b;
    padding:15px;
    border-radius:8px;
    margin-bottom:20px;
}
</style>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="page-hero">
  <span class="section-eyebrow">Insights & Expertise</span>
  <h1>Thinking from the Magusntez Studio</h1>
  <p>Practical articles, deep-dives, and industry perspectives on web development, design, and digital strategy — from the people building it daily.</p>
</div>

<section>
  <div class="section-inner">

    <div class="tag-cloud">
      <button class="filter-btn active">All Topics</button>
      <button class="filter-btn">Web Dev</button>
      <button class="filter-btn">PWA</button>
      <button class="filter-btn">Mobile</button>
      <button class="filter-btn">UI/UX</button>
      <button class="filter-btn">SEO</button>
      <button class="filter-btn">Performance</button>
      <button class="filter-btn">Strategy</button>
    </div>

    <div class="blog-grid">
      <!-- FEATURED -->
      <div class="blog-featured">
       <div class="blog-featured-thumb">
       <img src="../assets/img/commerce.jpeg" alt="Featured Blog" width="100%">
          </div>        
          <div class="blog-featured-body">
          <span class="blog-cat">PWA · Performance</span>
          <h2 style="color:var(--navy);font-size:1.7rem;margin-bottom:.75rem">Why Every E-Commerce Site Should Be a PWA in 2026</h2>
          <p style="color:var(--slate);margin-bottom:1.25rem">Progressive Web Apps aren't a niche technology anymore. With major retailers reporting 30–50% improvements in conversion rate after PWA adoption, we break down exactly what's changed, what's driving results, and how to evaluate whether a PWA migration makes sense for your store.</p>
          <div class="blog-meta">
            <div class="blog-author">
              <div class="author-dot" style="background:var(--indigo)">RM</div>
              <span>Riya Menon · 8 min read</span>
            </div>
            <span>June 12, 2026</span>
          </div>
        </div>
      </div>

      <div class="blog-card">
       <img src="../assets/img/ui.jpeg" alt="Featured Blog" width="100%" >
         <div class="blog-body" >
          <span class="blog-cat">UI/UX Design</span>
          <h3>Design Systems That Last: A Practitioner's Guide</h3>
          <p>How we build component libraries that teams actually use — and the common mistakes that turn a design system into shelf-ware.</p>
          <div class="blog-meta">
            <div class="blog-author"><div class="author-dot" style="background:#7C3AED">KL</div><span>Kai Lin · 6 min read</span></div>
            <span>June 3, 2026</span>
          </div>
        </div>
      </div>
      <div class="blog-card">
       <img src="../assets/img/mobiledevelopment.jpeg" alt="Featured Blog" width="100%">
        <div class="blog-body">
          <span class="blog-cat">Mobile Development</span>
          <h3>React Native vs Flutter in 2026: The Honest Comparison</h3>
          <p>Both frameworks have matured significantly. We compare performance, ecosystem, hiring, and long-term viability based on 15+ production apps built in both.</p>
          <div class="blog-meta">
            <div class="blog-author"><div class="author-dot" style="background:#059669">OT</div><span>Omar Takeda · 10 min read</span></div>
            <span>May 28, 2026</span>
          </div>
        </div>
      </div>

      <div class="blog-card">
       <img src="../assets/img/seo.jpeg" alt="Featured Blog">
        <div class="blog-body">
          <span class="blog-cat">SEO</span>
          <h3>Core Web Vitals in 2026: What Still Matters</h3>
          <p>Google's page experience signals keep evolving. Here's the current state of INP, LCP, and CLS — and our checklist for getting every one into the "Good" band.</p>
          <div class="blog-meta">
            <div class="blog-author"><div class="author-dot" style="background:#BE185D">PN</div><span>Priya Nair · 7 min read</span></div>
            <span>May 20, 2026</span>
          </div>
        </div>
      </div>

      <div class="blog-card">
       <img src="../assets/img/ai.jpeg" alt="Featured Blog">
        <div class="blog-body">
          <span class="blog-cat">AI & Automation</span>
          <h3>Practical AI Features Your Web App Should Have in 2026</h3>
          <p>Beyond chatbots: semantic search, smart form completion, content summarisation, and anomaly detection — AI features that genuinely improve UX.</p>
          <div class="blog-meta">
            <div class="blog-author"><div class="author-dot" style="background:var(--indigo)">AJ</div><span>Alex Jordan · 9 min read</span></div>
            <span>May 15, 2026</span>
          </div>
        </div>
      </div>

      <div class="blog-card">
       <img src="../assets/img/web.jpeg" alt="Featured Blog">
        <div class="blog-body">
          <span class="blog-cat">Web Architecture</span>
          <h3>When Not to Use a Headless CMS (And What to Use Instead)</h3>
          <p>Headless is often the right choice — but not always. We walk through the decision criteria and the projects where a traditional CMS will serve you better.</p>
          <div class="blog-meta">
            <div class="blog-author"><div class="author-dot" style="background:#0891B2">RM</div><span>Riya Menon · 5 min read</span></div>
            <span>May 8, 2026</span>
          </div>
        </div>
      </div>

      <div class="blog-card">
       <img src="../assets/img/strategy.jpeg" alt="Featured Blog" height="57%" width="100%">
        <div class="blog-body">
          <span class="blog-cat">Strategy</span>
          <h3>How to Write a Digital Brief That Gets Great Results</h3>
          <p>The quality of what we build depends heavily on the quality of the brief we receive. Here's exactly what to include — and the sections most clients forget.</p>
          <div class="blog-meta">
            <div class="blog-author"><div class="author-dot" style="background:#D97706">SB</div><span>Sofia Bertrand · 4 min read</span></div>
            <span>April 29, 2026</span>
          </div>
        </div>
      </div>

    </div>
<div></div>



    <!-- NEWSLETTER -->
    <div style="background:var(--silver);border-radius:var(--radius);padding:3rem;text-align:center;margin-top:4rem;border:1px solid var(--border)">

      <span class="section-eyebrow">Stay Sharp</span>
      <?php

if(isset($_GET['newsletter'])){

    if($_GET['newsletter']=="success"){
        echo '<div class="alert-success newsletter-alert">
        Thank you! You have successfully subscribed.
        </div>';
    }
    

    if($_GET['newsletter']=="exists"){
        echo '<div class="alert-warning newsletter-alert">
        This email is already subscribed.
        </div>';
    }

    if($_GET['newsletter']=="invalid"){
        echo '<div class="alert-danger newsletter-alert">
        Please enter a valid email address.
        </div>';
    }

    if($_GET['newsletter']=="error"){
        echo '<div class="alert-danger newsletter-alert">
        Something went wrong. Please try again.
        </div>';
    }

}

?>
      <h2 style="color:var(--navy);margin:.75rem 0 .5rem">Get Insights in Your Inbox</h2>
      <p style="color:var(--slate);max-width:480px;margin:0 auto 2rem">One email every two weeks. Practical articles, no fluff, no promotions. Join 3,400+ digital professionals.</p>
      <form action="newsletter_backend.php" method="POST"
      style="display:flex;gap:1rem;max-width:420px;margin:0 auto;flex-wrap:wrap">

    <input
        type="email"
        name="email"
        placeholder="Your work email address"
        required
        style="flex:1;min-width:200px">

    <button class="btn-primary"
            type="submit"
            style="white-space:nowrap">
        Subscribe →
    </button>

</form>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  });
});
</script>
<script>
setTimeout(function () {

    // Hide alert
    const alert = document.querySelector('.newsletter-alert');
    if (alert) {
        alert.style.display = 'none';
    }

    // Remove URL parameter
    const url = new URL(window.location);

    if (url.searchParams.has('newsletter')) {
        url.searchParams.delete('newsletter');
        window.history.replaceState({}, document.title, url.pathname + url.search);
    }

}, 15000);
</script>
</body>
</html>
