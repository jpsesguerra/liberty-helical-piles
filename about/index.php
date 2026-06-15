<?php
$page_title       = 'About Us';
$page_description = 'Liberty Helical Piles is dedicated to providing top-tier helical pile services throughout the United States. Learn about our commitment to safety, quality, and customer satisfaction.';
require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/topbar.php';
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <!-- Inner Hero -->
  <div class="inner-hero">
    <div class="container">
      <h1>About Us</h1>
    </div>
  </div>

  <!-- ============================================================
       ABOUT — BLOCK 1: Your Trusted Partner (text left, image right)
       ============================================================ -->
  <section class="about-page-section">
    <div class="about-page-inner">

      <div class="abt-block abt-text-left">
        <div class="abt-content">
          <div class="label-tag">
            <span class="label-line" aria-hidden="true"></span>
            Foundation Solutions
          </div>
          <h2>Your Trusted Partner in Foundation Solutions</h2>
          <p class="abt-body">Liberty Helical Piles is dedicated to providing top-tier helical pile services throughout the United States. Our team of certified professionals leverages extensive knowledge in geotechnical engineering and soil mechanics to deliver tailored solutions for each project.</p>
          <a href="/contact" class="btn btn-primary">Get In Touch</a>
        </div>
        <div class="abt-image">
          <img
            src="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_700/about-main_txvvpt"
            alt="Liberty Helical Piles machine installing a helical pile on a residential site"
            loading="lazy"
          />
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       ABOUT — BLOCK 2: Our Commitment (image left, features right)
       ============================================================ -->
  <section class="about-page-section about-page-alt">
    <div class="about-page-inner">

      <div class="abt-block abt-image-left">
        <div class="abt-image">
          <img
            src="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_700/about-commitment_pountq"
            alt="Completed deck supported by helical pile foundation"
            loading="lazy"
          />
        </div>
        <div class="abt-content">
          <div class="label-tag">
            <span class="label-line" aria-hidden="true"></span>
            Our Commitment
          </div>
          <h2>We pride ourselves in reliability and excellence</h2>

          <div class="about-features">

            <div class="about-feature">
              <div class="about-feature-icon">
                <img src="/assets/icons/icon-safety-first.svg" alt="" width="40" height="40" aria-hidden="true" />
              </div>
              <div class="about-feature-text">
                <h4>Safety First</h4>
                <p>We prioritize the well-being of our team and clients, adhering to stringent safety protocols on every job site.</p>
              </div>
            </div>

            <div class="about-feature">
              <div class="about-feature-icon">
                <img src="/assets/icons/icon-quality-assurance.svg" alt="" width="40" height="40" aria-hidden="true" />
              </div>
              <div class="about-feature-text">
                <h4>Quality Assurance</h4>
                <p>From residential decks to large-scale commercial structures, our helical piles are suitable for a wide range of applications.</p>
              </div>
            </div>

            <div class="about-feature">
              <div class="about-feature-icon">
                <img src="/assets/icons/icon-customer-satisfaction.svg" alt="" width="40" height="40" aria-hidden="true" />
              </div>
              <div class="about-feature-text">
                <h4>Customer Satisfaction</h4>
                <p>We value our clients and strive to exceed expectations through transparent communication and reliable service.</p>
              </div>
            </div>

          </div>

          <a href="/contact" class="btn btn-primary">Get In Touch</a>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       ABOUT — BLOCK 3: Partnership / Become an Installer (text left, image right)
       ============================================================ -->
  <section class="about-page-section">
    <div class="about-page-inner">

      <div class="abt-block abt-text-left">
        <div class="abt-content">
          <div class="label-tag">
            <span class="label-line" aria-hidden="true"></span>
            Partnership
          </div>
          <h2>Join Our Network and become an installer</h2>
          <p class="abt-body">We are expanding our network across the U.S. and welcome partnerships with professionals committed to excellence in foundation services.</p>
          <a href="/become-an-installer" class="btn btn-primary">Become an Installer</a>
        </div>
        <div class="abt-image">
          <img
            src="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_700/about-partnership_zcmd9z"
            alt="Installer operating helical pile machinery in winter conditions"
            loading="lazy"
          />
        </div>
      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
