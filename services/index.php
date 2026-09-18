<?php
$page_title       = 'Helical Pile & Foundation Services';
$page_description = 'Liberty Helical Piles offers a full range of foundation services — helical pile and pier installation, underpinning & repair, equipment rentals, and custom fabrication across the United States.';
$canonical_url    = 'https://libertyhelicalpiles.com/services';
$page_schema      = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home",     "item": "https://libertyhelicalpiles.com/" },
    { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://libertyhelicalpiles.com/services" }
  ]
}';
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
