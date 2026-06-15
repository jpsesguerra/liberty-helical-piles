<?php
$page_title       = 'Our Services';
$page_description = 'Liberty Helical Piles offers a full spectrum of foundation services including helical pile installation, underpinning & repair, equipment rentals, and custom fabrication across the United States.';
require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/topbar.php';
require_once __DIR__ . '/../includes/header.php';
?>

<main>

  <!-- Inner Hero -->
  <div class="inner-hero">
    <div class="container">
      <h1>Our Services</h1>
    </div>
  </div>

  <!-- ============================================================
       SERVICES SECTION
       ============================================================ -->
  <section class="services-section services-page">
    <div class="services-inner">

      <div class="section-title">
        <div class="label-tag">
          <span class="label-line" aria-hidden="true"></span>
          Our Services
        </div>
        <h3 class="services-intro">At Liberty Helical Piles, we offer a full spectrum of services designed to meet the diverse needs of our clients:</h3>
      </div>

      <div class="services-grid">

        <a href="/services/helical-pile-installation" class="service-card">
          <div class="service-card-icon">
            <img src="/assets/icons/icon-helical-pile.png" alt="" width="80" height="80" />
          </div>
          <div class="service-card-text">
            <h3>Helical Pile/Piers Installation</h3>
            <p>Adapting to various environments—from tight access corridors to challenging terrains</p>
          </div>
        </a>

        <a href="/services/underpinning-repair" class="service-card">
          <div class="service-card-icon">
            <img src="/assets/icons/icon-underpinning.png" alt="" width="80" height="80" />
          </div>
          <div class="service-card-text">
            <h3>Underpinning &amp; Repair</h3>
            <p>We specialize in stabilizing and repairing existing foundations</p>
          </div>
        </a>

        <a href="/services/equipment-rentals" class="service-card">
          <div class="service-card-icon">
            <img src="/assets/icons/icon-equipment-rentals.png" alt="" width="80" height="80" />
          </div>
          <div class="service-card-text">
            <h3>Equipment Rentals &amp; Sale</h3>
            <p>We provide a variety of equipment options for all your foundation needs</p>
          </div>
        </a>

        <a href="/services/custom-fabrication" class="service-card">
          <div class="service-card-icon">
            <img src="/assets/icons/icon-custom-fabrication.png" alt="" width="80" height="80" />
          </div>
          <div class="service-card-text">
            <h3>Custom Fabrication</h3>
            <p>Optimizing resources, timelines, and strategies for flawless project execution</p>
          </div>
        </a>

      </div>

      <a href="/contact" class="btn btn-primary">Start Your Project</a>

    </div>
  </section>

  <!-- FAQ -->
  <?php require_once __DIR__ . '/../includes/faq.php'; ?>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
