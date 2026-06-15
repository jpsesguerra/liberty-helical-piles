<?php
$page_title       = 'Equipment Rentals &amp; Sale';
$page_description = 'Helical pile equipment rentals and sales for contractors and DIY enthusiasts. Hydraulic driver units, electric drive units, hand install units, and torque monitoring equipment.';
require_once __DIR__ . '/../../includes/head.php';
require_once __DIR__ . '/../../includes/topbar.php';
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- Inner Hero -->
  <div class="inner-hero">
    <div class="container">
      <h1>Equipment Rentals &amp; Sale</h1>
    </div>
  </div>

  <!-- ============================================================
       SERVICE DETAIL
       ============================================================ -->
  <section class="service-detail-section">
    <div class="service-detail-inner">

      <!-- Left: images + body -->
      <div class="service-detail-left">
        <img
          src="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_531/service-rentals_mbkt98"
          alt="Hydraulic driver unit and rental equipment"
          loading="eager"
        />
        <div class="service-detail-body">
          <p>For contractors and DIY enthusiasts, we provide a variety of equipment options:</p>
          <ul class="service-list">
            <li>Hydraulic Driver Units</li>
            <li>Electric Drive Units</li>
            <li>Hand Install Units</li>
            <li>Torque Monitoring Equipment</li>
          </ul>
          <p>Our rental fleet is well-maintained and ready to support your project needs.</p>
        </div>
        <img
          src="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_531/service-rentals-2_tgxceb"
          alt="Installer operating helical pile equipment in field conditions"
          loading="lazy"
          class="service-detail-img2"
        />
      </div>

      <!-- Right: sidebar -->
      <aside class="service-detail-sidebar">

        <div class="sidebar-card">
          <h3 class="sidebar-heading">Other Services</h3>
          <ul class="sidebar-list">
            <li>
              <a href="/services/helical-pile-installation">
                <span>Helical Pile Installation</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M8 5L13 10L8 15" stroke="#6A6A6A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li>
              <a href="/services/underpinning-repair">
                <span>Underpinning &amp; Repair</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M8 5L13 10L8 15" stroke="#6A6A6A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li>
              <a href="/services/custom-fabrication">
                <span>Custom Fabrication</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M8 5L13 10L8 15" stroke="#6A6A6A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <div class="sidebar-cta">
          <div class="sidebar-cta-bg" style="background-image: url('https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_413/sidebar-cta-bg_bcnykl');"></div>
          <div class="sidebar-cta-content">
            <div class="sidebar-cta-icon">
              <img src="/assets/icons/question.svg" alt="" width="48" height="48" aria-hidden="true" />
            </div>
            <h3>Free Consultations</h3>
            <p>If you have any type of questions feel free to contact us anytime!</p>
            <a href="/contact" class="btn btn-primary">Start Your Project</a>
          </div>
        </div>

      </aside>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
