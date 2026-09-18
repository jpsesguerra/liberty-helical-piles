<?php
$page_title       = 'Helical Pile & Pier Installation Services';
$page_description = 'Professional helical pile and pier installation across the United States. Ideal for residential deck foundations, commercial structures, dock foundations, solar arrays, and challenging terrains.';
$canonical_url    = 'https://libertyhelicalpiles.com/services/helical-pile-installation';
$page_schema      = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                          "item": "https://libertyhelicalpiles.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services",                      "item": "https://libertyhelicalpiles.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Helical Pile/Pier Installation","item": "https://libertyhelicalpiles.com/services/helical-pile-installation" }
      ]
    },
    {
      "@type": "Service",
      "name": "Helical Pile/Pier Installation",
      "serviceType": "Helical Pile and Pier Installation",
      "description": "Professional helical pile and pier installation across the United States. Ideal for residential deck foundations, commercial structures, dock foundations, solar arrays, and challenging terrains.",
      "provider": { "@id": "https://libertyhelicalpiles.com/#organization" },
      "areaServed": { "@type": "Country", "name": "United States" },
      "url": "https://libertyhelicalpiles.com/services/helical-pile-installation"
    }
  ]
}';
require_once __DIR__ . '/../../includes/head.php';
require_once __DIR__ . '/../../includes/topbar.php';
require_once __DIR__ . '/../../includes/header.php';
?>

<main>

  <!-- Inner Hero -->
  <div class="inner-hero">
    <div class="container">
      <h1>Helical Pile/Piers Installation</h1>
    </div>
  </div>

  <!-- ============================================================
       SERVICE DETAIL
       ============================================================ -->
  <section class="service-detail-section">
    <div class="service-detail-inner">

      <!-- Left: image + body -->
      <div class="service-detail-left">
        <img
          src="https://res.cloudinary.com/du0witbcr/image/upload/f_auto,q_auto,w_531/service-installation_l7hcbt"
          alt="Helical pile installation on a residential site"
          loading="eager"
        />
        <p>Our experienced installers have successfully completed thousands of helical pile/pier installations, adapting to various environments—from tight access corridors to challenging terrains.</p>
        <p>We utilize a range of equipment, from walk-behind skid steers to 30-ton excavators, ensuring efficient and precise installations.</p>
      </div>

      <!-- Right: sidebar -->
      <aside class="service-detail-sidebar">

        <div class="sidebar-card">
          <h3 class="sidebar-heading">Other Services</h3>
          <ul class="sidebar-list">
            <li>
              <a href="/services/underpinning-repair">
                <span>Underpinning &amp; Repair</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M8 5L13 10L8 15" stroke="#6A6A6A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li>
              <a href="/services/equipment-rentals">
                <span>Equipment Rentals &amp; Sale</span>
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
